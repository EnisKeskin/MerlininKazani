<?php

if (post('submit')) {
    $username = post('kullaniciadi');
    $userpass = post('kullanicisifre');
    $userReMme = post('benihatirla');
    user_check($username, $userpass,$userReMme);
}

linkup('login');
