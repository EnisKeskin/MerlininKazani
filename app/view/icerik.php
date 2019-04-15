<?php require controller("header");?>

<body>
    <div class="siteici">
        <div class="container">
            <div class="row">
                <div class="bildiri">
                    <div class="girisbaslik"><?php echo category_name_datapull($content_info[0]['kategori_id']) ?></div>
                    <div class="baslikkonusu">
                        <a href=""><?php echo $content_info[0]['konu_baslik'] ?></a>
                    </div>
                    <div class="icerikresim">
                        <img src="<?php echo asset_url_img($content_info[0]['konu_resim_url']) ?>" alt="">
                    </div>
                    <div class="icerikyazari">
                        <div class="kulbilgi">
                            <div class="yazarresim">
                                <img src="<?php echo asset_url_img($users_info[0]['kul_resim']) ?>" alt="">
                            </div>
                            <div class="yazar">
                                <div class="yazarismi">
                                    <p><?php echo $users_info[0]['kul_isim'] . " " . $users_info[0]['kul_soyadi'] ?></p>
                                </div>
                                <div class="yazilantarih">
                                    <p><?php echo $content_info[0]['konu_tarih'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="icerikyazisi">
                        <?php echo $content_info[0]['konu_icerik'] ?>
                    </div>
                    <div class="tags">
                        <ul>
                            <li><a href="">#Resident Evil 2 Remake</a></li>
                            <li><a href="">#Resident Evil 2 Remake</a></li>
                            <li><a href="">#Resident Evil 2 Remake</a></li>
                            <li><a href="">#Resident Evil 2 Remake</a></li>
                        </ul>
                    </div>

                    <div class="comment">
                        <div class="girisbaslik">Yorumlar</div>
                        <div class="user_coment">
                            <div class="kulbilgi">
                                <div class="yazarresim">
                                    <img src="<?php echo asset_url_img($users_info[0]['kul_resim']) ?>" alt="">
                                </div>
                                <div class="yazar">
                                    <div class="yazarismi">
                                        <p><?php echo $users_info[0]['kul_isim'] . " " . $users_info[0]['kul_soyadi'] ?>
                                        </p>
                                    </div>
                                    <div class="yazilantarih">
                                        <p><?php echo $content_info[0]['konu_tarih'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="commentform">
                                <form action="" method="post">
                                    <textarea name="" id="" placeholder="Yorumla" maxlength="2000"
                                        class="textyorum"></textarea>
                                    <div class="commentpost">
                                        <div><span>Kalan Karakter:</span><b>2000</b></div>
                                        <button type="submit" value="1" class="forward">Gönder</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="girisbaslik">HABER AKIŞI</div>
                    <ul>
                        <a href="">
                            <li>
                                <div class="resim">
                                    <img src="<?php echo asset_url_img('heybro.jpg') ?>" alt="">
                                    <div class="soluustu haberlerin">
                                        <div class="yorumsayisi">
                                            <i>
                                                <span class="ion-android-chat" style="color:#fff"></span>
                                                <span style="color:#fff; font-size:13px">23</span>
                                            </i>
                                        </div>
                                    </div>
                                </div>

                                <div class="yazi">
                                    <div class="icyazi">
                                        <div class="icyazikonu">
                                            Haber
                                        </div>
                                        <div class="icyazibaslik">
                                            Hamburgerin wasdasdasdas
                                            dasd asdas
                                        </div>
                                        <div class="icyazialtbaslik">
                                            Görenler şaşkına döndü
                                        </div>
                                        <div class="icyazitarih">
                                            29.01.2019 17:53
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                        </a>

                        <li>
                            <div class="resim">
                                <img src="<?php echo asset_url_img('heybro.jpg') ?>" alt="">
                                <div class="soluustu haberlerin">
                                    <div class="yorumsayisi">
                                        <i>
                                            <span class="ion-android-chat" style="color:#fff"></span>
                                            <span style="color:#fff; font-size:13px">23</span>
                                        </i>
                                    </div>
                                </div>
                            </div>

                            <div class="yazi">
                                <div class="icyazi">
                                    <div class="icyazikonu">
                                        Haber
                                    </div>
                                    <div class="icyazibaslik">
                                        Hamburgerin wasdasdasdas
                                        dasd asdas
                                    </div>
                                    <div class="icyazialtbaslik">
                                        Görenler şaşkına döndü
                                    </div>
                                    <div class="icyazitarih">
                                        29.01.2019 17:53
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="resim">
                                <img src="<?php echo asset_url_img('heybro.jpg') ?>" alt="">
                                <div class="soluustu haberlerin">
                                    <div class="yorumsayisi">
                                        <i>
                                            <span class="ion-android-chat" style="color:#fff"></span>
                                            <span style="color:#fff; font-size:13px">23</span>
                                        </i>
                                    </div>
                                </div>
                            </div>

                            <div class="yazi">
                                <div class="icyazi">
                                    <div class="icyazikonu">
                                        Haber
                                    </div>
                                    <div class="icyazibaslik">
                                        Hamburgerin wasdasdasdas
                                        dasd asdas
                                    </div>
                                    <div class="icyazialtbaslik">
                                        Görenler şaşkına döndü
                                    </div>
                                    <div class="icyazitarih">
                                        29.01.2019 17:53
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="resim">
                                <img src="<?php echo asset_url_img('heybro.jpg') ?>" alt="">
                                <div class="soluustu haberlerin">
                                    <div class="yorumsayisi">
                                        <i>
                                            <span class="ion-android-chat" style="color:#fff"></span>
                                            <span style="color:#fff; font-size:13px">23</span>
                                        </i>
                                    </div>
                                </div>
                            </div>

                            <div class="yazi">
                                <div class="icyazi">
                                    <div class="icyazikonu">
                                        Haber
                                    </div>
                                    <div class="icyazibaslik">
                                        Hamburgerin wasdasdasdas
                                        dasd asdas
                                    </div>
                                    <div class="icyazialtbaslik">
                                        Görenler şaşkına döndü
                                    </div>
                                    <div class="icyazitarih">
                                        29.01.2019 17:53
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="resim">
                                <img src="<?php echo asset_url_img('heybro.jpg') ?>" alt="">
                                <div class="soluustu haberlerin">
                                    <div class="yorumsayisi">
                                        <i>
                                            <span class="ion-android-chat" style="color:#fff"></span>
                                            <span style="color:#fff; font-size:13px">23</span>
                                        </i>
                                    </div>
                                </div>
                            </div>

                            <div class="yazi">
                                <div class="icyazi">
                                    <div class="icyazikonu">
                                        Haber
                                    </div>
                                    <div class="icyazibaslik">
                                        Hamburgerin wasdasdasdas
                                        dasd asdas
                                    </div>
                                    <div class="icyazialtbaslik">
                                        Görenler şaşkına döndü
                                    </div>
                                    <div class="icyazitarih">
                                        29.01.2019 17:53
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="resim">
                                <img src="<?php echo asset_url_img('heybro.jpg') ?>" alt="">
                                <div class="soluustu haberlerin">
                                    <div class="yorumsayisi">
                                        <i>
                                            <span class="ion-android-chat" style="color:#fff"></span>
                                            <span style="color:#fff; font-size:13px">23</span>
                                        </i>
                                    </div>
                                </div>
                            </div>

                            <div class="yazi">
                                <div class="icyazi">
                                    <div class="icyazikonu">
                                        Haber
                                    </div>
                                    <div class="icyazibaslik">
                                        Hamburgerin wasdasdasdas
                                        dasd asdas
                                    </div>
                                    <div class="icyazialtbaslik">
                                        Görenler şaşkına döndü
                                    </div>
                                    <div class="icyazitarih">
                                        29.01.2019 17:53
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="resim">
                                <img src="<?php echo asset_url_img('heybro.jpg') ?>" alt="">
                                <div class="soluustu haberlerin">
                                    <div class="yorumsayisi">
                                        <i>
                                            <span class="ion-android-chat" style="color:#fff"></span>
                                            <span style="color:#fff; font-size:13px">23</span>
                                        </i>
                                    </div>
                                </div>
                            </div>

                            <div class="yazi">
                                <div class="icyazi">
                                    <div class="icyazikonu">
                                        Haber
                                    </div>
                                    <div class="icyazibaslik">
                                        Hamburgerin wasdasdasdas
                                        dasd asdas
                                    </div>
                                    <div class="icyazialtbaslik">
                                        Görenler şaşkına döndü
                                    </div>
                                    <div class="icyazitarih">
                                        29.01.2019 17:53
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="resim">
                                <img src="<?php echo asset_url_img('heybro.jpg') ?>" alt="">
                                <div class="soluustu haberlerin">
                                    <div class="yorumsayisi">
                                        <i>
                                            <span class="ion-android-chat" style="color:#fff"></span>
                                            <span style="color:#fff; font-size:13px">23</span>
                                        </i>
                                    </div>
                                </div>
                            </div>

                            <div class="yazi">
                                <div class="icyazi">
                                    <div class="icyazikonu">
                                        Haber
                                    </div>
                                    <div class="icyazibaslik">
                                        Hamburgerin wasdasdasdas
                                        dasd asdas
                                    </div>
                                    <div class="icyazialtbaslik">
                                        Görenler şaşkına döndü
                                    </div>
                                    <div class="icyazitarih">
                                        29.01.2019 17:53
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="resim">
                                <img src="<?php echo asset_url_img('heybro.jpg') ?>" alt="">
                                <div class="soluustu haberlerin">
                                    <div class="yorumsayisi">
                                        <i>
                                            <span class="ion-android-chat" style="color:#fff"></span>
                                            <span style="color:#fff; font-size:13px">23</span>
                                        </i>
                                    </div>
                                </div>
                            </div>

                            <div class="yazi">
                                <div class="icyazi">
                                    <div class="icyazikonu">
                                        Haber
                                    </div>
                                    <div class="icyazibaslik">
                                        Hamburgerin wasdasdasdas
                                        dasd asdas
                                    </div>
                                    <div class="icyazialtbaslik">
                                        Görenler şaşkına döndü
                                    </div>
                                    <div class="icyazitarih">
                                        29.01.2019 17:53
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
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
                                        <img src="<?php echo asset_url_img('heybro.jpg') ?>" alt="">
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
                                    <img src="<?php echo asset_url_img('heybro.jpg') ?>" alt="">
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
                                    <img src="<?php echo asset_url_img('heybro.jpg') ?>" alt="">
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
                                    <img src="<?php echo asset_url_img('heybro.jpg') ?>" alt="">
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
                                    <img src="<?php echo asset_url_img('heybro.jpg') ?>" alt="">
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
            <div class="clearfix"></div>
        </div>
    </div>
</body>

<?php include "static/Footer.php"?>