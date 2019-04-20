<div class="sidebarlist alttaki">
    <div class="sidebarkonu">Teknoloji Haberleri</div>
    <div class="sidebarustu populer">
        <ul>
            <li>Haberler</li>
            <li>İnceleme</li>
            <li>Teknoloji</li>
        </ul>
    </div>
    <div class="populerkonular">
        <?php content_pop(1)?>
        <?php for ($i = 1; $i <= 5; $i++) {?>
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