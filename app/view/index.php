<?php require controller("header");?>
<div class="siteici">
    <div class="container">
        <div class="bodyustkismi">
            <div class="bodyustkismisolu" onclick="javascript:window.location='http://tunaweb.net';">
                <img src="<?=asset_url("img/heybro.jpg"); ?>" alt="">
                <div class="bodyustkismisoluyazikismi" onclick="javascript:window.location='http://tunaweb.net';">
                    <div class="soluustu">
                        <div class="yorumsayisi">
                            <i>
                                <span class="ion-android-chat" style="color:#fff"></span>
                                <span style="color:#fff; font-size:13px">23</span>
                            </i>
                        </div>
                        <div class="konu">
                            <span>Yiyecek</span>
                        </div>
                    </div>
                    <div class="alt">
                        <div class="inceleme">
                            <span>Editör<br>Puanı</span>
                            <div class="puan">86</div>
                        </div><br>
                        <span class="platfromkategorisi">Yemek</span> <br>
                        <span class="baslik">HAMBURGER</span><br>
                        <span class="altı">Lezzetli</span>
                    </div>
                </div>
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
                <a href="">
                    <img src="<?=asset_url("img/heybro.jpg"); ?>" alt="">
                    <div class="bodyustkismisoluyazikismi">
                        <div class="soluustu">
                            <div class="yorumsayisi">
                                <i>
                                    <span class="ion-android-chat" style="color:#fff"></span>
                                    <span class="yorumsay">23</span>
                                </i>
                            </div>
                            <div class="konu">
                                <span>Yiyecek</span>
                            </div>
                        </div>
                        <div class="alt">
                            <div class="inceleme">
                                <span>Editör<br>Puanı</span>
                                <div class="puan">86</div>
                            </div><br>
                            <span class="platfromkategorisi">Yemek</span> <br>
                            <span class="baslik">HAMBURGER</span><br>
                            <span class="altı">Lezzetli</span>
                        </div>
                    </div>
                </a>
            </div>

            <?php for ($i = 0; $i < 4; $i++): ?>
            <div class="bodyustkismisolu kucuk">
                <a href="">
                    <img src="<?=asset_url("img/heybro.jpg"); ?>" alt="">
                    <div class="bodyustkismisoluyazikismi">
                        <div class="soluustu">
                            <div class="yorumsayisi">
                                <i>
                                    <span class="ion-android-chat" style="color:#fff"></span>
                                    <span style="color:#fff; font-size:13px">23</span>
                                </i>
                            </div>
                            <div class="konu">
                                <span>Yiyecek</span>
                            </div>
                        </div>
                        <div class="alt">
                            <span class="baslik">KÜÇÜK HAMBURGER</span><br>
                        </div>
                    </div>
                </a>
            </div>
            <?php endfor?>

        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="bildiri">
                <div style="margin: 20px 0px 20px 10px; font-weight:500;">HABER AKIŞI</div>
                <ul>
                    <?php for ($i = 0; $i < 10; $i++) {?>
                    <a href="" style="display:flex;">
                        <li>
                            <div class="resim">
                                <img src="<?=asset_url("img/heybro.jpg"); ?>" alt="">
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
                                        Hitman 2'nin ilk bölümü tüm platformlarda ücretsiz oldu!
                                    </div>
                                    <div class="icyazialtbaslik">
                                        Görenler şaşkına döndü
                                    </div>
                                    <div class="icyazitarih">
                                        29.01.2019 17:53
                                    </div>
                                </div>
                            </div>
                    </a>
                    </li>
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
                                    <img src="<?=asset_url("img/heybro.jpg"); ?>" alt="">
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
                                <img src="<?=asset_url("img/heybro.jpg"); ?>" alt="">
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
                                <img src="<?=asset_url("img/heybro.jpg"); ?>" alt="">
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
                                <img src="<?=asset_url("img/heybro.jpg"); ?>" alt="">
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
                                <img src="<?=asset_url("img/heybro.jpg"); ?>" alt="">
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

        <div class="bodyustkismisolu kucuk">
            <img src="<?=asset_url("img/heybro.jpg"); ?>" alt="">
            <div class="bodyustkismisoluyazikismi" onclick="javascript:window.location='http://tunaweb.net';">
                <div class="soluustu">
                    <div class="yorumsayisi">
                        <i>
                            <span class="ion-android-chat" style="color:#fff"></span>
                            <span style="color:#fff; font-size:13px">23</span>
                        </i>
                    </div>
                    <div class="konu">
                        <span>Yiyecek</span>
                    </div>
                </div>
                <div class="alt">
                    <span class="baslik">KÜÇÜK HAMBURGER</span><br>
                </div>
            </div>
        </div>
        <div class="bodyustkismisolu kucuk">
            <img src="<?=asset_url("img/heybro.jpg"); ?>" alt="">
            <div class="bodyustkismisoluyazikismi" onclick="javascript:window.location='http://tunaweb.net';">
                <div class="soluustu">
                    <div class="yorumsayisi">
                        <i>
                            <span class="ion-android-chat" style="color:#fff"></span>
                            <span style="color:#fff; font-size:13px">23</span>
                        </i>
                    </div>
                    <div class="konu">
                        <span>Yiyecek</span>
                    </div>
                </div>
                <div class="alt">
                    <span class="baslik">KÜÇÜK HAMBURGER</span><br>
                </div>
            </div>
        </div>
        <div class="bodyustkismisolu kucuk">
            <img src="<?=asset_url("img/heybro.jpg"); ?>" alt="">
            <div class="bodyustkismisoluyazikismi" onclick="javascript:window.location='http://tunaweb.net';">
                <div class="soluustu">
                    <div class="yorumsayisi">
                        <i>
                            <span class="ion-android-chat" style="color:#fff"></span>
                            <span style="color:#fff; font-size:13px">23</span>
                        </i>
                    </div>
                    <div class="konu">
                        <span>Yiyecek</span>
                    </div>
                </div>
                <div class="alt">
                    <span class="baslik">KÜÇÜK HAMBURGER</span><br>
                </div>
            </div>
        </div>
        <div class="bodyustkismisolu kucuk">
            <img src="<?=asset_url("img/heybro.jpg"); ?>" alt="">
            <div class="bodyustkismisoluyazikismi" onclick="javascript:window.location='http://tunaweb.net';">
                <div class="soluustu">
                    <div class="yorumsayisi">
                        <i>
                            <span class="ion-android-chat" style="color:#fff"></span>
                            <span style="color:#fff; font-size:13px">23</span>
                        </i>
                    </div>
                    <div class="konu">
                        <span>Yiyecek</span>
                    </div>
                </div>
                <div class="alt">
                    <span class="baslik">KÜÇÜK HAMBURGER</span><br>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="MKTV">
            <div class="mktvicerik">
                <div class="ustyazi" style="font-weight: 500;font-size:18px;">MK TV</div>
                <br>
                <div class="mktviceriksol">
                    <a href="">
                        <div class="mktvresim">
                            <img src="<?=asset_url("img/heybro.jpg"); ?>" alt="">
                        </div>
                        <div class="mktvyazi">
                            <div class="mktvbaslik">
                                Gaming İstanbul 2019'da kameramıza takılanlar

                            </div>
                            <div class="mktvaltbaslik">
                                Fuarda neler var?
                            </div>
                            <div class="mktvtarih">
                                31.01.2019 17:32
                            </div>
                        </div>
                    </a>
                </div>

                <div class="mkviceriksag">
                    <div class="mkvicerikvideolar">
                        <ul>
                            <li>
                                <a href="">
                                    <div class="mktvvideofoto">
                                        <img src="<?=asset_url("img/heybro.jpg"); ?>" alt="">
                                    </div>

                                    <div class="mktvvideoyazilar">
                                        <div class="mktvbaslik kucuk">
                                            Gaming İstanbul 2019'da kameramıza takılanlar

                                        </div>
                                        <div class="mktvtarih">
                                            31.01.2019 17:32
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="mktvvideofoto">
                                        <img src="<?=asset_url("img/heybro.jpg"); ?>" alt="">
                                    </div>

                                    <div class="mktvvideoyazilar">
                                        <div class="mktvbaslik kucuk">
                                            Gaming İstanbul 2019'da kameramıza takılanlar

                                        </div>
                                        <div class="mktvtarih">
                                            31.01.2019 17:32
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="mktvvideofoto">
                                        <img src="<?=asset_url("img/heybro.jpg"); ?>" alt="">
                                    </div>

                                    <div class="mktvvideoyazilar">
                                        <div class="mktvbaslik kucuk">
                                            Gaming İstanbul 2019'da kameramıza takılanlar

                                        </div>
                                        <div class="mktvtarih">
                                            31.01.2019 17:32
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="mktvvideofoto">
                                        <img src="<?=asset_url("img/heybro.jpg"); ?>" alt="">
                                    </div>

                                    <div class="mktvvideoyazilar">
                                        <div class="mktvbaslik kucuk">
                                            Gaming İstanbul 2019'da kameramıza takılanlar

                                        </div>
                                        <div class="mktvtarih">
                                            31.01.2019 17:32
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row enalt">
            <div class="bildiri">
                <div style="margin: 20px 0px 20px 10px; font-weight:500;">HABER AKIŞI</div>
                <ul>
                    <?php for ($i = 0; $i < 10; $i++) {?>
                    <a href="" style="display:flex;">
                        <li>
                            <div class="resim">
                                <img src="<?=asset_url("img/heybro.jpg"); ?>" alt="">
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
                                        Hitman 2'nin ilk bölümü tüm platformlarda ücretsiz oldu!
                                    </div>
                                    <div class="icyazialtbaslik">
                                        Görenler şaşkına döndü
                                    </div>
                                    <div class="icyazitarih">
                                        29.01.2019 17:53
                                    </div>
                                </div>
                            </div>
                    </a>
                    </li>
                    <?php }?>
                    <div class="haberbutton">
                        <input type="button" value="Devamı">
                    </div>
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