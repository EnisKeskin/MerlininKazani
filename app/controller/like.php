<?php

if (url(1) && url(2) && url(3)) {
    $com_id = url(1);
    $us_id = url(2);
    $cont_id = url(3);
    
    if (admiration_check($com_id, $us_id)) {
        admiration_add($com_id, $us_id);
    }elseif(url(4)) {
        $beg_id = url(4);
        admiration_del($beg_id, $us_id);
    }
    header('location:' . site_url("icerik/$cont_id"));
}else{
$cont_id = url(2);
header('location:' . site_url("icerik/$cont_id"));
}
