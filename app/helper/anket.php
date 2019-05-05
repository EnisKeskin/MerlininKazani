<?php

function survey($active = 1)
{
    global $db;
    global $survey_info;
    global $survey_num_count;
    $SQL = "SELECT *
            FROM anket,anket_cevap
            WHERE anket.anket_ust_id = $active AND anket_cevap.anket_cvp_id = $active
            ";
    $rows = mysqli_query($db, $SQL);
    $survey_num_count = mysqli_num_rows($rows);
    $i = 1;
    while ($row = mysqli_fetch_assoc($rows)) {
        extract($row);
        $survey_info["anket_soru"] = $anket_soru;
        $survey_info['anket_ust_id'] = $anket_ust_id;
        $survey_info[$i]['anket_cvp'] = $anket_cvp;
        $survey_info[$i]['cevap_sayi'] = $cevap_sayi;
        $survey_info[$i]['cvp_id'] = $cvp_id;
        $i++;
    }
}

function survey_ans_count($active = 1)
{
    global $db;
    global $survey_count;
    $SQL = "SELECT SUM(cevap_sayi) as toplam_cevap
            FROM anket,anket_cevap
            WHERE anket.anket_ust_id = $active AND anket_cevap.anket_cvp_id = $active
            ";
    $rows = mysqli_query($db, $SQL);
    $row = mysqli_fetch_assoc($rows);
    extract($row);
    $survey_count = $toplam_cevap;
}

function survey_usr($usr, $survey_id)
{
    global $db;
    $SQL = "SELECT *
            FROM anket_kul
            WHERE kul_id = $usr AND anket_ust_id =  $survey_id ";
    $rows = mysqli_query($db, $SQL);
    $row_num = mysqli_num_rows($rows);
    if ($row_num > 0) {
        return false;
    } else {
        return true;
    }
}

function take_survey($select)
{
    global $db;
    $SQL = "UPDATE anket_cevap
            SET cevap_sayi = cevap_sayi + 1
            WHERE cvp_id = $select";
    $rows = mysqli_query($db, $SQL);
}

function take_usr($usr, $survey_id) {
    global $db;
    $SQL = "INSERT INTO anket_kul (anket_ust_id,kul_id)
            VALUE ($survey_id,$usr)";
    $rows = mysqli_query($db,$SQL);
}