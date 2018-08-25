<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die;

/**
 * HTML View class for the HelloWorld Component
 *
 * @since  0.0.1
 */
class HelloWorldViewHelloWorld extends JViewLegacy
{
	/**
	 * Display the Hello World view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
		// Assign data to the view
		$this->msg = $this->get('Msg');
		$document = JFactory::getDocument();
		$myDir = 'components/com_helloworld/views/helloworld/tmpl/' . $this->msg . '/';
		$url = JUri::base() . $myDir . 'styles.css';
		$document->addStyleSheet($url);
		$url1 = JUri::base() . $myDir . 'polyfills.js';
		$url2 = JUri::base() . $myDir . 'runtime.js';
		$url3 = JUri::base() . $myDir . 'main.js';
		$document->addScript($url1);
		$document->addScript($url2);
		$document->addScript($url3, array() ,array('defer' => true));

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');

			return false;
		}

		// Display the view
		parent::display($tpl);
	}
}
