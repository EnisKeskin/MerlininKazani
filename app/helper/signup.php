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