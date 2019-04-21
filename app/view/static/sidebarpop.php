<div class="sidebarlist alttaki">
    <div class="sidebarkonu">Teknoloji Haberleri</div>
    <div class="sidebarustu populer">
        <ul>
            <li type = "javascript:;" id= "pophaber" onclick="popOpen(1)" >Haberler</li>
            <li type = "javascript:;" id= "popinceleme" onclick="popOpen(2)">İnceleme</li>
            <li type = "javascript:;" id= "poptekno" onclick="popOpen(3)">Teknoloji</li>
        </ul>
    </div>
    <div class="populerkonular" id="konu_haber" >
        <?php content_pop(1)?>
        <?php if ($cont_pop_num >= 5) {
            $num = 5;
        }else {
            $num = $cont_pop_num;
        }?>
        <?php for ($i = 1; $i <= $num; $i++) {?>
        <div class="pop">
            <a href="">
                <div class="resim">
                    <img src="<?php echo asset_url_img($content_pop[$i - 1]['konu_resim_url']); ?>" alt="">
                </div>
                <div class="sagustu">
                    <div class="popsayisi">
                        <i>
                            <span class="popsayac"><?php echo $content_pop[$i - 1]['konu_pop']; ?></span>
                        </i>
                    </div>
                </div>
                <div class="popyazi">
                    <span> <?php echo $content_pop[$i - 1]['konu_baslik'] ?> </span>
                </div>
            </a>
        </div>
        <?php }?>
    </div>
    <div class="populerkonular" id="konu_inceleme" style="display:none;" >
        <?php content_pop(2)?>
        <?php if ($cont_pop_num >= 5) {
            $num = 5;
        }else {
            $num = $cont_pop_num;
        }?>
        <?php for ($i = 1; $i <= $num; $i++) {?>
        <div class="pop">
            <a href="">
                <div class="resim">
                    <img src="<?php echo asset_url_img($content_pop[$i - 1]['konu_resim_url']); ?>" alt="">
                </div>
                <div class="sagustu">
                    <div class="popsayisi">
                        <i>
                            <span class="popsayac"><?php echo $content_pop[$i - 1]['konu_pop']; ?></span>
                        </i>
                    </div>
                </div>
                <div class="popyazi">
                    <span> <?php echo $content_pop[$i - 1]['konu_baslik'] ?> </span>
                </div>
            </a>
        </div>
        <?php }?>
    </div>
    <div class="populerkonular" id="konu_tekno" style="display:none;" >
        <?php content_pop(16)?>
        <?php if ($cont_pop_num >= 5) {
            $num = 5;
        }else {
            $num = $cont_pop_num;
        }?>
        <?php for ($i = 1; $i <= $num; $i++) {?>
        <div class="pop">
            <a href="">
                <div class="resim">
                    <img src="<?php echo asset_url_img($content_pop[$i - 1]['konu_resim_url']); ?>" alt="">
                </div>
                <div class="sagustu">
                    <div class="popsayisi">
                        <i>
                            <span class="popsayac"><?php echo $content_pop[$i - 1]['konu_pop']; ?></span>
                        </i>
                    </div>
                </div>
                <div class="popyazi">
                    <span> <?php echo $content_pop[$i - 1]['konu_baslik'] ?> </span>
                </div>
            </a>
        </div>
        <?php }?>
    </div>

    <div class="devam">
        <a href=""><input type="button" value="Daha Fazlası"></a>
    </div>
</div>
</div>