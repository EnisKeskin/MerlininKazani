<?php

function content_datapull($lower = 0, $upper = 0, $collocation = 'asc')
{
    global $db;
    global $contentInfo;
    global $contentRowNum;
    if (($lower != 0 || $upper != 0) and $collocation == 'desc') {
        $SQL = "SELECT *
            FROM icerik
            ORDER BY konu_id desc
            LIMIT $lower, $upper";
    } elseif (($lower != 0 || $upper != 0) and $collocation == 'asc') {
        $SQL = "SELECT *
        FROM icerik
        ORDER BY konu_id asc
        LIMIT $lower, $upper";
    } else {
        $SQL = "SELECT *
        FROM icerik";
    }
    $rows = mysqli_query($db, $SQL);
    $contentRowNum = mysqli_num_rows($rows);
    if (isset($contentRowNum)) {
        $c = 0;
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
