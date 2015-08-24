<?php defined('_JEXEC') or die;

// Yank in the document via jFactory
$doc 					= JFactory::getDocument();

// Define relative path to the  current template directory
$template 				= 'templates/'.$this->template;

#----------------------------- Inject CSS -----------------------------#
// Bootstrap Core CSS
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
// JQuery
$doc->addScript($template.'/js/jquery.js');
// Bootstrap 3
$doc->addScript($template.'/js/bootstrap.min.js');

#----------------------------- Inject Extras -----------------------------#
// Metas
$doc->setMetaData( 'viewport', 'width=device-width, initial-scale=1.0' );