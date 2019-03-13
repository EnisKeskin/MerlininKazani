<?php
global $profilbaslik;
if (url(1) == permalink(session("username"))) {
    $profilbaslik = "Son Yorumlar";
    require view('profil');
}
if (url(1) == "mesajlar") {
    $profilbaslik = "Mesajlar";
    require view('profil');
}
if (url(1) == "kisibilgileri") {
    $profilbaslik = "Kişisel Bilgiler";
    user_bring();
    if (post('sifredegis')) {
        user_pass_replace();
    }
    require view('profil');
}

require view('index');
