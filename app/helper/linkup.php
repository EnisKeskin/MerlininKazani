<?php

function linkup($name)
{
    if (session('userlogin')) {
        require view('index');
    } else {
        echo  $name;
        require view($name);
    }

}
