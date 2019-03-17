<?php

function main_category_datapull()
{
    global $db;
    global $main_category;
    global $row_main_num;
    $SQL = "SELECT  *
            FROM    ana_kategori
            LIMIT   8
            ";
    $rows = mysqli_query($db, $SQL);
    $row_main_num = mysqli_num_rows($rows);
    if (isset($row_main_num)) {
        $c = 0;
        while ($row = mysqli_fetch_assoc($rows)) {
            extract($row);
            $main_category[$c][0] = $ana_kategori_id;
            $main_category[$c][1] = $ana_kategori_ad;
            $main_category[$c][2] = $renk;
            $c++;
        }
    } else {
        return false;
    }
}

function category_datapull($ana_kategori_id)
{
    global $db;
    global $category;
    global $row_cat_num;
    $SQL = "SELECT *
            FROM kategoriler
            WHERE ana_kategori_id = $ana_kategori_id";
    $rows = mysqli_query($db, $SQL);
    $row_cat_num = mysqli_num_rows($rows);
    if (isset($row_cat_num)) {
        $c = 0;
        while ($row = mysqli_fetch_assoc($rows)) {
            extract($row);
            $category[$c] = $kategori_adi;
            $c++;
        }
    }
}

function category_name_datapull($kategori_id)
{
    global $db;
    global $categor_name;
    global $row_catnm_num;
    $SQL = "SELECT *
            FROM kategoriler
            WHERE kategori_id = $kategori_id";
    $rows = mysqli_query($db, $SQL);
    $row_catnm_num = mysqli_num_rows($rows);
    if (isset($row_catnm_num)) {
        $row = mysqli_fetch_assoc($rows);
        extract($row);
        $categor_name = $kategori_adi;
    }
}

function special_category_datapull()
{
    global $db;
    global $specialCat;
    global $row_special_num;
    $SQL = "SELECT ozel_kategori_ad
            FROM ozel_kategoriler";
    $rows = mysqli_query($db, $SQL);
    $row_special_num = mysqli_num_rows($rows);
    if (isset($row_special_num)) {
        $c = 0;
        while ($row = mysqli_fetch_assoc($rows)) {
            extract($row);
            $specialCat[$c] = $ozel_kategori_ad;
            $c++;
        }
    }
}