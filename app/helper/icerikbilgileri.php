<?php

function content_datapull($analysis = 0)
{
    global $db;
    global $contentInfo;
    global $contentRowNum;
    if ($analysis == 0) {
        $SQL = "SELECT *
                FROM icerik
                WHERE kategori_id != 33
                ORDER BY konu_id desc";
    } else {
        $SQL = "SELECT *
                FROM icerik
                WHERE kategori_id in(2,3,4)
                ORDER BY konu_id desc";
    }
    $rows = mysqli_query($db, $SQL);
    $contentRowNum = mysqli_num_rows($rows);
    if (isset($contentRowNum)) {
        $c = 0;
        clear();
        while ($row = mysqli_fetch_assoc($rows)) {
            extract($row);
            $contentInfo[$c]['konu_id'] = $konu_id;
            $contentInfo[$c]['yazar_id'] = $yazar_id;
            $contentInfo[$c]['kategori_id'] = $kategori_id;
            $contentInfo[$c]['kat_alt_id'] = $kategori_alt_id;
            $contentInfo[$c]['konu_baslik'] = $konu_baslik;
            $contentInfo[$c]['konu_altbaslik'] = $konu_altbaslik;
            $contentInfo[$c]['konu_icerik'] = $konu_icerik;
            $contentInfo[$c]['konu_hastag'] = $konu_hastag;
            $contentInfo[$c]['konu_resim_url'] = $konu_resim_url;
            $contentInfo[$c]['konu_tarih'] = $konu_tarih;
            $c++;
        }
    }
}

function content_speacial_datapull($lower = 0, $upper = 10, $select = 0)
{
    global $db;
    global $contentInfospe;
    global $contentRowNumspe;
    $SQL = "SELECT *
            FROM icerik
            WHERE kategori_id = $select
            ORDER BY konu_id DESC
            LIMIT $lower, $upper";
    $rows = mysqli_query($db, $SQL);
    $contentRowNumspe = mysqli_num_rows($rows);
    if (isset($contentRowNumspe)) {
        $c = 0;
        while ($row = mysqli_fetch_assoc($rows)) {
            extract($row);
            $contentInfospe[$c]['konu_id'] = $konu_id;
            $contentInfospe[$c]['yazar_id'] = $yazar_id;
            $contentInfospe[$c]['kategori_id'] = $kategori_id;
            $contentInfospe[$c]['kat_alt_id'] = $kategori_alt_id;
            $contentInfospe[$c]['konu_baslik'] = $konu_baslik;
            $contentInfospe[$c]['konu_altbaslik'] = $konu_altbaslik;
            $contentInfospe[$c]['konu_icerik'] = $konu_icerik;
            $contentInfospe[$c]['konu_hastag'] = $konu_hastag;
            $contentInfospe[$c]['konu_resim_url'] = $konu_resim_url;
            $contentInfospe[$c]['konu_tarih'] = $konu_tarih;
            $c++;
        }
    }
}

function clear()
{
    unset($contentInfo);
}

function content_num($katid = 0)
{
    global $db;
    global $conte_num;
    $SQL = "SELECT *
            FROM icerik
            WHERE kategori_id = $katid";
    $rows = mysqli_query($db, $SQL);
    $conte_num = mysqli_num_rows($rows);
    return $conte_num;
}

function content_information($select)
{
    global $db;
    global $cont_num;
    global $content_info;
    $SQL = "SELECT *
            FROM icerik
            WHERE konu_id = $select";
    $rows = mysqli_query($db, $SQL);
    $cont_num = mysqli_num_rows($rows);
    if (isset($cont_num)) {
        $row = mysqli_fetch_assoc($rows);
        extract($row);
        $content_info[0]['konu_id'] = $konu_id;
        $content_info[0]['yazar_id'] = $yazar_id;
        $content_info[0]['kategori_id'] = $kategori_id;
        $content_info[0]['kat_alt_id'] = $kategori_alt_id;
        $content_info[0]['konu_baslik'] = $konu_baslik;
        $content_info[0]['konu_altbaslik'] = $konu_altbaslik;
        $content_info[0]['konu_icerik'] = $konu_icerik;
        $content_info[0]['konu_hastag'] = $konu_hastag;
        $content_info[0]['konu_resim_url'] = $konu_resim_url;
        $content_info[0]['konu_tarih'] = $konu_tarih;
    }
}