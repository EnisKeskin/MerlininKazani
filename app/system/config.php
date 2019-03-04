<?php


$config = array();

$config['db'] = [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'dbname' => 'merlinikazani'
];

define('dir',realpath('.'));
define('controller',dir.'/app/controller');
define('view',dir.'/app/view');
define('url', 'http://'.$_SERVER['SERVER_NAME'] . '/MerlininKazani-Proje');