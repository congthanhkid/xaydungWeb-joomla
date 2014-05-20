<?php
/**
 * SEF component for Joomla!
 * 
 * @package   JoomSEF
 * @version   3.9.8
 * @author    ARTIO s.r.o., http://www.artio.net
 * @copyright Copyright (C) 2012 ARTIO s.r.o. 
 * @license   GNU/GPLv3 http://www.artio.net/license/gnu-general-public-license
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.model');
jimport('joomla.installer.installer');
jimport('joomla.installer.helper');


class SEFModelExtension extends JModel
{
    /**
     * Constructor that retrieves the ID from the request
     *
     * @access    public
     * @return    void
     */
    function __construct()
    {
        parent::__construct();

        $array = JRequest::getVar('cid',  array(0), '', 'array');
        $this->setId($array[0]);
    }

    function setId($id)
    {
        // Set id and wipe data
        $this->_id          = $id;
        $this->_extension   = null;
    }

    function &getExtension()
    {
        // Load the data
        if (empty( $this->_extension )) {
            $row =& $this->getTable();
            if( !$row->load($this->_id) ) {
                $row->file = $this->_id;
                $row->title = '';
                $row->params = '';
            }
            $option = substr($row->file, 0, -4);
            
            $row->description = '';
            $row->name = '';
            $row->version = '';
            $row->params =& SEFTools::getExtParams($option);
            $row->option = $option;
            
            $xml =& SEFTools::getExtXML($option);
            if( $xml ) {
                $root =& $xml->document;
                $version = $root->attributes('version');
                if( ($root->name() == 'install') && version_compare($version, '1.5', '>=') && ($root->attributes('type') == 'sef_ext') ) {
                    $element =& $root->getElementByPath( 'description' );
                    $row->description = $element ? trim( $element->data() ) : '';

                    $element =& $root->getElementByPath( 'name' );
                    $row->name = $element ? trim( $element->data() ) : '';

                    $element =& $root->getElementByPath( 'version' );
                    $row->version = $element ? trim( $element->data() ) : '';
                }
            }

            // Get the component for this extension
            $model =& JModel::getInstance('Extensions', 'SEFModel');
            $row->component = $model->_getComponent($option);
            
            $row->texts = $this->_getDefaultTexts($option);
            
            $this->_extension = $row;
        }
        
        return $this->_extension;
    }
    
    function _getDefaultTexts($option)
    {
        $db =& JFactory::getDBO();
        
        // Get the texts without translations
        $query = "SELECT `name`, `value` FROM `#__sefexttexts` WHERE `extension` = '{$option}'";
        $db->setQuery($query);
        $texts = $db->loadObjectList();
        
        if (is_array($texts) && (count($texts) > 0)) {
            // Get the IDs for the texts
            $query = "SELECT `id`, `name` FROM `#__sefexttexts` WHERE `extension` = '{$option}'";
            $db->setQuery($query);
            $ids = $db->loadObjectList('name');
            
            foreach ($texts as &$text) {
                $text->id = $ids[$text->name]->id;
            }
        }
        
        return $texts;
    }

    function store()
    {
        $row =& $this->getTable();

        $post = JRequest::get('post');
        
        // Bind the form fields to the table
        if (!$row->bind($post)) {
            JError::raiseError(500, $row->getError() );
        }

        // Save params
        $params = JRequest::getVar( 'params', array(), 'post', 'array' );
        if (is_array( $params )) {
            $p = new JParameter('');
            $p->loadArray($params);
            $row->params = $p->toString();
            
            // Set the title
            if( isset($params['customMenuTitle']) ) {
                $row->title = $params['customMenuTitle'];
            }
        }
        
        // Save subdomains
        $option = JRequest::getString('option', null, 'post');
        if (strlen($params['subdomain'])) {
	        $query="INSERT INTO #__sef_subdomains";
	        $query.=" SET subdomain=".$this->_db->quote($params["subdomain"]).", `option`=".$this->_db->quote($option).", Itemid_titlepage=".$this->_db->quote($params["home_subdomain"]);
	        $query.=" ON DUPLICATE KEY UPDATE `option`=".$this->_db->quote($option).", Itemid_titlepage=".$this->_db->quote($params["home_subdomain"]);
        } else {
        	$query="DELETE FROM #__sef_subdomains";
        	$query.=" WHERE `option`=".$this->_db->quote($option);
        }
        $this->_db->setQuery($query);
        if(!$this->_db->query()) {
        	JError::raiseError(500, $this->_db->stderr(true) );
        }
        
        // Make sure the record is valid
        if (!$row->check()) {
            JError::raiseError(500, $row->getError());
        }

        // Store the table to the database
        if (!$row->store()) {
            JError::raiseError(500, $row->getError());
        }
        
        // Update default texts
        if (isset($post['defaulttexts']) && is_array($post['defaulttexts'])) {
            $db =& JFactory::getDBO();
            foreach ($post['defaulttexts'] as $id => $text) {
                $query = "UPDATE `#__sefexttexts` SET `value` = ".$db->Quote($text)." WHERE `id` = '" . intval($id) . "' LIMIT 1";
                $db->setQuery($query);
                if (!$db->query()) {
                    JError::raiseError(500, $db->getErrorMsg());
                }
            }
        }

        return true;
    }
    
    function storeId()
    {
        $ext = JRequest::getVar('ext');
        
        if (is_null($ext)) {
            return false;
        }
        
        if (substr($ext, -4) != '.xml') {
            $ext .= '.xml';
        }
        
        $row =& $this->getTable();
        if (!$row->load($ext)) {
            $row->file = $ext;
            $params = SEFTools::getExtParams($ext);
        }
        else {
            $params = new JParameter($row->params);
        }
                
        $params = new JParameter($row->params);
        $params->set('downloadId', JRequest::getVar('downloadid', ''));
        $row->params = $params->toString();
        
        if (!$row->check()) {
            return false;
        }
        
        if (!$row->store()) {
            return false;
        }
        
        jexit();
    }
    
    function changeHandler()
    {
        $ext = JRequest::getVar('ext');
        
        if (is_null($ext)) {
            return false;
        }
        
        if (substr($ext, -4) != '.xml') {
            $ext .= '.xml';
        }
        
        $row =& $this->getTable();
        if (!$row->load($ext)) {
            $row->file = $ext;
            $params = SEFTools::getExtParams($ext);
        }
        else {
            $params = new JParameter($row->params);
        }
        
        $handlers = array(0 => 3, 3 => 1, 1 => 2, 2 => 0);
        $handler = intval($params->get('handling', 0));
        $handler = $handlers[$handler];
        $params->set('handling', $handler);
        $row->params = $params->toString();
        
        if (!$row->check()) {
            return false;
        }
        
        if (!$row->store()) {
            return false;
        }
        
        return true;
    }

    function install()
    {
        $mainframe =& JFactory::getApplication();
        
        switch( JRequest::getVar('installtype') )
        {
            case 'folder':
                $package = $this->_getPackageFromFolder();
                break;

            case 'upload':
                $package = $this->_getPackageFromUpload();
                break;

            case 'server':
                $package = $this->_getPackageFromServer();
                break;
                
            default:
                $this->setState('message', 'No Install Type Found');
                $this->setState('result', false);
                return false;
                break;
        }

        // Was the package unpacked?
        if (!$package) {
            $this->setState('message', 'Unable to find install package');
            $this->setState('result', false);
            return false;
        }

        // Get an installer object for the extension type
        jimport('joomla.installer.installer');
        $installer =& JInstaller::getInstance();

        require_once(JPATH_COMPONENT.DS.'adapters'.DS.'sef_ext.php');
        $adapter = new JInstallerSef_Ext($installer);
        $adapter->parent =& $installer;
        $installer->setAdapter('sef_ext', $adapter);

		// Install the package
		if (!$installer->install($package['dir'])) {
			// There was an error installing the package
			$msg = JText::_('SEF Extension').' '.JText::_('Install').': '.JText::_('Error');
			$result = false;
		} else {
			// Package installed sucessfully
			$msg = JText::_('SEF Extension').' '.JText::_('Install').': '.JText::_('Success');
			$result = true;
		}

		// Set some model state values
		$mainframe->enqueueMessage($msg);
		$this->setState('name', $installer->get('name'));
		$this->setState('result', $result);
		$this->setState('message', $installer->message);
		$this->setState('extension.message', $installer->get('extension.message'));

		// Cleanup the install files
		if (!is_file($package['packagefile'])) {
			$config =& JFactory::getConfig();
			$package['packagefile'] = $config->getValue('config.tmp_path').DS.$package['packagefile'];
		}

		JInstallerHelper::cleanupInstall($package['packagefile'], $package['extractdir']);

		return $result;
    }

    function _getPackageFromFolder()
    {
        // Get the path to the package to install
        $p_dir = JRequest::getString('install_directory');
        $p_dir = JPath::clean( $p_dir );

        // Did you give us a valid directory?
        if( !is_dir($p_dir) ) {
            JError::raiseWarning(100, JText::_('Please enter a package directory'));
            return false;
        }

        // Detect the package type
        $type = JInstallerHelper::detectType( $p_dir );

        // Did you give us a valid package?
        if( !$type || ($type != 'sef_ext') ) {
            JError::raiseWarning(100, JText::_('Path does not have a valid sef_ext package'));
            return false;
        }

        $package['packagefile'] = null;
        $package['extractdir'] = null;
        $package['dir'] = $p_dir;
        $package['type'] = $type;

        return $package;
    }

    function _getPackageFromUpload()
    {
        // Get the uploaded file information
        $userfile = JRequest::getVar('install_package', null, 'files', 'array' );

        // Make sure that file uploads are enabled in php
        if (!(bool) ini_get('file_uploads')) {
            JError::raiseWarning(100, JText::_('WARNINSTALLFILE'));
            return false;
        }

        // Make sure that zlib is loaded so that the package can be unpacked
        if (!extension_loaded('zlib')) {
            JError::raiseWarning(100, JText::_('WARNINSTALLZLIB'));
            return false;
        }

        // If there is no uploaded file, we have a problem...
        if (!is_array($userfile) ) {
            JError::raiseWarning(100, JText::_('No file selected'));
            return false;
        }

        // Check if there was a problem uploading the file.
        if ( $userfile['error'] || $userfile['size'] < 1 )
        {
            JError::raiseWarning(100, JText::_('WARNINSTALLUPLOADERROR'));
            return false;
        }

        // Build the appropriate paths
        $config =& JFactory::getConfig();
        $tmp_dest 	= $config->getValue('config.tmp_path').DS.$userfile['name'];
        $tmp_src	= $userfile['tmp_name'];

        // Move uploaded file
        jimport('joomla.filesystem.file');
        $uploaded = JFile::upload($tmp_src, $tmp_dest);

        // Unpack the downloaded package file
        $package = JInstallerHelper::unpack($tmp_dest);

        return $package;
    }
    
    function _getPackageFromServer()
    {
        $extension = trim(JRequest::getString('extension'));
        
        // Make sure we have an extension selected
        if( empty($extension) ) {
            JError::raiseWarning(100, JText::_('No extension selected'));
            return false;
        }
        
        // Make sure that zlib is loaded so that the package can be unpacked
        if (!extension_loaded('zlib')) {
            JError::raiseWarning(100, JText::_('WARNINSTALLZLIB'));
            return false;
        }

        // build the appropriate paths
        $sefConfig =& SEFConfig::getConfig();
        $config =& JFactory::getConfig();
        $tmp_dest = $config->getValue('config.tmp_path').DS.$extension.'.zip';

        // Validate the upgrade on server
        $data = array();
        $data['username'] = $sefConfig->artioUserName;
        $data['password'] = $sefConfig->artioPassword;
        $params =& SEFTools::getExtParams($extension);
        $data['download_id'] = $params->get('downloadId', '');
        $data['file'] = 'ext_joomsef3_' . substr($extension, 4);
        $uri = parse_url(JURI::root());
        $url = $uri['host'].$uri['path'];
        $url = trim($url, '/');
        $data['site'] = $url;
        $data['ip'] = $_SERVER['SERVER_ADDR'];
        $lang =& JFactory::getLanguage();
        $data['lang'] = $lang->getTag();
        $data['cat'] = 'joomsef3';

        // Get the server response
        $response = SEFTools::PostRequest($sefConfig->serverAutoUpgrade, JURI::root(), $data);

        // Check the response
        if( ($response === false) || ($response->code != 200) ) {
            JError::raiseWarning(100, JText::_('Connection to server could not be established.'));
            return false;
        }
        
        // Response OK, check what we got
        if( strpos($response->header, 'Content-Type: application/zip') === false ) {
            JError::raiseWarning(100, $response->content);
            return false;
        }
        
        // Seems we got the ZIP installation package, let's save it to disk
        if (!JFile::write($tmp_dest, $response->content)) {
            JError::raiseWarning(100, JText::_('Unable to save installation file in temp directory.'));
            return false;
        }

        // Unpack the downloaded package file
        $package = JInstallerHelper::unpack($tmp_dest);

        // Delete the package file
        JFile::delete($tmp_dest);

        return $package;
    }

    function delete()
    {
        // Get an installer object for the extension type
        jimport('joomla.installer.installer');
        $installer =& JInstaller::getInstance();

        require_once(JPATH_COMPONENT.DS.'adapters'.DS.'sef_ext.php');
        $adapter = new JInstallerSef_Ext($installer);
        $installer->setAdapter('sef_ext', $adapter);

        $result = $installer->uninstall('sef_ext', $this->_id, 0);

        return $result;
    }

}
?>
