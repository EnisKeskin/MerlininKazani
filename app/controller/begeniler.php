<?php

if (url(1)) { 
    global $user;
    $conte_id = url(1);
    $user = admiration($conte_id);
} else {
    require view("index");
}

require view("begeniler");
