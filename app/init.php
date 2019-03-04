<?php

spl_autoload_register(function($class){
    $classfile = __DIR__ . '/classes/class_' . strtolower($class) . '.php';
    if (file_exists($classfile)) {
        require $classfile;
    }
});

Helper::Load();
require 'system/config.php';
$host     = "localhost";
$user     = "root";
$password = "";
$database = "merlinikazani";
$db = mysqli_connect( $host, $user, $password, $database );
if( mysqli_connect_error() ) die("Veritabanına bağlanılamadı...");