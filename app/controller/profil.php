<?php

if (url(1) == 'kayit') {
    $isim = url(2);
    $soyisim = url(3);
    $kuladi = url(4);
    $SQL = "INSERT INTO kullanici SET
            kullanici_ismi = '$isim',
            kullanici_soyadi = '$soyisim',
            kullanici_adi = '$kuladi'";
    $rows = mysqli_query($db, $SQL);
    if ($rows) {
        echo 'Uye eklendi !';
    } else {
        echo 'Uye eklenemedi!!!';
    }
} else {
    $url = url(1);
    $SQL = "SELECT * FROM kullanici WHERE kullanici_adi = '$url'";
    $rows = mysqli_query($db, $SQL);
    $row = mysqli_fetch_assoc($rows);
    if(isset($row['kullanici_id'])){
        //kullanici var ise
    }else {
        //kullanici yok ise
    }
    
}

require view('profil');
