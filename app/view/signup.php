<?php require controller("header");?>
<div class="siteici">
    <div class="container">
        <div class="girisformu">
            <div class="girisbaslik">Üye Girişi</div>
            <form action="" class="girisform" method="post">
                <input type="text" name="Adi" id="" class="inputcss" placeholder="Adınız"> <br>
                <input type="text" name="Soyadi" id="" class="inputcss" placeholder="Soydınız"> <br>
                <input type="text" name="nickname" id="" class="inputcss" placeholder="Kullanici Adi"> <br>
                <input type="text" name="mail" id="" class="inputcss" placeholder="E-Posta"> <br>
                <input type="text" name="tel" id="" class="inputcss" placeholder="Cep telefonu (90 541 000 1122)" maxlength="12"> <br>
                <input type="password" name="sifre" id="" class="inputcss" placeholder="Sifre">
                <input type="password" name="sifretekrar" id="" class="inputcss" placeholder="Sifre Tekrar">
                <textarea style="color: #707580; resize:none" name="" id="" cols="49" rows="10" readonly>
1. Merlin'in Kazanı, oyun, teknoloji, sinema, müzik gibi konular üzerine kurulu bir gençlik platformudur. Sitemizde T.C. yasalarına aykırı mesaj atmak ve tartışmaya açık olan her türlü siyasi, dini ve ırkçılık içeren konular ile argo, müstehcen yayımlar ile illegal konuları içeren yazıların yazılması, bahsi geçmesi veya ima edilmesi kesinlikle yasaktır. Tabii ki buna Dini Günlerimiz (Kandil ve Bayram Günleri Kutlamalarımız) dahil değildir.

2. Yasalara uygun olmayan içeriklerin (Kopya CD/DVD, film, oyun, müzik, porno vs. gibi korsan medyaların ve oyun/program ile ilgili crack ve serial gibi paylaşımların) paylaşılması, bahsi geçmesi, bu dosyalar ve uygulamaları barındıran çeşitli “Warez” kaynaklarının linklerinin verilmesi de kesinlikle yasaktır. 

3. Sitemizdeki tüm ileti ve başlıkların sorumluluğu yazan üyeye aittir. Yazılanlardan dolayı Merlin’in Kazanı sitesi, site yöneticileri ve görevlileri hiç bir şekilde sorumlu tutulamaz. 

4. Farklı bir sitenin reklamının yapılması, o sitede yer alan konu ve malzemelerin reklam amacıyla Merlin'in Kazanı’nana taşınması ve bu yöntemle üye çekilmeye çalışılması kesinlikle yasaktır. 

5. Mesajlarınızda/Yorumlarınızda kullanılan dil üslubuna dikkat edilmeli; aşırı laubalilikten, saldırganlıktan, hakaret, tahrik ve diğer üyelerin şahsiyetlerini hedef alan tavırlardan kesinlikle kaçınılmalıdır. Buna dikkat etmeyen kullanıcılar görevlilerce önce uyarılacak, sorunun devam etmesi halinde ise ilgili üye süresiz olarak sitemizden men edilecektir. 

6. Yararlı olabileceğine inandığınız konuları açarken, kaynak sitenin ilgili linki mutlaka eklenmeli ve bizlerin de üzerinde hassasiyetle durduğu "emek hırsızlığına" meydan bırakacak hiçbir alıntı yapılmamalıdır. 

7. Sitemizde açılan konu başlıklarına fikir ve görüşlerinizle katkıda bulunurken, Türkçe’nin imla ve dilbilgisi kurallarına azami dikkat göstermeniz gerekmektedir. Bunun için kelimeleri telaffuz ettiğiniz gibi değil, yazı dilinde yer alması gerektiği şekliyle yazmaya özen göstermelisiniz. 

8. "Flood", yani art arda mesaj yazmamaya özen göstermelisiniz. Yazdığınız mesajın ardından eklemek istediğiniz yeni bir şeyler varsa, önceki mesajınızı düzenleme yoluyla yeniden şekillendirebilirsiniz. 

9. Üyelerin kullanacağı avatar ve imzaların, içerik ve boyut ebatlarının kurallara uygun olması gerekir. İlk maddede belirtilen ve yasak teşkil edebilecek tüm konular, aynen burada da geçerlidir. 

10. Merlin’in Kazanı’na üye olan herkes, yukarıda yazılı olan kuralları okumuş ve bu sözleşmeyi kabul etmiş sayılır. Kurallara uymayan üyeler hakkındaki gereken işlemler, görevlilerce yapılacaktır.
                </textarea>
                <label id="benihat">
                    <input type="checkbox" name="kullanicisoz" class="benihatirlacl" required>
                    <div class="benihat">Üyelik sözleşmesni kabul ediyorum</div>
                </label> <br>
                <div class="kontrol">
                    <?php if(isset($giriskontrol)):?>
                    <p class="giriskontrol" style="text-align:center; color:#8899B8;"><?php echo $giriskontrol?></p>
                    <?php endif ?>
                    </div>
                <div class="girisbutton">
                    <button type="submit" name="submit" value="1">Üye Ol</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "static/Footer.php";?>