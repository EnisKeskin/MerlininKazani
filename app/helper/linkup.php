<?php

function linkup($name)
{
    if (!isset($_SESSION['userlogin'])) {
        require view("$name");
    } else {
        require view('index');
    }

}
