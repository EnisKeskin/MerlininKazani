<?php require controller("header");?>

<body>
    <div class="siteici">
        <div class="container">
            <div class="row">
                <div class="bildiri">
                    <div class="girisbaslik"><?= category_name_datapull($content_info[0]['kategori_id']) ?></div>
                    <div class="baslikkonusu">
                        <a href=""><?= $content_info[0]['konu_baslik'] ?></a>
                    </div>
                    <div class="icerikresim">
                        <img src="<?= asset_url_img($content_info[0]['konu_resim_url']) ?>" alt="">
                    </div>
                    <div class="icerikyazari">
                        <div class="iceriksol">
                            <div class="yazarresim">
                                <img src="<?= asset_url_img($users_info[0]['kul_resim']) ?>" alt="">
                            </div>
                            <div class="yazar">
                                <div class="yazarismi">
                                    <p><?= $users_info[0]['kul_isim']." ".$users_info[0]['kul_soyadi'] ?></p>
                                </div>
                                <div class="yazilantarih">
                                    <p><?= $content_info[0]['konu_tarih'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="icerikyazisi">
                        <?= $content_info[0]['konu_icerik'] ?>
                    </div>
                    <div class="tags">
                        <ul>
                            <li><a href="">#Resident Evil 2 Remake</a></li>
                            <li><a href="">#Resident Evil 2 Remake</a></li>
                            <li><a href="">#Resident Evil 2 Remake</a></li>
                            <li><a href="">#Resident Evil 2 Remake</a></li>
                        </ul>
                    </div>
                    <div class="yorumlar">
                        <div class="yorumyeri">
                            <div class="icerikyazari">
                                <div class="anabaslik">Yorumlar</div>
                                <div class="iceriksol">
                                    <div class="yazarresim">
                                        <img src="<?= asset_url_img('heybro.jpg') ?>" alt="">
                                    </div>
                                    <div class="yazar">
                                        <div class="yazarismi">
                                            <p>Furkan güler</p>
                                        </div>
                                        <div class="yazilantarih">
                                            <p>14.02.2019 - 14:09</p>
                                        </div>
                                    </div>
                                    <form action="" class="formyeri">
                                        <textarea name="" id="" class="textyorum" placeholder="Yorum"></textarea>
                                        <div class="kalankarakter">
                                            <p>Kalan Sayi:<b>300</b> </p>
                                        </div>
                                        <div class="filler"></div>
                                        <input type="button" value="Gönder" class="gonder">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="yorumlar">
                            <div class="iceriksol">
                                <div class="yazarresim">
                                    <img src="<?= asset_url_img('heybro.jpg') ?>" alt="">
                                </div>
                                <div class="yazar">
                                    <div class="yazarismi">
                                        <p>Furkan güler</p>
                                    </div>
                                    <div class="yazilantarih">
                                        <p>14.02.2019 - 14:09</p>
                                    </div>
                                </div>
                            </div>
                            <div class="yorumgostermeyeri">
                                <div class="yorumyazisi yorumyeri ">
                                    8.5 ve 9 arası bir puan adil gözüküyor. Ama benim gönlümde 9 :) Oyun, tarzı
                                    bakımından klasik Resident Evil 1 remake ve Resident Evil 4'ün oynanabiliğinin
                                    çok güzel bir melezi olmuş. Resident Evil'ın ruhu olan bulmacalar ve hayatta
                                    kalma mücadelesi atmosferi ile RE2 de çok iyi yansıtılmş. Özellikle RE1
                                    remake'in mahlikane de verdiği gerilim dolu atmosferi RE2'de Polis merkesizinde
                                    kendini gösteriyor. Fakat editör arkadaşın bahsettiği tüm eksilere katıldığımı
                                    söylüyemem.
                                    "Ana senaryonun oldukça kısa" = Şu ana kadar çıkan tüm RE'leri bitirmek ilk
                                    oynayışta en fazla 14-15 saatimi almıştır. Daha sonra bu durum sınırsız
                                    silahlarlarla yarıya ve daha aşağı inmiştir. Tabii burada 4-5 ve 6'dan
                                    bahsediyorum. RE7, klasik RE'ye bağlı kalmasına rağmen oyuncuya geri dönmek için
                                    fazla neden vermiyordu. Resident Evil 1 Remake, RE0, RE2 ve RE3 ile kıyaslıyım
                                    durumu. Klasik Resident evil'ları bitirmek ilk seferimde 7-8 saatimi almıştır.
                                    Fakat oyunlar bana geri dönmek için birçok neden vermişlerdir. Yanlış
                                    hatırlamıyorsam Chris ve Jill'in birlikte toplam 8 farklı oyun sonu vardı. Bunun
                                    dışında oyunu hard mode ve sınırsız rocket launcher için 3 saatin altında
                                    bitirmiştim. Aynı şey RE2 remake içinde geçerli. Leon A ve Clarie B^yi bitirdim.
                                    Leon A, 8 saatimi ve Claire B'de 6 saatimi aldı. Ana senaryo toplam 14 saat
                                    tıpki diğer Resident Evil'lar gibi. Üzerine Clarie A'yı 3s ve 20 dk'da bitirdim
                                    ve sınırsız el silahımı aldım. Şu an Leon B'yi oynuyorum. Önceden gözümden
                                    kaçırdığım birkaç bulmacayıda çözdüm. Oyunu farklı açılardan görmek zevkli. Daha
                                    hardcore ve ek oyunlara geçmedim. Kısacası oyun size geri dönmek için nedenler
                                    veriyor ve oynayış süresinizi uzatıyor. Oynanışa yansıyan bazı hatalara gelince
                                    ben PS4 pro'da oynadı. Bu tarz hatalarla karşılaşmadım.Editör arkadaşımız belki
                                    pc'de oynamıştır? Script sahneler beni rahatsız etmedi. Zombilerin zorla
                                    ölmeleri, tekrar canlanmaları ve tahmin edilemez olmaları sizi tetikte tuttuğı
                                    için bence oyuna gerilim katmıştır.
                                </div>
                                <div class="yorumetkinligi">
                                    <span class="ion-thumbsup es"></span>
                                    <span class="ion-chatbubbles es"></span><i>Yanıtla</i>
                                </div>
                                <div class="yorumayorum">
                                    <div class="yazarresim">
                                        <img src="<?= asset_url_img('heybro.jpg') ?>" alt="">
                                    </div>
                                    <div class="yazar">
                                        <div class="yazarismi">
                                            <p>Furkan güler</p>
                                        </div>
                                        <div class="yazilantarih">
                                            <p>14.02.2019 - 14:09</p>
                                        </div>
                                    </div>
                                    <div class="yorumyazisi yorumyeri yorumyorumu ">
                                        8.5 ve 9 arası bir puan adil gözüküyor. Ama benim gönlümde 9 :) Oyun, tarzı
                                        bakımından klasik Resident Evil 1 remake ve Resident Evil 4'ün
                                        oynanabiliğinin
                                        çok güzel bir melezi olmuş. Resident Evil'ın ruhu olan bulmacalar ve hayatta
                                        kalma mücadelesi atmosferi ile RE2 de çok iyi yansıtılmş. Özellikle RE1
                                        remake'in mahlikane de verdiği gerilim dolu atmosferi RE2'de Polis
                                        merkesizinde
                                        kendini gösteriyor. Fakat editör arkadaşın bahsettiği tüm eksilere
                                        katıldığımı
                                        söylüyemem.
                                        "Ana senaryonun oldukça kısa" = Şu ana kadar çıkan tüm RE'leri bitirmek ilk
                                        oynayışta en fazla 14-15 saatimi almıştır. Daha sonra bu durum sınırsız
                                        silahlarlarla yarıya ve daha aşağı inmiştir. Tabii burada 4-5 ve 6'dan
                                        bahsediyorum. RE7, klasik RE'ye bağlı kalmasına rağmen oyuncuya geri dönmek
                                        için
                                        fazla neden vermiyordu. Resident Evil 1 Remake, RE0, RE2 ve RE3 ile
                                        kıyaslıyım
                                        durumu. Klasik Resident evil'ları bitirmek ilk seferimde 7-8 saatimi
                                        almıştır.
                                        Fakat oyunlar bana geri dönmek için birçok neden vermişlerdir. Yanlış
                                        hatırlamıyorsam Chris ve Jill'in birlikte toplam 8 farklı oyun sonu vardı.
                                        Bunun
                                        dışında oyunu hard mode ve sınırsız rocket launcher için 3 saatin altında
                                        bitirmiştim. Aynı şey RE2 remake içinde geçerli. Leon A ve Clarie B^yi
                                        bitirdim.
                                        Leon A, 8 saatimi ve Claire B'de 6 saatimi aldı. Ana senaryo toplam 14 saat
                                        tıpki diğer Resident Evil'lar gibi. Üzerine Clarie A'yı 3s ve 20 dk'da
                                        bitirdim
                                        ve sınırsız el silahımı aldım. Şu an Leon B'yi oynuyorum. Önceden gözümden
                                        kaçırdığım birkaç bulmacayıda çözdüm. Oyunu farklı açılardan görmek zevkli.
                                        Daha
                                        hardcore ve ek oyunlara geçmedim. Kısacası oyun size geri dönmek için
                                        nedenler
                                        veriyor ve oynayış süresinizi uzatıyor. Oynanışa yansıyan bazı hatalara
                                        gelince
                                        ben PS4 pro'da oynadı. Bu tarz hatalarla karşılaşmadım.Editör arkadaşımız
                                        belki
                                        pc'de oynamıştır? Script sahneler beni rahatsız etmedi. Zombilerin zorla
                                        ölmeleri, tekrar canlanmaları ve tahmin edilemez olmaları sizi tetikte
                                        tuttuğı
                                        için bence oyuna gerilim katmıştır.
                                    </div>
                                    <div class="yorumetkinligi">
                                        <span class="ion-thumbsup"></span>
                                    </div>
                                    <div class="ara"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "girisbaslik">HABER AKIŞI</div>
                    <ul>
                        <li onclick="javascript:window.location='http://tunaweb.net';">
                            <div class="resim">
                                <img src="<?= asset_url_img('heybro.jpg') ?>" alt="">
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
                                <img src="<?= asset_url_img('heybro.jpg') ?>" alt="">
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
                                <img src="<?= asset_url_img('heybro.jpg') ?>" alt="">
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
                                <img src="<?= asset_url_img('heybro.jpg') ?>" alt="">
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
                                <img src="<?= asset_url_img('heybro.jpg') ?>" alt="">
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
                                <img src="<?= asset_url_img('heybro.jpg') ?>" alt="">
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
                                <img src="<?= asset_url_img('heybro.jpg') ?>" alt="">
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
                                <img src="<?= asset_url_img('heybro.jpg') ?>" alt="">
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
                                <img src="<?= asset_url_img('heybro.jpg') ?>" alt="">
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
                                    <img src="<?= asset_url_img('heybro.jpg') ?>" alt="">
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
                                <img src="<?= asset_url_img('heybro.jpg') ?>" alt="">
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
                                <img src="<?= asset_url_img('heybro.jpg') ?>" alt="">
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
                                <img src="<?= asset_url_img('heybro.jpg') ?>" alt="">
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
                                <img src="<?= asset_url_img('heybro.jpg') ?>" alt="">
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