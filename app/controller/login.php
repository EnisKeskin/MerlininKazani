<?php

if (post('submit')) {
    $username = post('kullaniciadi');
    $userpass = post('kullanicisifre');
    $giriskontrol = "";
    user_check($username, $userpass);
}

require view('login');
