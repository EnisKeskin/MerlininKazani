<?php require controller("header");?>
<div class="siteici">
    <div class="container">
        <div class="bodyustkismi">
            <?php content_datapull();?>
            <?php comment_count($contentInfo[0]['konu_id'])?>
            <div class="bodyustkismisolu">
                <a href="<?php echo site_url('icerik/' . $contentInfo[0]['konu_id']); ?>">
                    <img src="<?php echo asset_url_img($contentInfo[0]['konu_resim_url']); ?>" alt="">
                    <div class="bodyustkismisoluyazikismi">
                        <div class="soluustu">
                            <div class="yorumsayisi">
                                <i>
                                    <span class="ion-android-chat" style="color:#fff"></span>
                                    <span class="yorumadet"><?php echo $com_row ?></span>
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
                            <span class="baslik"><?php echo $contentInfo[0]['konu_baslik'] ?></span><br>
                            <span class="alti"><?php echo $contentInfo[0]['konu_altbaslik'] ?></span>
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
                <?php comment_count($contentInfo[1]['konu_id'])?>
                <a href="<?php echo site_url('icerik/' . $contentInfo[1]['konu_id']) ?>">
                    <img src="<?php echo asset_url_img($contentInfo[1]['konu_resim_url']); ?>" alt="">
                    <div class="bodyustkismisoluyazikismi">
                        <div class="soluustu">
                            <div class="yorumsayisi">
                                <i>
                                    <span class="ion-android-chat" style="color:#fff"></span>
                                    <span class="yorumadet"><?php echo $com_row ?></span>
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
                            <span class="baslik kuc"><?php echo $contentInfo[1]['konu_baslik'] ?></span><br>
                            <span class="alti kuc"><?php echo $contentInfo[1]['konu_altbaslik'] ?></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="arabolumsag">
                <?php for ($i = 2; $i <= 5; $i++): ?>
                <?php comment_count($contentInfo[$i]['konu_id'])?>
                <div class="bodyustkismisolu kucuk">
                    <a href="<?php echo site_url('icerik/' . $contentInfo[$i]['konu_id']) ?>">
                        <img src="<?php echo asset_url_img($contentInfo[$i]['konu_resim_url']); ?>" alt="">
                        <div class="bodyustkismisoluyazikismi">
                            <div class="soluustu">
                                <div class="yorumsayisi">
                                    <i>
                                        <span class="ion-android-chat" style="color:#fff"></span>
                                        <span class="yorumadet"><?php echo $com_row ?></span>
                                    </i>
                                </div>
                                <div class="konu">
                                    <span><?php category_name_datapull($contentInfo[$i]['kategori_id'])?></span>
                                </div>
                            </div>
                            <div class="alt">
                                <span class="baslik"><?php echo $contentInfo[$i]['konu_baslik'] ?></span><br>
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
                    <?php comment_count($contentInfospe[$i]['konu_id'])?>
                    <a href="<?php echo site_url('icerik/' . $contentInfospe[$i]['konu_id']) ?>" style="display:flex;">
                        <li>
                            <div class="resim">
                                <img src="<?php echo asset_url_img($contentInfospe[$i]['konu_resim_url']); ?>" alt="">
                                <div class="soluustu haberlerin">
                                    <div class="yorumsayisi">
                                        <i>
                                            <span class="ion-android-chat" style="color:#fff"></span>
                                            <span class="yorumadet"><?php echo $com_row ?></span>
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
                                        <?php echo $contentInfospe[$i]['konu_baslik']; ?>
                                    </div>
                                    <div class="icyazialtbaslik">
                                        <?php echo $contentInfospe[$i]['konu_altbaslik']; ?>
                                    </div>
                                    <div class="icyazitarih">
                                        <?php echo $contentInfospe[$i]['konu_tarih']; ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </a>
                    <?php }?>
                </ul>
            </div>
            <?php require controller("sidebar");?>
            <?php require controller("sidebarpop")?>
        </div>
        <?php content_datapull(1)?>
        <div class="araicerik">
            <?php for ($i = 0; $i < 4; $i++) {?>
            <?php comment_count($contentInfo[$i]['konu_id'])?>
            <div class="bodyustkismisolu kucuk">
                <a href="<?php echo site_url('icerik/' . $contentInfo[$i]['konu_id']) ?>">
                    <img src="<?php echo asset_url_img($contentInfo[$i]['konu_resim_url']); ?>" alt="">
                    <div class="bodyustkismisoluyazikismi">
                        <div class="soluustu">
                            <div class="yorumsayisi">
                                <i>
                                    <span class="ion-android-chat" style="color:#fff"></span>
                                    <span class="yorumadet"><?php echo $com_row ?></span>
                                </i>
                            </div>
                            <div class="konu">
                                <span><?php category_name_datapull($contentInfo[$i]['kategori_id'])?></span>
                            </div>
                        </div>
                        <div class="alt">
                            <span class="baslik"><?php
                                        $boyut = strlen($contentInfo[$i]['konu_baslik']);
                                            if ($boyut <= 60) {
                                                echo $contentInfo[$i]['konu_baslik'];
                                            } else {
                                                echo substr($contentInfo[$i]['konu_baslik'], 0, 57) . "...";
                                            }
                                            ?>
                            </span><br>
                        </div>
                    </div>
                </a>
            </div>
            <?php }?>
        </div>
        <?php content_speacial_datapull(0, 5, 33)?>
        <div class="MKTV">
            <div class="mktvicerik">
                <div class="ustyazi">MK TV</div>
                <div class="arabosluk">
                    <div class="mktviceriksol">
                        <a href="<?php echo site_url('icerik/' . $contentInfospe[0]['konu_id']) ?>">
                            <div class="mktvresim">
                                <img src="<?php echo asset_url_img($contentInfospe[0]['konu_resim_url']); ?>" alt="">
                            </div>
                            <div class="mktvyazi">
                                <div class="mktvbaslik">
                                    <?php echo $contentInfospe[0]['konu_baslik']; ?>
                                </div>
                                <div class="mktvaltbaslik">
                                    <?php echo $contentInfospe[0]['konu_altbaslik'] ?>
                                </div>
                                <div class="mktvtarih">
                                    <?php echo $contentInfospe[0]['konu_tarih'] ?>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="mkviceriksag">
                        <div class="mkvicerikvideolar">
                            <?php for ($i = 1; $i <= 4; $i++) {?>
                            <div class="mktvicerikik">
                                <a href="<?php echo site_url('icerik/' . $contentInfospe[$i]['konu_id']) ?>">
                                    <div class="mktvvideofoto">
                                        <img src="<?php echo asset_url_img($contentInfospe[$i]['konu_resim_url']); ?>"
                                            alt="">
                                    </div>
                                    <div class="mktvvideoyazilar">
                                        <div class="mktvbaslik kucuk">
                                            <?php echo $contentInfospe[$i]['konu_baslik']; ?>
                                        </div>
                                        <div class="mktvtarih">
                                            <?php echo $contentInfospe[$i]['konu_tarih'] ?>
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
                <ul class="habelerul">
                    <?php content_speacial_datapull(10, 10, 1);?>
                    <?php for ($i = 0; $i < 10; $i++) {?>
                    <?php comment_count($contentInfospe[$i]['konu_id'])?>
                    <a href="<?php echo site_url('icerik/' . $contentInfospe[$i]['konu_id']) ?>">
                        <li>
                            <div class="resim">
                                <img src="<?php echo asset_url_img($contentInfospe[$i]['konu_resim_url']); ?>" alt="">
                                <div class="soluustu haberlerin">
                                    <div class="yorumsayisi">
                                        <i>
                                            <span class="ion-android-chat" style="color:#fff"></span>
                                            <span class="yorumadet"><?php echo $com_row ?></span>
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
                                        <?php echo $contentInfospe[$i]['konu_baslik']; ?>
                                    </div>
                                    <div class="icyazialtbaslik">
                                        <?php echo $contentInfospe[$i]['konu_altbaslik']; ?>
                                    </div>
                                    <div class="icyazitarih">
                                        <?php echo $contentInfospe[$i]['konu_tarih']; ?>
                                    </div>
                                </div>
                            </div>
                    </a>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <div class="sidebar">
                <!--Anket-->
                <?php if(session('userid')){ ?>
                <div class="anketcontent">
                    <div class="anket">
                        <div class="anketyazisi">
                            <span>Anket</span>
                        </div>
                        <form action="" method="post" id="anket_soru" style="display:block;">
                            <div class="anketcevap">
                                <div class="anket_soru"><?php echo $survey_info["anket_soru"] ?></div>
                                <?php for ($i=1; $i <=$survey_num_count ; $i++) { ?>
                                <div class="ank"><input type="radio" name="anket" id="anket<?php echo $i ?>"
                                        value="<?php echo $survey_info[$i]['cvp_id']; ?>"><label
                                        for="anket<?php echo $i ?>"><?php echo $survey_info[$i]['anket_cvp'] ?></label>
                                </div>
                                <?php  } ?>
                            </div>
                            <div class="anketbuttonlar">
                                <div class="oyla">
                                    <?php if(!survey_usr(session('userid'), $survey_info['anket_ust_id'])){ ?>
                                    <input type="button" class="oylain" value="Oyla"
                                        onclick="alert('Daha Önce Ankete Katıldınız')">
                                    <?php } else { ?>
                                    <button type="submit" name="oyla" value="1">Oyla</button>
                                    <?php } ?>
                                </div>
                                <div class="soncular">
                                    <input type="button" value="Sonuclar" onclick="survey_results(1)">
                                </div>
                            </div>
                        </form>
                        <div class="anket_sonuclari" id="anket_sonuc" style="display:none;">
                            <div class="anketcevap">
                                <?php for ($i=1; $i <=$survey_num_count; $i++) { ?>
                                <div class="anket_cevabı"><?php echo $survey_info[$i]['anket_cvp'] ?></div>
                                <div class="level_bar">
                                    <div class="level_bar_value"
                                        style="width:<?php echo round((($survey_info[$i]['cevap_sayi']*100)/$survey_count),2)."%"?>">
                                    </div>
                                </div>
                                <div class="anket_oran">
                                    <?php echo "%". round((($survey_info[$i]['cevap_sayi']*100)/$survey_count),2)?>
                                </div>
                                <?php } ?>

                                <div class="anketbuttonlar">
                                    <div class="geri_don">
                                        <input type="button" value="Ankete Dön" onclick="survey_results(2)">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <?php }else{ ?>
                <div class="anketcontent">
                    <div class="anket">
                        <div class="anketyazisi">
                            <span>Anket</span>
                        </div>
                        <div class="anket_sonuclari" id="anket_sonuc" style="display:block;">
                            <div class="anketcevap">
                                <div class="anket_soru"><?php echo $survey_info["anket_soru"] ?></div>
                                <?php for ($i=1; $i <=$survey_num_count; $i++) { ?>
                                <div class="anket_cevabı"><?php echo $survey_info[$i]['anket_cvp'] ?></div>
                                <div class="level_bar">
                                    <div class="level_bar_value"
                                        style="width:<?php echo round((($survey_info[$i]['cevap_sayi']*100)/$survey_count),2)."%"?>">
                                    </div>
                                </div>
                                <div class="anket_oran">
                                    <?php echo "%". round((($survey_info[$i]['cevap_sayi']*100)/$survey_count),2)?>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
                <?php } ?>
                <!--/Anket-->
                <?php comment(); ?>
                <div class="yorumcont">
                    <div style="padding-bottom: 20px; font-weight: 500;">Yorumlar</div>
                    <?php for ($i=0; $i <5 ; $i++) { ?>
                    <?php user_info($commen[$i]["yor_kul_id"]);?>
                    <div class="yorumyazisi">
                        <a href="<?php echo site_url("icerik/".$commen[$i]["icerik_id"]) ?>">
                        <div class="yorum">
                            <div class="yorumyazan">
                                <span><?php echo $users_info[0]['kul_isim']." ".$users_info[0]['kul_soyadi'] ?></span>
                            </div>
                            <div class="yorumunkendisi">
                                <span><?php echo $commen[$i]["yorum"] ?></span>
                            </div>
                            <div class="yorumtarihi">
                                <span><?php echo $commen[$i]["yorum_tarih"] ?></span>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "static/Footer.php"?>