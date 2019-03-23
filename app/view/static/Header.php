<!DOCTYPE html>
<html lang="tr">

<head>
 <!--   <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700,900" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
    <link rel="stylesheet" href="<?=asset_url('js/ionicons-2.0.1/css/ionicons.min.css')?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Merlini Kazanı</title>
    <link rel="stylesheet" type="text/css" href="<?=asset_url('css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=asset_url('css/header.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=asset_url('css/body.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=asset_url('css/footer.css')?>">

    <script src="<?=asset_url('js/arama.js')?>" type="text/javascript"></script>
</head>

<body>
    <div class="ustbaslik">
        <div class="ustbaslikbilgisi">
            <div class="solaolanlar">
                <div class="logo">
                    <a href="<?=site_url('index')?>">
                        <img src="<?=asset_url('img/logo.svg')?>" alt="">
                    </a>
                </div>
                <div class="ustbaslikmenu">
                    <ul class="menu">
                        <?php for ($i = 0; $i < $row_main_num; $i++) {?>
                        <li class="<?=$main_category[$i][2]?>">
                         <a href=""><?=$main_category[$i][1]?></a>
                            <ul>
                                <div class="menualti">
                                     <?php category_datapull(($i + 1));?>
                                     <?php global $row_cat_num; for ($j = 0; $j < $row_cat_num; $j++) {?>
                                        <li><a href="<?= site_url("konular/".$perma_cat[$j]."/1"); ?>"><?=$category[$j]?></a></li>
                                     <?php }?>

                                </div>
                            </ul>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <?php
                if(!session('userid')){
                    user_cookie_test();
                }
            ?>
            <div class="sagustbaslik">
                <div class="sagustbasliksolu">
                    <?php if (session('userlogin')) {?>
                    <ul class="giris">
                        <?php if (session('userlogin')) {?>
                        <li>

                            <a href="<?=site_url("profil/" . permalink(session('username')))?>"
                                style="text-align:center;"><?php if (session('userlogin')) {echo strtoupper(session('adsoyad'));} else {echo "Üyelik";}?>&nbsp;
                                <i class="ion-ios-arrow-down"></i></a>
                            <div class="uyelik">
                                <a href="<?=site_url("profil/" . permalink(session('username')))?>">
                                    <div class="pencere">
                                        <div class="uyeicon">
                                            <img src="<?=asset_url("img/heybro.jpg")?>" alt="">
                                        </div>
                                        <div class="uyebilgi">
                                            <span><?=session('adsoyad')?></span> <br>
                                            <div class="seviye">Seviye 0</div>
                                        </div>
                                </a>
                                <ul>
                                    <li>
                                        <a title="Mesajlarım"
                                            href="<?=site_url("profil/mesajlar/" . permalink(session('username')));?>">
                                            <i class="ion-email"></i>Mesajlar</a>
                                    </li>
                                    <li>
                                        <a title="Kişisel Bilgilerim"
                                            href="<?=site_url("profil/kisibilgileri/" . permalink(session('username')));?>">
                                            <i class="ion-person"></i>Kişisel Bilgiler</a>
                                    </li>
                                </ul>
                                <form action="" method="post">
                                    <div class="cikisbutton">
                                        <a href="<?php echo site_url("exit"); ?>">Çıkış Yap</a>
                                    </div>
                                </form>
                            </div>

                        </li>
                        <?php }?>
                    </ul>
                    <!-- /giriş yapılmışsa -->
                    <!-- giris yapılmamışsa -->
                    <?php } else {?>
                    <ul class="giris">
                        <li class="girisli">
                            <a style="cursor:pointer">Üyelik &nbsp; <i class="ion-ios-arrow-down"></i></a>
                            <div class="uyelik">
                                <div class="pencere">
                                    <a href="<?=site_url('login')?>">
                                        <div class="kullanicigiris">
                                            Giriş Yap
                                        </div>
                                    </a>
                                    <span>veya</span>
                                    <a href="<?=site_url('signup')?>">
                                        <div class="kullanicikayit">
                                            Üye Ol
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <?php }?>

                </div>
                <div class="sagustbasliksagi">

                    <div class="aramamenu">
                        <span class="ion-ios-search-strong" id="aramamenuac"
                            style="cursor:pointer; padding:20px;"></span>
                        <div>
                            <form action="" class="form" id="aramamenu">
                                <input type="text" placeholder=" Arama Yap">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="altbaslik">
        <div class="altbaslikbilgisi">
            <div class="solaltbaslikbilgisi">
                <ul>
                   <?php for ($i = 0; $i < $row_special_num; $i++) {?>
                    <li><a href="#"><?=$specialCat[$i];?></a></li>
                  <?php }?>
                </ul>
            </div>
            <div class="sagaltbaslikbilgisi">
                <ul>
                    <li>
                        <a href=""><i class="ion-social-facebook"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="ion-social-youtube"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="ion-social-twitch"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="ion-social-twitter"></i></a>
                    </li>
                    <li>
                        <a href=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>