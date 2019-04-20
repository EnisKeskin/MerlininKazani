<div class="sidebar">
    <div class="sidebarlist">
        <div class="sidebarkonu">Teknoloji Haberleri</div>
        <div class="sidebarustu">
            <?php for ($i=1; $i <=10 ; $i++) { ?>
            <div class="siderow">
                <div class="kapsul">
                    <div class="kapsulsayi">
                        <?php echo $i ?>
                    </div>
                    <div class="kapsulyazisi">
                        <a href="<?php echo $list[$i-1]["list_link"] ?>">
                        <?php echo $list[$i-1]["list_title"] ?>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="devam">
            <input type="button" value="Daha Fazlası" onclick="javascript:window.location='http://tunaweb.net';">
        </div>
    </div>
