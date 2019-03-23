<?php
 global $db;
 global $content_info;
 global $cate_id;
if (url(1)) {
    $cate_id = url(1);
    content_information($cate_id);
    user_info($content_info[0]['yazar_id']);
    require view('icerik');
}else {
    require view('index');
}
