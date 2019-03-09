<?php

function session($isim)
{
    if (isset($_SESSION[$isim])) {
        return $_SESSION[$isim];
    }
    return false;
}
function cookie($isim)
{
    if (isset($_COOKIE[$isim])) {
        return $_COOKIE[$isim];
    }
    return false;
}

function user_check($username, $userpass)
{
    global $db;
    global $giriskontrol;
    $user_url = permalink($username);
    if (!$username) {
        $giriskontrol = 'Kullanıcı Adı boş bırakılamaz!';
    } else if (!$userpass) {
        $giriskontrol = 'Şifre boş bırakılamaz!';
    } else {
        $userpassmd5 = md5($userpass);
        $SQL = "SELECT * FROM kullanici WHERE kullanici_adi = '$username' AND kullanici_sifre = '$userpassmd5' ";
        $rows = mysqli_query($db, $SQL);
        $row = mysqli_fetch_assoc($rows);
        if (isset($row['kullanici_id'])) {
            $_SESSION["username"] = $username;
            $_SESSION["userpass"] = $userpass;
            $_SESSION["userlogin"] = 1;
            header('location:' . site_url('index'));
        } else {
            $giriskontrol = "Bilgileriniz Hatalı";
        }
    }
}
//    
