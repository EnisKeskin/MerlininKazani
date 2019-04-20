<?php require controller("header");?>

<body>
    <div class="siteici">
        <div class="container">
            <div class="row">
                <div class="bildi">
                    <div class="girisbaslik">
                        <?php echo $categor_name?>
                    </div>
                    <div class="tumicerikkonu">
                        <ul>
                            <?php content_speacial_datapull($sayfa, 20, $katego_id);?>
                            <?php for ($i = 0; $i < $contentRowNumspe; $i++) {if($i == 20)break;    
                            ?>
                            <li>
                                <div class="icerikkonu">
                                    <a href="<?php echo  site_url('icerik/'.$contentInfospe[$i]['konu_id']); ?>">
                                        <div class="icerikkonuici">
                                            <div class="icerikkonuimg">
                                                <img src="<?php echo asset_url_img($contentInfospe[$i]['konu_resim_url']);?>"
                                                    alt="">
                                            </div>
                                            <div class="ustbosluk">
                                                <div class="icerikkonukat">
                                                    <?php echo $categor_name?>
                                                </div>
                                                <div class="icerikkonubaslik">
                                                    <span><?php echo  $contentInfospe[$i]['konu_baslik']; ?></span>
                                                </div>
                                                <div class="icerikkonualtbaslik">
                                                    <?php echo  $contentInfospe[$i]['konu_altbaslik']; ?>
                                                </div>
                                                <div class="icerikkonutarih">
                                                    <?php echo  $contentInfospe[$i]['konu_tarih']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                    <div class="sayfa-numarasi">
                        <?php $sayfadeger = url(2); ((url(2) == 1) ? $sayfadeger = url(2) : $sayfadeger --);$deger = ceil(content_num($katego_id) / 20); ?>
                        <?php if($deger < url(2) || url(2) <= 0 ) { ?>
                        <?php } ?>
                        <ul>
                            <li>
                                <?php if(url(2) > 1) {?>
                                    <a href="<?php echo site_url("konular/".url(1)."/".(url(2)-1));?>">Önceki Sayfa</a>
                                <?php } ?>
                            </li>
                            <?php if($sayfadeger < 5) { ?>
                            <?php for ($i= $sayfadeger; $i < ($deger + $sayfadeger); $i++) {?>
                            <?php if($i <= ($sayfadeger + 3)) { ?>
                            <li>
                                <a href="<?php echo site_url("konular/".url(1)."/".$i);?>"><?php echo  $i ?></a>
                            </li>
                            <?php }
                                else {  ?>
                            <li>
                                <a href="">...</a>
                            </li>
                            <?php break; } ?>
                            <?php } ?>
                            <?php }else { ?>
                                <li>
                                    <a href="<?php echo  site_url("konular/".url(1)."/1");?>"><?php echo  1 ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo  site_url("konular/".url(1)."/2");?>"><?php echo  2 ?></a>
                                </li>
                                <li>
                                    <a href="">...</a>
                                </li>
                                <?php for ($i= $sayfadeger; $i < ($deger + $sayfadeger); $i++) {?>
                                    <?php if($i <= ($sayfadeger + 2) and !($sayfadeger >= ($deger-1))) { ?>
                                        <li>
                                            <a href="<?php echo  site_url("konular/".url(1)."/".$i);?>"><?php echo  $i ?></a>
                                        </li>
                                        <?php }else {  ?>
                                        <li>
                                            <a href="">...</a>
                                        </li>
                                        <?php break; } ?>
                                    <?php } ?>
                               
                                <li>
                                    <a href="<?php echo  site_url("konular/".url(1)."/".($deger-1));?>"><?php echo  ($deger-1) ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo  site_url("konular/".url(1)."/".$deger);?>"><?php echo  $deger ?></a>
                                </li>
                                <?php } ?>
                                <li>
                                    <?php if($deger > url(2)) { ?>
                                        <a href="<?php echo  site_url("konular/" . url(1) . "/" . (url(2) + 1));?>">Sonraki Sayfa</a>
                                    <?php } ?>
                                </li>
                        </ul>
                    </div>
                </div>
                <?php require controller("sidebar"); ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</body>
<?php include "static/Footer.php";?>