<?php
session_start();
spl_autoload_register(function($class){
    $classfile = __DIR__ . '/classes/class_' . strtolower($class) . '.php';
    if (file_exists($classfile)) {
        require $classfile;
    }
});

Helper::Load();
require 'system/config.php';

$db = mysqli_connect($config['db']['host'], $config['db']['user'], $config['db']['pass'], $config['db']['dbname'] );
mysqli_set_charset($db,"utf8");
if( mysqli_connect_error() ) die("Veritabanına bağlanılamadı...");

