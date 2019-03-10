<?php
global $profilbaslik;
if (url(1) == permalink($_SESSION['username'])) {
    $profilbaslik = "Son Yorumlar";
}
if (url(1) == "mesajlar"){
    $profilbaslik = "Mesajlar";
}
if()

require view('profil');