<?php

if (post('submit')) {
    $username = post('kullaniciadi');
    $userpass = post('kullanicisifre');
    user_check($username, $userpass);
}

linkup('login');

