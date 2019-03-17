<?php
if (post('cikis')) {
    unset($_SESSION['username']);
    unset($_SESSION['userpass']);
    unset($_SESSION['userlogin']);
    unset($_SESSION['userid']);
    unset($_SESSION['adsoyad']);
    header('location:' . site_url('index'));
}
    main_category_datapull();
    special_category_datapull();
require view("static/header");
