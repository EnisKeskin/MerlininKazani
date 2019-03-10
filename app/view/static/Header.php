<!DOCTYPE html>
<html lang="tr">

<head>
    <link rel="stylesheet" href="<?=asset_url('js/ionicons-2.0.1/css/ionicons.min.css')?>">
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
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
                    <li class="kirmizi"><a href="">Oyun</a>
                        <ul>
                            <div class="menualtı">
                                <li><a href="">ee</a></li>
                                <li><a href="">ASD</a></li>
                                <li><a href="">ASDADS</a></li>
                            </div>
                        </ul>
                    </li>
                    <li class="mavi"><a href="">Oyun</a>
                        <ul>
                            <div class="menualtı">
                                <li><a href="">ee</a></li>
                                <li><a href="">ASD</a></li>
                                <li><a href="">ASDADS</a></li>
                            </div>
                        </ul>
                    </li>
                    <li><a href="">Oyun</a>
                        <ul>
                            <div class="menualtı">
                                <li><a href="">ee</a></li>
                                <li><a href="">ASD</a></li>
                                <li><a href="">ASDADS</a></li>
                            </div>
                        </ul>
                    </li>
                    <li><a href="">Oyun</a>
                        <ul>
                            <div class="menualtı">
                                <li><a href="">ee</a></li>
                                <li><a href="">ASD</a></li>
                                <li><a href="">ASDADS</a></li>
                            </div>
                        </ul>
                    </li>
                    <li><a href="">Oyun</a>
                        <ul>
                            <div class="menualtı">
                                <li><a href="">ee</a></li>
                                <li><a href="">ASD</a></li>
                                <li><a href="">ASDADS</a></li>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
            </div>
            <div class="sagustbaslik">
                <div class="sagustbasliksolu">
                    <?php if(isset($_SESSION["userlogin"])) { ?>
                    <ul class="giris">
                        <?php if($_SESSION["userlogin"] = 1){ ?>
                        <li>
                            <a href="<?= site_url("profil/". permalink($_SESSION["username"])) ?>"
                                style="text-align:center;"><?php if(!isset($_SESSION["username"])){echo "Üyelik";}elseif($_SESSION["userlogin"] = 0) {echo "Üyelik";}else {echo $_SESSION["adsoyad"];}?>&nbsp;
                                <i class="ion-ios-arrow-down"></i></a>
                            <div class="uyelik">
                                <a href="<?= site_url("profil/". permalink($_SESSION["username"])) ?>">
                                    <div class="pencere">
                                        <div class="uyeicon">
                                            <img src="<?= asset_url("img/heybro.jpg") ?>" alt="">
                                        </div>
                                        <div class="uyebilgi">
                                            <span>Enis Keskin</span> <br>
                                            <div class="seviye">Seviye 0</div>
                                        </div>
                                </a>
                                <ul>
                                    <li>
                                        <a title="Mesajlarım" href="">
                                            <i class="ion-email"></i>Mesajlar</a>
                                    </li>
                                    <li>
                                        <a title="Kişisel Bilgilerim" href="">
                                            <i class="ion-person"></i>Kişisel Bilgiler</a>
                                    </li>
                                </ul>
                                <form action="" method="post">
                                    <div class="cikisbutton">
                                        <button type="submit" name="cikis" value="1">Çıkış Yap</button>
                                    </div>
                                </form>
                            </div>

                        </li>
                        <?php }?>
                    </ul>
                    <!-- /giriş yapılmışsa -->
                    <?php } else { ?>
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
                    <?php } ?>

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
                    <li>
                        <a href="#">PC</a>
                    </li>
                    <li>
                        <a href="#">Monster Notebook</a>
                    </li>
                    <li>
                        <a href="#">PlayStation</a>
                    </li>
                    <li>
                        <a href="#">Xbox</a>
                    </li>
                    <li>
                        <a href="#">Mobil</a>
                    </li>
                    <li>
                        <a href="#">Nintendo</a>
                    </li>
                    <li>
                        <a href="#">Popüler Oyunlar</a>
                    </li>
                    <li>
                        <a href="#">Kod Dağıtımı</a>
                    </li>
                </ul>
            </div>
            <div class="sagaltbaslikbilgisi">
                <ul>
                    <li>
                        <i class="ion-social-facebook"></i>
                    </li>
                    <li>
                        <i class="ion-social-youtube"></i>
                    </li>
                    <li>
                        <i class="ion-social-twitch"></i>
                    </li>
                    <li>
                        <i class="ion-social-twitter"></i>
                    </li>
                    <li>
                        <i class="ion-social-rss"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>