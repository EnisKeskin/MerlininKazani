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

function user_check($username, $userpass, $userremme)
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
            //SESSION ve cookie oluşturulduğu yer
            if ($userremme == 1) {
                setcookie('userid', $row['kullanici_id'], time() + (60 * 60 * 240));
                setcookie('username', $username, time() + (60 * 60 * 240));
                setcookie('userpass', md5($userpass), time() + (60 * 60 * 240));
                setcookie('userlogin', 1, time() + (60 * 60 * 240));
                setcookie('adsoyad', ($row['kullanici_ismi'] . " " . $row['kullanici_soyadi']), time() + (60 * 60 * 240));
            }
            $_SESSION["userid"] = $row['kullanici_id'];
            $_SESSION["username"] = $username;
            $_SESSION["userpass"] = md5($userpass);
            $_SESSION["adsoyad"] = $row['kullanici_ismi'] . " " . $row['kullanici_soyadi'];
            $_SESSION["userlogin"] = 1;
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
    $usrpass = session("userpass");
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

function user_info($user_id)
{
    global $db;
    global $users_info;
    $SQL = "SELECT *
            FROM kullanici
            WHERE kullanici_id = $user_id";
    $rows = mysqli_query($db, $SQL);
    $rows_num = mysqli_num_rows($rows);
    if (isset($rows_num)) {
        $row = mysqli_fetch_assoc($rows);
        extract($row);
        $users_info[0]['kul_id'] = $kullanici_id;
        $users_info[0]['kul_adi'] = $kullanici_adi;
        $users_info[0]['kul_sif'] = $kullanici_sifre;
        $users_info[0]['kul_isim'] = $kullanici_ismi;
        $users_info[0]['kul_soyadi'] = $kullanici_soyadi;
        $users_info[0]['kul_resim'] = $resim_url;
    }
}

function comment_user_info($user_id)
{
    global $db;
    global $com_user_info;
    $SQL = "SELECT *
            FROM kullanici
            WHERE kullanici_id = $user_id";
    $rows = mysqli_query($db, $SQL);
    $rows_num = mysqli_num_rows($rows);
    if (isset($rows_num)) {
        $row = mysqli_fetch_assoc($rows);
        extract($row);
        $com_user_info[0]['kul_id'] = $kullanici_id;
        $com_user_info[0]['kul_adi'] = $kullanici_adi;
        $com_user_info[0]['kul_sif'] = $kullanici_sifre;
        $com_user_info[0]['kul_isim'] = $kullanici_ismi;
        $com_user_info[0]['kul_soyadi'] = $kullanici_soyadi;
        $com_user_info[0]['kul_resim'] = $resim_url;
    }
}

function user_cookie_test()
{
    if (cookie('username') and cookie('userpass') and cookie('userlogin') and cookie('adsoyad') and cookie('userid')) {
        $_SESSION["userid"] = cookie('userid');
        $_SESSION["username"] = cookie('username');
        $_SESSION["userpass"] = cookie('userpass');
        $_SESSION["adsoyad"] = cookie('adsoyad');
        $_SESSION["userlogin"] = cookie('userlogin');
    }
}
