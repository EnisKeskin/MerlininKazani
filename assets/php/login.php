<?php include "Header.php";?>
<div class="siteici">
    <div class="container">
        <div class="girisformu">
            <div class="girisbaslik">Üye Girişi</div>
            <form action="" class="girisform">
                <input type="text" name="kullaniciadi" id="" class="inputcss" placeholder="Kullanici Adi"> <br>
                <input type="password" name="kullanicisifre" id="" class="inputcss" placeholder="Sifre">
                <label id="benihat">
                    <input type="checkbox" name="benihatirla" class="benihatirlacl">
                    <div class="benihat">Beni hatırla</div>
                </label> <br>
                <div class="girisbutton">
                    <button type="submit">Giriş Yap</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "Footer.php";?>