<?php

if (post('submit')) {
    $user_name = post('kullaniciadi');
    $user_pass = post('kullanicisifre');
    $user_url = permalink(post('kullaniciadi'));

    if (!$user_url) {
        $giriskontrol = 'Kullanıcı Adı boş bırakılamaz!';
    } else if (!$user_pass) {
        $giriskontrol = 'Şifre boş bırakılamaz!';
    }
    $SQL = "SELECT * FROM kullanici WHERE kullanici_adi = '$user_name'";
    $rows = mysqli_query($db, $SQL);
    $row = mysqli_fetch_assoc($rows);
    if (isset($row['kullanici_id'])) {
        header('location:' . site_url('profil/' . $user_url));
    } else {
        //kullanici yok ise
    }
}

require view('login');
