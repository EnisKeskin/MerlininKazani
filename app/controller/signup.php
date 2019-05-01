<?php


if (post('submit')) {
    $adi = post('Adi');
    $soyadi = post('Soyadi');
    $kuladi = post('nickname');
    $kulep = post('mail');
    $kulcep = post('tel');
    $kulsifre = md5(post('sifre'));
    $kulsifre1 = post('sifre');
    $kulsifretk = md5(post('sifretekrar'));
    if (degerkontrol($adi, $soyadi, $kuladi, $kulep, $kulcep, $kulsifre, $kulsifretk)) {
        if ($kulsifre == $kulsifretk) {
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
                    user_check($kuladi,$kulsifre1);
                } else {
                    echo 'Uye eklenemedi!!!';
                }
            } else {
                $giriskontrol = 'Kullanıcı adı kullanılıyor';
            }
        }else {
            $giriskontrol = 'Şifreler aynı değil';
        }
    } else {
        $giriskontrol = 'Alanlar boş bırakılamaz';
    }
}
linkup('signup');
