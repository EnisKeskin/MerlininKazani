<?php

function main_comment($content_id)
{
    global $db;
    global $comments_zero;
    global $comments_zero_num;
    $SQL = "SELECT *
            FROM yorum
            WHERE icerik_id = $content_id and ust_yorum_id = 0";
    $rows = mysqli_query($db, $SQL);
    $comments_zero_num = mysqli_num_rows($rows);
    $i = 0;
    while ($row = mysqli_fetch_assoc($rows)) {
        extract($row);
        $comments_zero[$i]["yorum_id"] = $yorum_id;
        $comments_zero[$i]["icerik_id"] = $icerik_id;
        $comments_zero[$i]["yor_kul_id"] = $yor_kul_id;
        $comments_zero[$i]["icerik_yor_id"] = $icerik_yor_id;
        $comments_zero[$i]["yorum"] = $yorum;
        $comments_zero[$i]["yorum_tarih"] = $yorum_tarih;
        $i++;
    }
}

function comment()
{
    global $db;
    global $commen;
    $SQL = "SELECT *
            FROM yorum
            ORDER BY yorum_id DESC";
    $rows = mysqli_query($db, $SQL);
    $i = 0;
    while ($row = mysqli_fetch_assoc($rows)) {
        extract($row);
        $commen[$i]["icerik_id"] = $icerik_id;
        $commen[$i]["yor_kul_id"] = $yor_kul_id;
        $commen[$i]["yorum"] = $yorum;
        $commen[$i]["yorum_tarih"] = $yorum_tarih;
        $i++;
    }
}

function reply_comment($con_comment_id, $icerik_id)
{
    global $db;
    global $reply_comment;
    global $reply_comment_num;
    $SQL = "SELECT *
            FROM yorum
            WHERE icerik_yor_id = '$con_comment_id' and ust_yorum_id > 0 and icerik_id = '$icerik_id'";
    $rows = mysqli_query($db, $SQL);
    $reply_comment_num = mysqli_num_rows($rows);
    $i = 0;
    while ($row = mysqli_fetch_assoc($rows)) {
        extract($row);
        $reply_comment[$i]["yorum_id"] = $yorum_id;
        $reply_comment[$i]["icerik_id"] = $icerik_id;
        $reply_comment[$i]["yor_kul_id"] = $yor_kul_id;
        $reply_comment[$i]["icerik_yor_id"] = $icerik_yor_id;
        $reply_comment[$i]["yorum"] = $yorum;
        $reply_comment[$i]["yorum_tarih"] = $yorum_tarih;
        $i++;
    }
}

function comment_count($content_id)
{
    global $db;
    global $com_row;
    $SQL = "SELECT *
            FROM yorum
            WHERE icerik_id = $content_id";
    $rows = mysqli_query($db, $SQL);
    $com_row = mysqli_num_rows($rows);
}

function add_main_content($content_id, $kul_id, $yorum, $icerik_yor_id)
{
    global $db;
    $date = date('d.m.Y H:i:s');
    $SQL = "INSERT INTO yorum(icerik_id,yor_kul_id,yorum,yorum_tarih,icerik_yor_id)
            VALUES ('$content_id','$kul_id','$yorum','$date','$icerik_yor_id')";
    $rows = mysqli_query($db, $SQL);
}

function add_reply_comment($content_id, $kul_id, $yorum, $ust_yorum_id, $icerik_yor_id)
{
    global $db;
    $date = date('d.m.Y H:i:s');
    $SQL = "INSERT INTO yorum(icerik_id,yor_kul_id,ust_yorum_id,yorum,yorum_tarih,icerik_yor_id)
            VALUES ('$content_id','$kul_id','$ust_yorum_id','$yorum','$date','$icerik_yor_id')";
    $rows = mysqli_query($db, $SQL);
}

function review($com_usr_id)
{
    global $db;
    global $speacial_com;
    global $rows_num;
    $SQL = "SELECT *
            FROM yorum
            WHERE yor_kul_id = $com_usr_id ";
    $rows = mysqli_query($db, $SQL);
    $rows_num = mysqli_num_rows($rows);
    $i = 0;
    while ($row = mysqli_fetch_assoc($rows)) {
        extract($row);
        $speacial_com[$i]['yorum'] = $yorum;
        $speacial_com[$i]['yorum_tarih'] = $yorum_tarih;
        $speacial_com[$i]['icerik_id'] = $icerik_id;
        $i++;
    }
}

function admiration($select)
{
    global $db;
    global $like_sel;
    global $like_num;
    $SQL = "SELECT *
            FROM begeniler
            WHERE beg_yrm_id = $select";
    $rows = mysqli_query($db, $SQL);
    $like_num = mysqli_num_rows($rows);
    $i = 0;
    while ($row = mysqli_fetch_assoc($rows)) {
        extract($row);
        $like_sel[$i]["beg_uye_id"] = $beg_uye_id;
        $i++;
    }
}

function admiration_add($ad_coment_id, $ad_user_id)
{
    global $db;
    $SQL = "INSERT
            INTO begeniler(beg_uye_id,beg_yrm_id)
            VALUES ($ad_user_id,$ad_coment_id)";
    $rows = mysqli_query($db, $SQL);
}

function admiration_check($ad_user_id, $ad_coment_id)
{
    global $db;
    $SQL = "SELECT *
            FROM begeniler
            WHERE beg_uye_id = $ad_coment_id and beg_yrm_id = $ad_user_id";
    $rows = mysqli_query($db, $SQL);
    $admi_num = mysqli_num_rows($rows);
    if ($admi_num == 0) {
        return true;
    } else {
        return false;
    }
}
