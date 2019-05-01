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
                        <?php user_info_content($content_info[0]['yazar_id'])?>
                        <div class="kulbilgi">
                            <div class="yazarresim">
                                <img src="<?php echo asset_url_img($user_info_cont[0]['kul_resim']) ?>" alt="">
                            </div>
                            <div class="yazar">
                                <div class="yazarismi">
                                    <p><?php echo $user_info_cont[0]['kul_isim'] . " " . $user_info_cont[0]['kul_soyadi'] ?>
                                    </p>
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
                        <?php if (session('userlogin') == 1) {?>
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
                                        <p><?php echo date('d.m.Y H:i:s'); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="commentform">
                                <form action="" method="post">
                                    <textarea name="yorumun" id="" placeholder="Yorumla" maxlength="2000"
                                        class="textyorum"></textarea>
                                    <div class="commentpost">
                                        <div><span>Kalan Karakter:</span>2000</div>
                                        <button type="submit" class="forward" Value="1" name="comsubmit">Gönder</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php }?>
                        <?php if (session('userlogin') == 0) {?>
                        <div class="bil">Yorum ve Beğeni yapabilmek için Lütfen Giriş yapınız</div>
                        <?php }?>
                        <?php if (session('userlogin') == 0) {?>
                        <div class="user_coment">
                            <div class="kulbilgi">
                                <div class="yazarresim">
                                    <img src="<?php echo asset_url_img('default.png') ?>" alt="">
                                </div>
                                <div class="yazar">
                                    <div class="yazarismi">
                                        <p><?php echo 'Misafir Kullanıcı' ?>
                                        </p>
                                    </div>
                                    <div class="yazilantarih">
                                        <p><?php echo date('d.m.Y H:i:s') ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="commentform">
                                <form action="" method="post">
                                    <textarea name="yorumun" id="" placeholder="Yorumla" maxlength="2000"
                                        class="textyorum"></textarea>
                                    <div class="commentpost">
                                        <div><span>Kalan Karakter:</span>2000</div>
                                        <div style="cursor:pointer" class="forward"
                                            onclick="alert('Giriş yapmadan yorum yapamazsınız.')">Gönder</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php }?>
                        <!-- Yorumların başlatıldığı yer -->
                        <?php for ($i = 0; $i < $comments_zero_num; $i++) {?>
                        <?php admiration($comments_zero[$i]["yorum_id"])?>
                        <div class="comment_con">
                            <div class="comment-content">
                                <?php comment_user_info($comments_zero[$i]["yor_kul_id"])?>
                                <div class="kulbilgi">
                                    <div class="yazarresim">
                                        <img src="<?php echo asset_url_img($com_user_info[0]['kul_resim']) ?>" alt="">
                                    </div>
                                    <div class="yazar">
                                        <div class="yazarismi">
                                            <p><?php echo $com_user_info[0]['kul_isim'] . " " . $com_user_info[0]['kul_soyadi'] ?>
                                            </p>
                                        </div>
                                        <div class="yazilantarih">
                                            <p><?php echo $comments_zero[$i]["yorum_tarih"] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="content-article">
                                    <span><?php echo $comments_zero[$i]["yorum"] ?></span>
                                    <div class="content-reactions">
                                        <?php if (session("userlogin") == 1) {?>
                                        <a
                                            href="<?php echo site_url('like/' . $comments_zero[$i]["yorum_id"] . "/" . session('userid') . "/" . $comments_zero[$i]["icerik_id"]) ?>">
                                            <div class="like">
                                                <i class="ion-thumbsup"></i>
                                            </div>
                                        </a> &nbsp
                                        <div class="like_num" style="cursor:pointer"
                                            onclick="mdl.style.display='block'">
                                            <?php if ($like_num != 0) {echo $like_num;}?></div>
                                        <div class="reply" type="javascript:;"
                                            onclick="myFunction('commentop<?php echo $i ?>','text<?php echo $i ?>');">
                                            <i class="ion-chatbubbles" style="cursor:pointer"></i>
                                            <span style="cursor:pointer">Yanıtla</span>
                                        </div>
                                        <?php } else {?>
                                        <a style="cursor:pointer" onclick="alert('üye girişi yapmadan beğenemezsiniz')">
                                            <div class="like">
                                                <i class="ion-thumbsup"></i>
                                            </div>
                                        </a>&nbsp
                                        <div class="like_num" style="cursor:pointer"
                                            onclick="mdl.style.display='block'">
                                            <?php if ($like_num != 0) {echo $like_num;}?></div>
                                        <div class="reply" type="javascript:;"
                                            onclick="alert('Giriş yapmadan yorum yapamazsınız.')">
                                            <i style="cursor:pointer" class="ion-chatbubbles"></i>
                                            <span style="cursor:pointer">Yanıtla</span>
                                        </div>
                                        <?php }?>

                                    </div>
                                    <?php reply_comment($comments_zero[$i]["icerik_yor_id"], $cont_id)?>
                                    <?php if ($reply_comment_num > 0) {?>
                                    <?php for ($j = 0; $j < $reply_comment_num; $j++) {?>
                                    <?php admiration($reply_comment[$j]["yorum_id"])?>
                                    <div class="reply-comment">
                                        <?php comment_user_info($reply_comment[$j]["yor_kul_id"])?>
                                        <div class="kulbilgi">
                                            <div class="yazarresim">
                                                <img src="<?php echo asset_url_img($com_user_info[0]['kul_resim']) ?>"
                                                    alt="">
                                            </div>
                                            <div class="yazar">
                                                <div class="yazarismi">
                                                    <p><?php echo $com_user_info[0]['kul_isim'] . " " . $com_user_info[0]['kul_soyadi'] ?>
                                                    </p>
                                                </div>
                                                <div class="yazilantarih">
                                                    <p><?php echo $reply_comment[$j]["yorum_tarih"] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reply-comment-article">
                                            <span><?php echo $reply_comment[$j]["yorum"]; ?></span>
                                        </div>
                                        <div class="reply-like">
                                            <?php if (session('userlogin') == 1) {?>
                                            <a
                                                href="<?php echo site_url('like/' . $reply_comment[$j]["yorum_id"] . "/" . session('userid') . "/" . $reply_comment[$j]["icerik_id"]) ?>">
                                                <div class="like">
                                                    <i class="ion-thumbsup"></i>
                                                </div>
                                            </a> &nbsp
                                            <div class="like_num">
                                                <?php if ($like_num != 0) {echo $like_num;}?>
                                            </div>

                                            <?php } else {?>
                                            <a onclick="alert('Üye Girişi yapmadan beğenemezsiniz')">
                                                <div class="like">
                                                    <i class="ion-thumbsup"></i>
                                                </div>
                                            </a>&nbsp
                                            <div class="like_num" style="cursor:pointer"    
                                            onclick="mdl.style.display='block'">
                                                <?php if ($like_num != 0) {echo $like_num;}?>
                                            </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                    <?php }?>
                                    <?php }?>
                                    <div class="reply-visit" id="commentop<?php echo $i ?>" style="display:none;">
                                        <div class="commentform">
                                            <form action="" method="post">
                                                <textarea name="altyorum" id="text<?php echo $i ?>"
                                                    placeholder="Yorumla" maxlength="2000" class="textyorum"></textarea>
                                                <input type="text" style="display:none;" name="yazilan"
                                                    value="<?php echo $comments_zero[$i]["icerik_yor_id"] ?>">
                                                <div class="commentpost">
                                                    <div><span>Kalan Karakter:</span>2000</div>
                                                    <button type="submit" name="repsubmit" Value="1"
                                                        class="forward">Gönder</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <!-- Yorumların bittiği yer -->
                    <div class="girisbaslik">HABER AKIŞI</div>
                    <ul class="habelerul">
                        <?php content_speacial_datapull(10, 10, 1);?>
                        <?php for ($i = 0; $i < 10; $i++) {?>
                        <a href="<?php echo site_url('icerik/' . $contentInfospe[$i]['konu_id']) ?>">
                            <li>
                                <div class="resim">
                                    <img src="<?php echo asset_url_img($contentInfospe[$i]['konu_resim_url']); ?>"
                                        alt="">
                                    <div class="soluustu haberlerin">
                                        <div class="yorumsayisi">
                                            <i>
                                                <span class="ion-android-chat" style="color:#fff"></span>
                                                <span style="color:#fff; font-size:12px">23</span>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                                <div class="yazi">
                                    <div class="icyazi">
                                        <div class="icyazikonu">
                                            <?php category_name_datapull($contentInfospe[$i]['kategori_id']);?>
                                        </div>
                                        <div class="icyazibaslik">
                                            <?php echo $contentInfospe[$i]['konu_baslik']; ?>
                                        </div>
                                        <div class="icyazialtbaslik">
                                            <?php echo $contentInfospe[$i]['konu_altbaslik']; ?>
                                        </div>
                                        <div class="icyazitarih">
                                            <?php echo $contentInfospe[$i]['konu_tarih']; ?>
                                        </div>
                                    </div>
                                </div>
                        </a>
                        </li>
                        <?php }?>
                    </ul>
                </div>
                <?php require controller("sidebar");?>
                <?php require controller("sidebarpop")?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="modal" style="display:none;" id="mdl" onclick="mdl.style.display = 'none' ">
        <div class="user_info">
            <?php for ($i = 0; $i < 10; $i++) {?>
            <a href="">
                <div class="user_con">
                    <div class="user_avatar">
                        <img src="<?php echo asset_url_img("default.png") ?>" alt="">
                    </div>
                    <div class="user_name">
                        <span>Şeyma Keskin </span>
                    </div>
                </div>
            </a>
            <?php }?>
        </div>
    </div>
    
</body>

<?php include "static/Footer.php"?>