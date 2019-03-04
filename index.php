<?php

require "app/init.php";
$url = get('url');
$url = array_filter(explode('/', $url));
if (!isset($url[0])) {
    $url[0] = 'index';
}
if (!file_exists('app/controller/' . $url[0] . '.php')) {
     $url[0] = 'index';
}

require 'app/controller/' . $url[0] . '.php';