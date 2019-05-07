<?php require controller("header"); ?>

<body>
    <div class="siteici">
        <div class="container">
            <div class="row">
                <div class="begeniler">
                    <?php for ($i = 0; $i <$like_num; $i++) { ?>
                        <?php user_info($like_sel[$i]["beg_uye_id"]); ?>
                        <div class="kulbilgi">
                            <div class="yazarresim">
                                <img src="<?php echo asset_url_img($users_info[0]['kul_resim'])?>" alt="">
                            </div>
                            <div class="yazar">
                                <div class="kullanici_isim">
                                    <p><?php echo $user[$i] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

</body>

<?php include "static/Footer.php" ?>