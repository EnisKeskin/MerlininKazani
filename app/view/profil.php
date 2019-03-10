<?php require controller("header");?>
<div class="siteici">
    <div class="container">
        <div class="profil-content">
            <div class="profil-cover" style="background:url(<?=asset_url('/img/heybro.jpg')?>)">
                <a href="#" class="chance-over">
                    <i class="ion-image"></i>
                    Kapak Değiştir
                </a>
                <div class="clearfix"></div>
                <div class="profil-bilgi">
                    <div class="avatar">
                        <img src="<?=asset_url('/img/heybro.jpg')?>" alt="">
                    </div>
                    <div class="profilbilgiler">
                        <div class="profilad">Enis Keskin</div>
                        <ul>
                            <li><a href="<?=site_url("profil/" . permalink($_SESSION["username"]));?>">Profilim</a></li>
                            <li><a href="<?=site_url("profil/mesajlar/" . permalink($_SESSION["username"]));?>">Mesajlar</a>
                            </li>
                            <li><a href="">Kişisel Bilgiler</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="bildiri">
                <div style="margin: 20px 0px 20px 10px; font-weight:500;"><?=$profilbaslik;?></div>
                <ul>
                    <?php if ($profilbaslik == "Son Yorumlar"){ ?>
                        
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
                    <?php }elseif($profilbaslik == "Mesajlar"){ ?>
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
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php require "static/Footer.php"?>