<?php
global $profilbaslik;
if (session('userlogin') == 1) {
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
        } elseif (post('kulbildeg')) {
            user_info_replace();
        }
        require view('profil');
    }
}else {
    require view('index');
}
