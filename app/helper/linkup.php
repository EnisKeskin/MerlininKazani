<?php

function linkup($name)
{
    if (session('userlogin')) {
        require view('index');
    } else {
        require view("$name");
    }

}
