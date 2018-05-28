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

// Get an instance of the controller prefixed by HelloWorld
$controller = JControllerLegacy::getInstance('HelloWorld');

// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));
$document = JFactory::getDocument();
$url = $JUri::base() . 'templates/custom/css/sample.css';
$document->addStyleSheet($url);
$url = $JUri::base() . 'templates/custom/js/sample.js';
$document->addScript($url);
// Redirect if set by the controller
$controller->redirect();
