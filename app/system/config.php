<?php

$filename;
$config = array();

$config['db'] = [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'dbname' => 'merlininkazani',
];

define('dir', realpath('.'));
define('controller', dir . '/app/controller');
define('view', dir . '/app/view');
$filename = realpath(".");
$parca = explode("\\", $filename);
define('url', 'http://' . $_SERVER['SERVER_NAME'] . "/" . end($parca));