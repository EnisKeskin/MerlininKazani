<?php
if (url(1)) {
    global $cont_id;
    $cont_id = url(1);
    content_information($cont_id);
    user_info($content_info[0]['yazar_id']);
    main_comment($cont_id);
    require view('icerik');
} else {
    require view('index');
}
