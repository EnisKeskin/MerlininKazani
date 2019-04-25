<?php

if(post('search') == 1) {
    $search = post('search_text');
    search($search);
    require view("arama");
}else{
require view("index");
}