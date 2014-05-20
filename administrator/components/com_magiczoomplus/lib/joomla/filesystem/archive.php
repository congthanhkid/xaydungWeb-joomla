<?php

/*------------------------------------------------------------------------
# mod_virtuemart_magiczoomplus - Magic Zoom Plus for Joomla with VirtueMart
# ------------------------------------------------------------------------
# Magic Toolbox
# Copyright 2011 MagicToolbox.com. All Rights Reserved.
# @license - http://www.opensource.org/licenses/artistic-license-2.0  Artistic License 2.0 (GPL compatible)
# Website: http://www.magictoolbox.com/magiczoomplus/modules/virtuemart/
# Technical Support: http://www.magictoolbox.com/contact/
/*-------------------------------------------------------------------------*/

/**
 * @version		$Id: archive.php 13341 2009-10-27 03:03:54Z ian $
 * @package		Joomla.Framework
 * @subpackage	FileSystem
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */
defined('JPATH_BASE') or die();
mz_jimport('joomla.error.error');
/**
 * An Archive handling class
 *
 * @static
 * @package 	Joomla.Framework
 * @subpackage	FileSystem
 * @since		1.5
 */
class JArchive
{
	/**
	 * @param	string	The name of the archive file
	 * @param	string	Directory to unpack into
	 * @return	boolean	True for success
	 */
	function extract( $archivename, $extractdir)
	{
		mz_jimport('joomla.filesystem.file');
		mz_jimport('joomla.filesystem.folder');
		$untar = false;
		$result = false;
		$ext = JFile::getExt(strtolower($archivename));
		// check if a tar is embedded...gzip/bzip2 can just be plain files!
		if (JFile::getExt(JFile::stripExt(strtolower($archivename))) == 'tar') {
			$untar = true;
		}

		switch ($ext)
		{
			case 'zip':
				$adapter =& JArchive::getAdapter('zip');
				if ($adapter) {
					$result = $adapter->extract($archivename, $extractdir);
				}
				break;
			
		}

		if (! $result || JError::isError($result)) {
			return false;
		}
		return true;
	}

	function &getAdapter($type)
	{
		static $adapters;

		if (!isset($adapters)) {
			$adapters = array();
		}

		if (!isset($adapters[$type]))
		{
			// Try to load the adapter object
			$class = 'JArchive'.ucfirst($type);

			if (!class_exists($class))
			{
				$path = dirname(__FILE__).DS.'archive'.DS.strtolower($type).'.php';
				if (file_exists($path)) {
					require_once($path);
				} else {
					JError::raiseError(500,JText::_('Unable to load archive'));
				}
			}

			$adapters[$type] = new $class();
		}
		return $adapters[$type];
	}

	/**
	 * @param	string	The name of the archive
	 * @param	mixed	The name of a single file or an array of files
	 * @param	string	The compression for the archive
	 * @param	string	Path to add within the archive
	 * @param	string	Path to remove within the archive
	 * @param	boolean	Automatically append the extension for the archive
	 * @param	boolean	Remove for source files
	 */
	function create($archive, $files, $compress = 'tar', $addPath = '', $removePath = '', $autoExt = false, $cleanUp = false)
	{
		mz_jimport( 'pear.archive_tar.Archive_Tar' );

		if (is_string($files)) {
			$files = array ($files);
		}
		if ($autoExt) {
			$archive .= '.'.$compress;
		}

		$tar = new Archive_Tar( $archive, $compress );
		$tar->setErrorHandling(PEAR_ERROR_PRINT);
		$tar->createModify( $files, $addPath, $removePath );

		if ($cleanUp) {
			JFile::delete( $files );
		}
		return $tar;
	}
}