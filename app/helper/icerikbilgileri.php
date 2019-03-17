<?php

function content_datapull($lower = 0, $upper = 0, $collocation = 'asc')
{
    global $db;
    global $contentInfo;
    global $contentRowNum;
    if (($lower != 0 || $upper != 0 ) and $collocation == 'desc') {
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
