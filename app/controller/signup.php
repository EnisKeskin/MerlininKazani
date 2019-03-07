<?php

function uyecontrol($kuladi = null)
{
    global $db;
    $SQL = "SELECT * FROM kullanici WHERE kullanici_adi = '$kuladi'";
    $rows = mysqli_query($db, $SQL);
    $row = mysqli_fetch_assoc($rows);
    if (isset($row['kullanici_id'])) {
        return false;
    } else {
        return true;
    }
}

function degerkontrol($adi, $soyadi, $kuladi, $kulep, $kulcep, $kulsifre, $kulsifretk)
{
    if ($adi == null || $soyadi == null || $kuladi == null || $kulep == null || $kulcep == null || $kulsifre == null || $kulsifretk == null) {
        return false;
    } else {
        return true;
    }
}

if (post('submit')) {
    $adi = post('Adi');
    $soyadi = post('Soyadi');
    $kuladi = post('nickname');
    $kulep = post('mail');
    $kulcep = post('tel');
    $kulsifre = post('sifre');
    $kulsifretk = post('sifretekrar');
    if (degerkontrol($adi, $soyadi, $kuladi, $kulep, $kulcep, $kulsifre, $kulsifretk)) {
        if (uyecontrol($kuladi)) {
            $SQL = "INSERT INTO kullanici SET
            kullanici_ismi = '$adi',
            kullanici_soyadi = '$soyadi',
            kullanici_adi = '$kuladi',
            kullanici_eposta = '$kulep',
            kullanici_cep = '$kulep',
            kullanici_sifre = '$kulsifre'";
            $rows = mysqli_query($db, $SQL);
            if ($rows) {
                header('location:' . site_url('profil/' . permalink($kuladi)));
            } else {
                echo 'Uye eklenemedi!!!';
            }
        } else {
            $giriskontrol = 'Kullanıcı Adı Kullanılıyor';
        }
    }else {
        $giriskontrol = 'Alan boş bırakılamaz';
    }
}

require view('signup');
