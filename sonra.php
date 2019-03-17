<?php

# Mert Köseoğlu
# www.mkoseoglu.com
# 10.07.2013

## Uzantı Kontrollerim
$uzanti = array('image/jpeg', 'image/jpg', 'image/png', 'image/x-png', 'image/gif');
## Aynı Dizinde Bulunan Resimler Klasörüne Kaydet
$dizin = "resimler";
if (in_array(strtolower($_FILES['resim']['type']), $uzanti)) {
    move_uploaded_file($_FILES['resim']['tmp_name'], "./$dizin/{$_FILES['resim']['name']}");
## Veritabanına Bağlanalım ##
    $baglan = mysql_connect("localhost", "root", "") or die('Sunucuya Bağlanamadım.');
    $asd = mysql_select_db("mertk", $baglan) or die('Veritabanı Bağlanamadık !');
## Dosya İsmimizi Veritabanına Yazdıralım. ##
    mysql_query("SET NAMES utf8");
    mysql_query("SET CHARACTER SET utf8");
    mysql_query("SET COLLATION_CONNECTION = 'utf8_general_ci'");
## Türkçe Karakter Hatası
    $db = $_FILES['resim']['name'];
## Resmimizin Adını Alalım
    $ekle = mysql_query("INSERT INTO blog (resim) VALUES ('" . $db . "')") or die(mysql_Error());
# Blog Tablosu -> Resim Sütununa Ekleyelim.
    echo "Başarılı !";
} else {
    echo "Başarısız !";
}
