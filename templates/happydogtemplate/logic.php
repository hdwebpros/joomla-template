<?php defined('_JEXEC') or die;

// Yank in the document and application via jFactory
$doc 					= JFactory::getDocument();
$app 					= JFactory::getApplication();

// Detecting the view name
$view 					= $app->input->getCmd('view', '');

// Page Class Suffix
$menuItem 				= $app->getMenu()->getActive();
if (is_object($menuItem)){
	$pageClass = $menuItem->params->get('pageclass_sfx');
}

// Define relative path to the  current template directory
$template 				= 'templates/'.$this->template;

#----------------------------- Inject CSS -----------------------------#
// Bootstrap Core CSS
unset($this->_styleSheets[JURI::root(true).'/media/jui/css/bootstrap.min.css']);
$doc->addStyleSheet($template.'/css/bootstrap.min.css');
// Font Awesome
$doc->addStyleSheet($template.'/font-awesome/css/font-awesome.min.css');
// Animate CSS
$doc->addStyleSheet($template.'/css/animate.min.css');
// Site specific custom CSS
$doc->addStyleSheet($template.'/css/creative.css');

// Google fonts styles
$doc->addStyleSheet('//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
$doc->addStyleSheet('//fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic');

#----------------------------- Inject JS -----------------------------#
// Add JQuery and not include 'no conflict'
JHtml::_('jquery.framework', false);
unset($doc->_scripts[$this->baseurl.'/media/jui/js/jquery-noconflict.js']);
// Bootstrap 3 (discovers and uses our JUI link in folder)
JHtml::_('bootstrap.framework');

#----------------------------- Inject Extras -----------------------------#
// Metas
$doc->setMetaData( 'viewport', 'width=device-width, initial-scale=1.0' );