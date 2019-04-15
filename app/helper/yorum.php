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

function reply_comment($comment_id, $icerik_id)
{
    global $db;
    global $reply_comment;
    global $reply_comment_num;
    $SQL = "SELECT *
            FROM yorum
            WHERE icerik_yor_id = $comment_id and ust_yorum_id > 0 and icerik_id = $icerik_id";
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

function add_main_content($content_id, $kul_id, $yorum, $icerik_yor_id)
{
    global $db;
    $date = date('d.m.Y H:i:s');
    $SQL = "INSERT INTO yorum(icerik_id,yor_kul_id,yorum,yorum_tarih,icerik_yor_id)
            VALUES $content_id,$kul_id,$yorum,$date,$icerik_yor_id";
    $rows = mysqli_query($db, $SQL);
}

function add_reply_comment($content_id, $kul_id, $yorum, $rep_com_id)
{
    global $db;
    $date = date('d.m.Y H:i:s');
    $SQL = "INSERT INTO yorum(icerik_id,yor_kul_id,rep_com_id,yorum,yorum_tarih,icerik_yor_id)
            VALUES $content_id,$kul_id,$rep_com_id,$yorum,$date,$icerik_yor_id";
    $rows = mysqli_query($db, $SQL);
}
