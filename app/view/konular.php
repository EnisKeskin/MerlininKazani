<?php require controller("header");?>

<body>
    <div class="siteici">
        <div class="container">
            <div class="row">
                <div class="bildi">
                    <div class = "girisbaslik">
                        <?=$categor_name?>
                    </div>
                    <div class="tumicerikkonu">
                        <ul>
                            <?php content_speacial_datapull(0, 20, 1);?>
                            <?php for ($i = 0; $i < 20; $i++) {?>
                            <li>
                                <div class="icerikkonu">
                                    <a href="">
                                        <div class="icerikkonuici">
                                            <div class="icerikkonuimg">
                                                <img src="<?=asset_url_img($contentInfospe[$i]['konu_resim_url']);?>"
                                                    alt="">
                                            </div>
                                            <div class="ustbosluk">
                                                <div class="icerikkonukat">
                                                    <?php category_name_datapull(1);?>
                                                    <?=$categor_name?>
                                                </div>
                                                <div class="icerikkonubaslik">
                                                    <span><?= $contentInfospe[$i]['konu_baslik']; ?></span>
                                                </div>
                                                <div class="icerikkonualtbaslik">
                                                    <?= $contentInfospe[$i]['konu_altbaslik']; ?>
                                                </div>
                                                <div class="icerikkonutarih">
                                                    <?= $contentInfospe[$i]['konu_tarih']; ?>
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
                        <ul>
                            <li>
                                <a href="">Önceki Sayfa</a>
                            </li>
                            <li>
                                <a href="">1</a>
                            </li>
                            <li>
                                <a href="">1</a>
                            </li>
                            <li>
                                <a href="">1</a>
                            </li>
                            <li>
                                <a href="">1</a>
                            </li>
                            <li>
                                <a href="">1</a>
                            </li>
                            <li>
                                <a href="">Sonraki Sayfa</a>
                            </li>
                        </ul>
                    </div>
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
                                        <img src="../img/heybro.jpg" alt="">
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
                                    <img src="../img/heybro.jpg" alt="">
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
                                    <img src="../img/heybro.jpg" alt="">
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
                                    <img src="../img/heybro.jpg" alt="">
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
                                    <img src="../img/heybro.jpg" alt="">
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
            <div class="clearfix"></div>
        </div>
    </div>
</body>
<?php include "static/Footer.php";?>