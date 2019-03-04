<?php

spl_autoload_register(function($class){
    $classfile = __DIR__ . '/classes/class_' . strtolower($class) . '.php';
    if (file_exists($classfile)) {
        require $classfile;
    }
});

Helper::Load();