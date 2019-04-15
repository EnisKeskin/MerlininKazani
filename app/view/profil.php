<?php require controller("header");?>
<div class="siteici">
    <div class="container">
        <div class="profil-content">
            <div class="profil-cover" style="background:url(<?php echo asset_url('/img/heybro.jpg')?>)">
                <a href="#" class="chance-over">
                    <i class="ion-image"></i>
                    Kapak Değiştir
                </a>
                <div class="clearfix"></div>
                <div class="profil-bilgi">
                    <div class="avatar">
                        <img src="<?php echo asset_url('/img/heybro.jpg')?>" alt="">
                    </div>
                    <div class="profilbilgiler">
                        <div class="profilad"><?php echo strtoupper(session('adsoyad'));?></div>
                        <ul>
                            <li><a href="<?php echo site_url("profil/" . permalink(session("username")));?>">Profilim</a></li>
                            <li><a
                                    href="<?php echo site_url("profil/mesajlar/" . permalink(session("username")));?>">Mesajlar</a>
                            </li>
                            <li><a href="<?php echo site_url("profil/kisibilgileri/" . permalink(session("username")));?>">Kişisel
                                    Bilgiler</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="bildiri">

                <ul>
                    <?php if ($profilbaslik == "Son Yorumlar") {?>
                    <div style="margin: 20px 0px 20px 10px; font-weight:500;"><?php echo $profilbaslik;?></div>
                    <?php for ($i = 0; $i < 5; $i++) {?>
                    <a href="" style="display:flex;">
                        <li>
                            <div class="yazi">
                                <div class="yorumur">
                                    <div class="icyazibaslik yorumur">
                                        <!-- Konu -->
                                        Jitman 2'nin ilk bölümü tüm platformlarda ücretsiz oldu!
                                    </div>
                                    <div class="icyazialtbaslik">
                                        <!-- Yorum -->
                                        Görenler şaşkına döndü
                                    </div>
                                    <div class="icyazitarih">
                                        <!-- tarih -->
                                        29.01.2019 17:53
                                    </div>
                                </div>
                            </div>
                        </li>
                    </a>
                    <?php }?>
                    <?php } elseif ($profilbaslik == "Mesajlar") {?>
                    <div style="margin: 20px 0px 20px 10px; font-weight:500;"><?php echo $profilbaslik;?></div>
                    <?php for ($i = 0; $i < 5; $i++) {?>
                    <a href="" style="display:flex;">
                        <li>
                            <div class="yazi">
                                <div class="yorumur">
                                    <div class="icyazialtbaslik">
                                        <!-- isim -->
                                        keskes
                                    </div>
                                    <div class="icyazitarih">
                                        <!-- tarih -->
                                        29.01.2019 17:53
                                    </div>
                                    <div class="icyazibaslik yorumur">
                                        <!-- yorum -->
                                        merhaba
                                    </div>
                                </div>
                            </div>
                        </li>
                    </a>
                    <?php }?>
                    <?php } elseif ($profilbaslik == "Kişisel Bilgiler") {?>
                    <div style="display:flex;">
                        <div style="margin: 20px 0px 20px 10px; font-weight:500;"><?php echo $profilbaslik;?></div>
                        <div style="padding-left:300px; margin: 20px 0px 20px 10px; font-weight:500;">Şifre Değiştir
                        </div>
                    </div>
                    <div class="kisisel">
                        <form action="" class="kisiselbilgi" method="post">
                            <label>
                                <div class="icyazialtbaslik">
                                    Kullanici Adi
                                </div>
                                <input type="text" name="nickname" id="" class="inputcss" value="<?php echo $kisbil[0]?>"
                                    readonly>
                            </label><br>
                            <label>
                                <div class="icyazialtbaslik">
                                    Adi
                                </div>
                                <input type="text" name="Adi" id="" class="inputcss" value="<?php echo $kisbil[1]?>">
                            </label><br>
                            <label>
                                <div class="icyazialtbaslik">
                                    Soyadi
                                </div>
                                <input type="text" name="Soyadi" id="" class="inputcss" value="<?php echo $kisbil[2]?>">
                            </label><br>
                            <label>
                                <div class="icyazialtbaslik">
                                    E-posta
                                </div>
                                <input type="text" name="mail" id="" class="inputcss" value="<?php echo $kisbil[3]?>" readonly>
                            </label><br>
                            <label>
                                <div class="icyazialtbaslik">
                                    Doğum Tarihi
                                </div>
                                <input type="date" name="dogumtar" id="" class="dogumtar" value="<?php echo $kisbil[4]?>">
                            </label><br>
                            <label>
                                <div class="icyazialtbaslik">
                                    Cep Telefonu
                                </div>
                                <input type="text" name="tel" id="" class="inputcss" maxlength="12"
                                    value="<?php echo $kisbil[5]?>">
                            </label><br>
                            <div class="kontrol">
                                <?php if (isset($infocheck)): ?>
                                <p class="giriskontrol" style="text-align:center; color:#8899B8;"><?php echo $infocheck?></p>
                                <?php endif?>
                            </div>
                            <div class="girisbutton">
                                <button type="submit" name="kulbildeg" value="1">Kaydet</button>
                            </div>
                        </form>
                        <!-- ŞİFRE DEĞİŞİM -->
                        <form action="" class="sifredegistir" method="post">
                            <label>
                                <div class="icyazialtbaslik">
                                    Eski Şifre
                                </div>
                                <input type="password" name="eskisifre" id="" class="inputcss">
                            </label> <br>
                            <label>
                                <div class="icyazialtbaslik">
                                    Yeni Şifre
                                </div>
                                <input type="password" name="yenisifre" id="" class="inputcss">
                            </label><br>
                            <label>
                                <div class="icyazialtbaslik">
                                    Yeni Şifre (Tekrar)
                                </div>
                                <input type="password" name="yenisifretekrar" id="" class="inputcss">
                            </label><br>
                            <div class="kontrol">
                                <?php if (isset($giriskontrol)): ?>
                                <p class="giriskontrol" style="text-align:center; color:#8899B8;"><?php echo "$giriskontrol"?>
                                </p>
                                <?php endif?>
                            </div>
                            <div class="girisbutton">
                                <button type="submit" name="sifredegis" value="1">Kaydet</button>
                            </div>
                        </form>
                    </div>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php require "static/Footer.php"?>