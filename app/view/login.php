<?php require "static/Header.php";?>
<div class="siteici">
    <div class="container">
        <div class="girisformu">
            <div class="girisbaslik">Üye Girişi</div>
            <form action="" class="girisform" method="post">
                <input type="text" name="kullaniciadi" id="" class="inputcss" placeholder="Kullanici Adi"> <br>
                <input type="password" name="kullanicisifre" id="" class="inputcss" placeholder="Sifre">
                <label id="benihat">
                    <input type="checkbox" name="benihatirla" class="benihatirlacl">
                    <div class="benihat">Beni hatırla</div>
                </label> <br>
                <div class="kontrol">
                    <?php if(isset($giriskontrol)):?>
                        <p class="giriskontrol"><?=$giriskontrol?></p>
                    <?php endif ?>
                </div>
                <div class="girisbutton">
                    <button type="submit" name="submit" value="1" >Giriş Yap</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "static/Footer.php";?>