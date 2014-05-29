<?php
// No direct access to this file
defined('_JEXEC') or die;
 
// import the list field type
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');
 
/**
 * PortfolioCategory Form Field class for the modules joomla
 */
class JFormFieldJFModules extends JFormFieldList
{
	/**
	 * The field type.
	 *
	 * @var		string
	 */
	protected $type = 'JFModules';
 	var $options = array();
	/**
	 * Method to get a list of options for a list input.
	 *
	 * @return	array		An array of JHtml options.
	 */
	protected function getOptions() 
	{	
		$db = JFactory::getDBO();
        // generating query
		$db->setQuery("SELECT c.title AS name, c.id AS id FROM #__modules c WHERE c.published = 1 AND c.client_id = 0 ORDER BY c.title");
 		// getting results
   		$results = $db->loadObjectList();
		if(count($results)){
  	     	// iterating
			foreach ($results as $item) {
				$this->options[] = JHtml::_('select.option', $item->id, $item->name);	
			}
            return $this->options;
		} else {	
            return $this->options;
		}
	}
	
}
