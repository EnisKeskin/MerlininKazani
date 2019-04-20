<?php require controller("header");?>
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
                <?php require controller("sidebar"); ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</body>
<?php include "Footer.php" ?>