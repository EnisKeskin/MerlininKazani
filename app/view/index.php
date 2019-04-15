<?php require controller("header");?>
<div class="siteici">
    <div class="container">
        <div class="bodyustkismi">
            <?php content_datapull();?>
            <div class="bodyustkismisolu">
                <a href="<?php echo  site_url('icerik/'.$contentInfo[0]['konu_id']); ?>">
                    <img src="<?php echo asset_url_img($contentInfo[0]['konu_resim_url']);?>" alt="">
                    <div class="bodyustkismisoluyazikismi">
                        <div class="soluustu">
                            <div class="yorumsayisi">
                                <i>
                                    <span class="ion-android-chat" style="color:#fff"></span>
                                    <span style="color:#fff; font-size:13px">23</span>
                                </i>
                            </div>
                            <div class="konu">
                                <span><?php category_name_datapull($contentInfo[0]['kategori_id'])?></span>
                            </div>
                        </div>
                        <div class="alt">
                            <?php if (category_name_datapull($contentInfo[0]['kategori_id'], 0) == "İnceleme/Özel İnceleme") {?>
                            <div class="inceleme">
                                <span>Editör<br>Puanı</span>
                                <div class="puan">86</div>
                            </div><br>
                            <?php }?>
                            <span class="baslik"><?php echo $contentInfo[0]['konu_baslik']?></span><br>
                            <span class="alti"><?php echo $contentInfo[0]['konu_altbaslik']?></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="boyustkismisagi">
                <div class="witter">
                    <div class="wittercontent">
                        <div class="witterustkisim">
                            <span class="ustsolkisim"><b>M</b>witter</span>
                            <div class="ustsag">
                                <div class="yorumsayisi" style="background-color:#26262690">
                                    <i>
                                        <span class="ion-chatbubbles" style="color:#fff"></span>
                                        <span style="color:#fff; font-size:13px">23</span>
                                    </i>
                                </div>
                            </div>
                        </div>
                        <div class="witteraltkisim">
                            <a href="#">
                                <div class="altkisim">
                                    <b style="font-size: 13px;">Ersin Kılıç</b>
                                    <div class="mwittertarih">25.01.2019 - 16:18</div>
                                    <div class="mwitteraciklama">Dayı oglu naber</div>
                                </div>
                            </a>
                            <input class="yorumbtn" type="button" value="Yorum Yaz">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="arabolum">
            <div class="bodyustkismisolu buyuk">
                <a href="<?php echo  site_url('icerik/'.$contentInfo[1]['konu_id']) ?>">
                    <img src="<?php echo asset_url_img($contentInfo[1]['konu_resim_url']);?>" alt="">
                    <div class="bodyustkismisoluyazikismi">
                        <div class="soluustu">
                            <div class="yorumsayisi">
                                <i>
                                    <span class="ion-android-chat" style="color:#fff"></span>
                                    <span class="yorumsay">23</span>
                                </i>
                            </div>
                            <div class="konu">
                                <span><?php category_name_datapull($contentInfo[1]['kategori_id'])?></span>
                            </div>
                        </div>
                        <div class="alt">
                            <?php if (category_name_datapull($contentInfo[1]['kategori_id'], 0) == "İnceleme/Özel İnceleme") {?>
                            <div class="inceleme">
                                <span>Editör<br>Puanı</span>
                                <div class="puan">86</div>
                            </div><br>
                            <?php }?>
                            <span class="baslik kuc"><?php echo $contentInfo[1]['konu_baslik']?></span><br>
                            <span class="alti kuc"><?php echo $contentInfo[1]['konu_altbaslik']?></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="arabolumsag">
            <?php for ($i = 2; $i <= 5; $i++): ?>
            <div class="bodyustkismisolu kucuk">
                <a href="<?php echo  site_url('icerik/'.$contentInfo[$i]['konu_id']) ?>">
                    <img src="<?php echo asset_url_img($contentInfo[$i]['konu_resim_url']);?>" alt="">
                    <div class="bodyustkismisoluyazikismi">
                        <div class="soluustu">
                            <div class="yorumsayisi">
                                <i>
                                    <span class="ion-android-chat" style="color:#fff"></span>
                                    <span style="color:#fff; font-size:13px">23</span>
                                </i>
                            </div>
                            <div class="konu">
                                <span><?php category_name_datapull($contentInfo[$i]['kategori_id'])?></span>
                            </div>
                        </div>
                        <div class="alt">
                            <span class="baslik"><?php echo  $contentInfo[$i]['konu_baslik'] ?></span><br>
                        </div>
                    </div>
                </a>
            </div>
            <?php endfor?>
            </div>
        </div>

        <div class="row">
            <div class="bildiri">
                <div class="girisbaslik">HABER AKIŞI</div>
                <ul>
                    <?php content_speacial_datapull(0, 10, 1);?>
                    <?php for ($i = 0; $i < 10; $i++) {?>
                    <a href="<?php echo  site_url('icerik/'.$contentInfospe[$i]['konu_id']) ?>" style="display:flex;">
                        <li>
                            <div class="resim">
                                <img src="<?php echo asset_url_img($contentInfospe[$i]['konu_resim_url']);?>" alt="">
                                <div class="soluustu haberlerin">
                                    <div class="yorumsayisi">
                                        <i>
                                            <span class="ion-android-chat" style="color:#fff"></span>
                                            <span style="color:#fff; font-size:12px">23</span>
                                        </i>
                                    </div>
                                </div>
                            </div>
                            <div class="yazi">
                                <div class="icyazi">
                                    <div class="icyazikonu">
                                        <?php category_name_datapull($contentInfospe[$i]['kategori_id']);?>
                                    </div>
                                    <div class="icyazibaslik">
                                        <?php echo $contentInfospe[$i]['konu_baslik'];?>
                                    </div>
                                    <div class="icyazialtbaslik">
                                        <?php echo $contentInfospe[$i]['konu_altbaslik'];?>
                                    </div>
                                    <div class="icyazitarih">
                                        <?php echo $contentInfospe[$i]['konu_tarih'];?>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </a>
                    <?php }?>
                </ul>
            </div>
            <div class="sidebar">
                <div class="sidebarlist">
                    <div class="sidebarkonu">Teknoloji Haberleri</div>
                    <div class="sidebarustu">
                        <div class="siderow">
                            <div class="kapsul">
                                <div class="kapsulsayi">
                                    1
                                </div>
                                <div class="kapsulyazisi">
                                    <a href="#">Bakan Kurum Açıkladı: Satılan Tüm Cam ve Pet Şişeler Depozitolu
                                        olacak</a>
                                </div>
                            </div>
                        </div>
                        <div class="siderow">
                            <div class="kapsul">
                                <div class="kapsulsayi">
                                    2
                                </div>
                                <div class="kapsulyazisi">
                                    <a href="#">Bakan Kurum Açıkladı: Satılan Tüm Cam ve Pet Şişeler Depozitolu
                                        olacak</a>
                                </div>
                            </div>
                        </div>
                        <div class="siderow">
                            <div class="kapsul">
                                <div class="kapsulsayi">
                                    3
                                </div>
                                <div class="kapsulyazisi">
                                    <a href="#">Bakan Kurum Açıkladı: Satılan Tüm Cam ve Pet Şişeler Depozitolu
                                        olacak</a>
                                </div>
                            </div>
                        </div>
                        <div class="siderow">
                            <div class="kapsul">
                                <div class="kapsulsayi">
                                    4
                                </div>
                                <div class="kapsulyazisi">
                                    <a href="#">Bakan Kurum Açıkladı: Satılan Tüm Cam ve Pet Şişeler Depozitolu
                                        olacak</a>
                                </div>
                            </div>
                        </div>
                        <div class="siderow">
                            <div class="kapsul">
                                <div class="kapsulsayi">
                                    5
                                </div>
                                <div class="kapsulyazisi">
                                    <a href="#">Bakan Kurum Açıkladı: Satılan Tüm Cam ve Pet Şişeler Depozitolu
                                        olacak</a>
                                </div>
                            </div>
                        </div>
                        <div class="siderow">
                            <div class="kapsul">
                                <div class="kapsulsayi">
                                    6
                                </div>
                                <div class="kapsulyazisi">
                                    <a href="#">Bakan Kurum Açıkladı: Satılan Tüm Cam ve Pet Şişeler Depozitolu
                                        olacak</a>
                                </div>
                            </div>
                        </div>
                        <div class="siderow">
                            <div class="kapsul">
                                <div class="kapsulsayi">
                                    7
                                </div>
                                <div class="kapsulyazisi">
                                    <a href="#">Bakan Kurum Açıkladı: Satılan Tüm Cam ve Pet Şişeler Depozitolu
                                        olacak</a>
                                </div>
                            </div>
                        </div>
                        <div class="siderow">
                            <div class="kapsul">
                                <div class="kapsulsayi">
                                    8
                                </div>
                                <div class="kapsulyazisi">
                                    <a href="#">Bakan Kurum Açıkladı: Satılan Tüm Cam ve Pet Şişeler Depozitolu
                                        olacak</a>
                                </div>
                            </div>
                        </div>
                        <div class="siderow">
                            <div class="kapsul">
                                <div class="kapsulsayi">
                                    9
                                </div>
                                <div class="kapsulyazisi">
                                    <a href="#">Bakan Kurum Açıkladı: Satılan Tüm Cam ve Pet Şişeler Depozitolu
                                        olacak</a>
                                </div>
                            </div>
                        </div>
                        <div class="siderow">
                            <div class="kapsul">
                                <div class="kapsulsayi">
                                    10
                                </div>
                                <div class="kapsulyazisi">
                                    <a href="#">Bakan Kurum Açıkladı: Satılan Tüm Cam ve Pet Şişeler Depozitolu
                                        olacak</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="devam">
                        <input type="button" value="Daha Fazlası"
                            onclick="javascript:window.location='http://tunaweb.net';">
                    </div>

                </div>
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
                        <div class="pop">
                            <a href="">
                                <div class="resim">
                                    <img src="<?php echo asset_url("img/heybro.jpg");?>" alt="">
                                </div>
                                <div class="sagustu">
                                    <div class="popsayisi">
                                        <i>
                                            <span style="color:black; font-size:14px; font-weight:500">15700</span>
                                        </i>
                                    </div>
                                </div>
                                <div class="popyazi">
                                    <span>asdasdasd</span>
                                </div>
                            </a>
                        </div>
                        <div class="pop">
                            <div class="resim">
                                <img src="<?php echo asset_url("img/heybro.jpg");?>" alt="">
                            </div>
                            <div class="sagustu">
                                <div class="popsayisi">
                                    <i>
                                        <span style="color:black; font-size:14px; font-weight:500">15700</span>
                                    </i>
                                </div>
                            </div>
                            <div class="popyazi">
                                <span>asdasdasdas</span>
                            </div>
                        </div>
                        <div class="pop">
                            <div class="resim">
                                <img src="<?php echo asset_url("img/heybro.jpg");?>" alt="">
                            </div>
                            <div class="sagustu">
                                <div class="popsayisi">
                                    <i>
                                        <span style="color:black; font-size:14px; font-weight:500">15700</span>
                                    </i>
                                </div>
                            </div>
                            <div class="popyazi">

                            </div>
                        </div>
                        <div class="pop">
                            <div class="resim">
                                <img src="<?php echo asset_url("img/heybro.jpg");?>" alt="">
                            </div>
                            <div class="sagustu">
                                <div class="popsayisi">
                                    <i>
                                        <span style="color:black; font-size:14px; font-weight:500">15700</span>
                                    </i>
                                </div>
                            </div>
                            <div class="popyazi">

                            </div>
                        </div>
                        <div class="pop">
                            <div class="resim">
                                <img src="<?php echo asset_url("img/heybro.jpg");?>" alt="">
                            </div>
                            <div class="sagustu">
                                <div class="popsayisi">
                                    <i>
                                        <span style="color:black; font-size:14px; font-weight:500">15700</span>
                                    </i>
                                </div>
                            </div>
                            <div class="popyazi">

                            </div>
                        </div>
                    </div>
                    <div class="devam">
                        <a href=""><input type="button" value="Daha Fazlası"></a>
                    </div>
                </div>
            </div>

        </div>
        <?php content_datapull(1) ?>
        <!--  -->
        <div class="araicerik">
        <?php for ($i=0; $i < 4; $i++) { ?>
        <div class="bodyustkismisolu kucuk">
           <a href="<?php echo  site_url('icerik/'.$contentInfo[$i]['konu_id']) ?>">
            <img src="<?php echo asset_url_img($contentInfo[$i]['konu_resim_url']);?>" alt="">
            <div class="bodyustkismisoluyazikismi">
                <div class="soluustu">
                    <div class="yorumsayisi">
                        <i>
                            <span class="ion-android-chat" style="color:#fff"></span>
                            <span style="color:#fff; font-size:13px">23</span>
                        </i>
                    </div>
                    <div class="konu">
                        <span><?php category_name_datapull($contentInfo[$i]['kategori_id'])?></span>
                    </div>
                </div>
                <div class="alt">
                    <span class="baslik"><?php
                    $boyut = strlen($contentInfo[$i]['konu_baslik']); 
                    
                    if($boyut <= 60) {
                      echo  $contentInfo[$i]['konu_baslik'];
                    }else {
                      echo substr($contentInfo[$i]['konu_baslik'],0,57)."...";
                    }

                    ?></span><br>
                </div>
            </div>
            </a>
        </div>
        <?php } ?>
        </div>
        
        <?php content_speacial_datapull(0, 5, 33)?>
        <div class="MKTV">
            <div class="mktvicerik">
                <div class="ustyazi">MK TV</div>
                <div class="arabosluk">
                    <div class="mktviceriksol">
                        <a href="<?php echo  site_url('icerik/'.$contentInfospe[0]['konu_id']) ?>">
                            <div class="mktvresim">
                                <img src="<?php echo asset_url_img($contentInfospe[0]['konu_resim_url']);?>" alt="">
                            </div>
                            <div class="mktvyazi">
                                <div class="mktvbaslik">
                                    <?php echo $contentInfospe[0]['konu_baslik'];?>
                                </div>
                                <div class="mktvaltbaslik">
                                    <?php echo $contentInfospe[0]['konu_altbaslik']?>
                                </div>
                                <div class="mktvtarih">
                                    <?php echo $contentInfospe[0]['konu_tarih']?>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="mkviceriksag">
                        <div class="mkvicerikvideolar">
                            <?php for ($i = 1; $i <= 4; $i++) {?>
                            <div class="mktvicerikik">
                                <a href="<?php echo  site_url('icerik/'.$contentInfospe[$i]['konu_id']) ?>">
                                    <div class="mktvvideofoto">
                                        <img src="<?php echo asset_url_img($contentInfospe[$i]['konu_resim_url']);?>" alt="">
                                    </div>
                                    <div class="mktvvideoyazilar">
                                        <div class="mktvbaslik kucuk">
                                            <?php echo $contentInfospe[$i]['konu_baslik'];?>
                                        </div>
                                        <div class="mktvtarih">
                                            <?php echo $contentInfospe[$i]['konu_tarih']?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row enalt">
            <div class="bildiri">
                <div class="girisbaslik">HABER AKIŞI</div>
                <ul class = "habelerul">
                    <?php content_speacial_datapull(10, 10, 1);?>
                    <?php for ($i = 0; $i < 10; $i++) {?>
                    <a href="<?php echo  site_url('icerik/'.$contentInfospe[$i]['konu_id']) ?>">
                        <li>
                            <div class="resim">
                                <img src="<?php echo asset_url_img($contentInfospe[$i]['konu_resim_url']);?>" alt="">
                                <div class="soluustu haberlerin">
                                    <div class="yorumsayisi">
                                        <i>
                                            <span class="ion-android-chat" style="color:#fff"></span>
                                            <span style="color:#fff; font-size:12px">23</span>
                                        </i>
                                    </div>
                                </div>
                            </div>
                            <div class="yazi">
                                <div class="icyazi">
                                    <div class="icyazikonu">
                                        <?php category_name_datapull($contentInfospe[$i]['kategori_id']);?>
                                    </div>
                                    <div class="icyazibaslik">
                                        <?php echo $contentInfospe[$i]['konu_baslik'];?>
                                    </div>
                                    <div class="icyazialtbaslik">
                                        <?php echo $contentInfospe[$i]['konu_altbaslik'];?>
                                    </div>
                                    <div class="icyazitarih">
                                        <?php echo $contentInfospe[$i]['konu_tarih'];?>
                                    </div>
                                </div>
                            </div>
                    </a>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <div class="sidebar">
                <div class="anketcontent">
                    <div class="anket">
                        <div class="anketyazisi">
                            <span>Anket</span>
                        </div>
                        <div class="anketsorusu">
                            Sizce hangisi daha başarılı?
                        </div>
                        <div class="anketcevap">
                            <div class="ank"><input type="radio" name="anket1" id="anke" value="anke"><label
                                    for="anke">PUBG</label></div>
                            <div class="ank"><input type="radio" name="anket1" id="anke2" value="anke2"><label
                                    for="anke2">Fortnite</label></div>
                        </div>
                        <div class="anketbuttonlar">
                            <div class="oyla">
                                <input type="button" value="Oyla">
                            </div>
                            <div class="soncular">
                                <input type="button" value="Sonuclar">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="yorumcont">
                    <div style="padding-bottom: 20px; font-weight: 500;">Yorumlar</div>
                    <div class="yorumyazisi">
                        <div class="yorum">
                            <div class="yorumyazan">
                                <span>Bilgekhan</span>
                            </div>
                            <div class="yorumunkendisi">
                                <span>Yeni Batman Arkham oyunu ile ilgili söylenti kafaları karıştırdı</span>
                            </div>
                            <div class="yorumtarihi">
                                <span>01.02.2019 16:03</span>
                            </div>
                        </div>
                    </div>
                    <div class="yorumyazisi">
                        <div class="yorum">
                            <div class="yorumyazan">
                                <span>Bilgekhan</span>
                            </div>
                            <div class="yorumunkendisi">
                                <span>Yeni Batman Arkham oyunu ile ilgili söylenti kafaları karıştırdı</span>
                            </div>
                            <div class="yorumtarihi">
                                <span>01.02.2019 16:03</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "static/Footer.php"?>