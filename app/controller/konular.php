 <?php
if(url(1) and url(2) == 1){
    $kat_id = perma_search(url(1));
    $katego_id = category_name_datapull($kat_id,0);
    $sayfa = 0;
}elseif(url(1) and url(2) > 1 ) {
    $perma_id = perma_search(url(1));
    $katego_id = category_name_datapull($perma_id,0);
    $sayfa = 20*(url(2)-1);
}else {
    $kat_id = perma_search(url(1));
    $katego_id = category_name_datapull(1,0);
    $sayfa = 0;
}

require view('konular');