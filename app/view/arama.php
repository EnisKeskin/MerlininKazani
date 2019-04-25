<?php require controller("header");?>

<body>
    <div class="siteici">
        <div class="container">
            <div class="row">
                <div class="bildi">
                    <div class="girisbaslik">
                        Arama Sonuçları
                    </div>
                    <div class="tumicerikkonu">
                        <div class="arama_sonuc">
                            <ul>
                                <?php for ($i=0; $i < $search_num ; $i++) { ?>
                                <a href="<?php echo site_url('icerik/'.$search_data[$i]['konu_id']); ?>">
                                    <li>
                                        <div class="arama_resim">
                                            <img src="<?php echo asset_url_img($search_data[$i]['konu_resim_url']); ?>"
                                                alt="">
                                        </div>
                                        <div class="arama_text">
                                            <div class="arama_konu">
                                                <?php category_name_datapull($search_data[$i]['konu_id']) ?>
                                            </div>
                                            <div class="arama_baslik">
                                                <?php echo $search_data[$i]['konu_baslik']; ?>
                                            </div>
                                            <div class="arama_tarih">
                                                <?php echo $search_data[$i]['konu_tarih'] ?>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php require controller("sidebar"); ?>
                <?php require controller("sidebarpop")?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</body>
<?php include "static/Footer.php";?>