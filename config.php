<?php
/**
 * General settings, valid for all page requests
 */
 
// Error reporting
error_reporting(-1);

// Change this to __DIR__ whenever PHP5.3 is supported on production environment
if(!defined('__DIR__')) {
  define('__DIR__', dirname(__FILE__));
}

// The contents of the kmoms navlinks
$data['navkmom'] = array(
  'kmom01'   => array('text'=>'kmom01',  'url'=>false),
);

// The contents of the navbar
$data['navbar'] = array(
  'index'         => array('text'=>'Me  ',  'url'=>'index.php'),
  'reports'   => array('text'=>'Reports',  'url'=>'reports.php'),
  'tasks'         => array('text'=>'Tasks', 'url'=>'tasks.php'),
  'viewsource'    => array('text'=>'Source Code', 'url'=>'viewsource.php'),
);
