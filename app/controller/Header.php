<?php
if (post('cikis')) {
    unset($_SESSION["userlogin"]);
    header('location:' . site_url('index'));
}
//require view("static/header");
require view("static/header");
