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
    global $adsoyad;
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
        if (isset($row['kullanici_id'])){
            //SESSION oluşturulduğu yer
            $_SESSION["userid"]    =  $row['kullanici_id'];
            $_SESSION["username"]  =  $username;
            $_SESSION["userpass"]  =  $userpass;
            $_SESSION["adsoyad"]   =  $row['kullanici_ismi'] . " " . $row['kullanici_soyadi'];
            $_SESSION["userlogin"] =  1;
            //Yönlendirme
            header('location:' . site_url('index'));
        } else {
            $giriskontrol = "Bilgileriniz Hatalı";
        }
    }
}
function user_bring()
{
    global $db;
    global $kisbil;
    $usrnm = session("username");
    $usrpass = md5(session("userpass"));
    $SQL = "SELECT * FROM kullanici WHERE kullanici_adi = '$usrnm' AND kullanici_sifre = '$usrpass' ";
    $rows = mysqli_query($db, $SQL);
    $row = mysqli_fetch_assoc($rows);
    if (isset($row['kullanici_id'])) {
        $kisbil[0] = $row["kullanici_adi"];
        $kisbil[1] = $row["kullanici_ismi"];
        $kisbil[2] = $row["kullanici_soyadi"];
        $kisbil[3] = $row["kullanici_eposta"];
        $kisbil[4] = $row["kullanici_dogumtar"];
        $kisbil[5] = $row["kullanici_cep"];
    }
}

function user_pass_replace()
{
    global $db;
    global $giriskontrol;
    $useridcheck = (int) session('userid');
    $usroldpass = post('eskisifre');
    $usrpass = post('yenisifre');
    $usrpasstk = post('yenisifretekrar');
    if ($usrpass == $usrpasstk) {
        $usrpassmd5 = md5($usrpass);
        $usroldpass = md5($usroldpass);
        //int ve string olmasına çok dikkat et...
        if (user_pass_control($usroldpass)) {
            if ($useridcheck) {
                $SQL = "UPDATE kullanici
                    SET    kullanici_sifre = '$usrpassmd5'
                    WHERE  kullanici_id    =  $useridcheck
                    ";
                $rows = mysqli_query($db, $SQL);
                if ($rows) {
                    $_SESSION["userpass"] = $usrpass;
                    $giriskontrol = "Şifre Değiştirildi";
                } else {
                    $giriskontrol = "Şifre Değiştirilemedi <br> Bir Hata Oluştu";
                }
            } else {
                $giriskontrol = "Böyle bir kullanici yok";
            }
        } else {
            $giriskontrol = "Eski Şifren Yanlış";
        }
    } else {
        $giriskontrol = "Tekrar Şifre Aynı değil";
    }
}

function user_pass_control($pass)
{
    global $db;
    $useridcheck = (int) session('userid');
    $SQL = "SELECT * FROM kullanici WHERE kullanici_sifre = '$pass' AND kullanici_id = $useridcheck ";
    $rows = mysqli_query($db, $SQL);
    $row = mysqli_num_rows($rows);
    if ($row != 0) {
        return true;
    } else {
        return false;
    }
}

function user_info_replace()
{
    global $db;
    global $infocheck;
    global $kisbil;
    $isim = post('Adi');
    $soyadi = post('Soyadi');
    $ceptel = post('tel');
    $dogumtar = post('dogumtar');
    $useridcheck = (int) session('userid');
    $SQL = "UPDATE kullanici
            SET kullanici_ismi     = '$isim',
                kullanici_soyadi   = '$soyadi',
                kullanici_cep      = '$ceptel',
                kullanici_dogumtar = '$dogumtar'
            WHERE kullanici_id = $useridcheck ";
    $rows = mysqli_query($db, $SQL);
    if ($rows) {
        $infocheck = "Başarıyla Değiştirildi";
        $kisbil[1] = $isim;
        $kisbil[2] = $soyadi;
        $kisbil[4] = $dogumtar;
        $kisbil[5] = $ceptel;
    } else {
        $infocheck = "Bilinmeyen Bir Hata Oluştu";
    }

}
