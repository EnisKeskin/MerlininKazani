<?php

function filterUrl($str)
{
    return htmlspecialchars(trim($str));
}

function get($name)
{
    if (isset($_GET[$name])) {
        if (is_array($_GET[$name])) {
            return array_map(function ($item) {
                return filterUrl($item);
            }, $_GET[$name]);
        }
        return filterUrl($_GET[$name]);
    }
}
function post($name)
{
    if (isset($_POST[$name])) {
        if (is_array($_POST[$name])) {
            return array_map(function ($item) {
                return filterUrl($item);
            }, $_POST[$name]);
        }
        return filterUrl($_POST[$name]);
    }
}
function url($index)
{
    global $_url;
    if (isset($_url[$index])) {
        return $_url[$index];
    }
    return false;
}

function site_url($url = null)
{
    return url . '/' . $url;
}
