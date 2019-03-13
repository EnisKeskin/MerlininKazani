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
        if (isset($row['kullanici_id'])) {
            $_SESSION["userid"] = $row['kullanici_id'];
            $_SESSION["username"] = $username;
            $_SESSION["userpass"] = $userpass;
            $_SESSION["adsoyad"] = $row['kullanici_ismi'] . " " . $row['kullanici_soyadi'];
            $_SESSION["userlogin"] = 1;
            $kiskulad = $row["kullanici_adi"];
            $kisad = $row["kullanici_ismi"];
            $kissoy = $row["kullanici_soyadi"];
            $kisemail = $row["kullanici_eposta"];
            $kiscep = $row["kullanici_cep"];
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
    $useridcheck = (int) session('userid');
    $usroldpass = post('eskisifre');
    $usrpass = post('yenisifre');
    $usrpasstk = post('yenisifretekrar');
    if ($usrpass == $usrpasstk) {
        $usrpassmd5 = md5($usrpass);
        $usroldpass = md5($usroldpass);
        //int ve string olmasına çok dikkat et...
        if ($useridcheck) {
            $SQL = "UPDATE kullanici
                    SET    kullanici_sifre = '$usrpassmd5'
                    WHERE  kullanici_id = $useridcheck AND kullanici_sifre = '$usroldpass' ";
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
        $giriskontrol = "Tekrar Şifre Aynı değil";
    }
    require header("location:" . site_url("profil/kisibilgileri/" . permalink(session('username'))));
}
