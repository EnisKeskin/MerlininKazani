<?php
if (url(1)) {
    global $cont_id;
    $cont_id = url(1);
    content_pop_add($cont_id);
    content_information($cont_id);

    if (session('userid')) {
        user_info(session('userid'));
    } elseif (cookie('userid')) {
        user_info(cookie('userid'));
    }

    if (session('userlogin') == 1) {
        main_comment($cont_id);
        if (post('comsubmit')) {
            $deger = $comments_zero_num + 1;
            add_main_content($cont_id, session('userid'), post('yorumun'), $deger);
        }
        if (post('repsubmit')) {
            $yorumyeri = post('yazilan');
            reply_comment($yorumyeri, $cont_id);
            add_reply_comment($cont_id, session('userid'), post('altyorum'), $reply_comment_num + 1, $yorumyeri);
        }
    }
    main_comment($cont_id);
    require view('icerik');
} else {
    require view('index');
}