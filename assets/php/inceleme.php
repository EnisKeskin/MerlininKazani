<?php include "Header.php" ?>

<body>
    <div class="siteici">
        <div class="container">
            <div class="row">
                <div class="bildiri">
                    <div style="margin: 20px 0px 20px 10px; font-weight:500;">HABER AKIŞI</div>
                    <div class="siralama">
                        <ul>
                            <li>
                                <a href="">0-9</a>
                            </li>
                            <li>
                                <a href="">A</a>
                            </li>
                            <li>
                                <a href="">B</a>
                            </li>
                            <li>
                                <a href="">C</a>
                            </li>
                            <li>
                                <a href="">D</a>
                            </li>
                            <li>
                                <a href="">E</a>
                            </li>
                            <li>
                                <a href="">F</a>
                            </li>
                            <li>
                                <a href="">G</a>
                            </li>
                            <li>
                                <a href="">A</a>
                            </li>
                            <li>
                                <a href="">B</a>
                            </li>
                            <li>
                                <a href="">C</a>
                            </li>
                            <li>
                                <a href="">D</a>
                            </li>
                            <li>
                                <a href="">E</a>
                            </li>
                            <li>
                                <a href="">F</a>
                            </li>
                            <li>
                                <a href="">G</a>
                            </li>
                            <li>
                                <a href="">A</a>
                            </li>
                            <li>
                                <a href="">B</a>
                            </li>
                            <li>
                                <a href="">C</a>
                            </li>
                            <li>
                                <a href="">D</a>
                            </li>
                            <li>
                                <a href="">E</a>
                            </li>
                            <li>
                                <a href="">F</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ozelinceleme">
                        <ul>
                            <?php for ($i=0; $i < 15; $i++) { ?>
                            <a href="">
                                <li>
                                    <div class="resim">
                                        <img src="../img/heybro.jpg" alt="">
                                        <div class="soluustu haberin">
                                            <div class="yorumsayisi solalti">
                                                    <div class="puan">
                                                        60
                                                    </div>
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
                            <?php } ?>
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
                    <div class="sidebarlist pop">
                        <div class="sidebarkonu">Populer Oyunlar</div>
                        <div class="sidebarustu">
                            <ul>
                            <?php for ($i=0; $i < 6; $i++) { ?>
                                <li>
                                    <a href="">
                                        <div class="sidebarresim">
                                            <img src="../img/heybro.jpg" alt="">
                                            <div class="sayi">1</div>
                                        </div>
                                        <div class="caption">
                                            <div class="title">
                                                Red Dead Redemption 2
                                            </div>
                                            <div class="text">
                                                Yapımcı
                                                <div class="mark">Rockstar Games</div>
                                            </div>
                                            <div class="text">
                                                Yapımcı
                                                <div class="mark">Rockstar Games</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <?php } ?>
                            </ul>
                        </div>
                        <div class="devam">
                            <form action="">
                                <input type="button" value="Daha Fazlası">
                            </form>
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
<?php include "Footer.php" ?>