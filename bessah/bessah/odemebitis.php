 <?php
	ob_start();
 ?>
<?php

include"header.php";

?>
<?php  

	





?>

<div class="sabitfoto-model">
	<!--<div id="mainMarka" class="marka"  ><button class="markayazi"><?php //echo $gelenid; ?></button></div>-->


    <div class="sabitfoto-content-model">
        <div class="sabitfoto-item-model">            
            <img  src="img/odemeBitis.jpg">
        </div>
    </div>
</div>
<br>
<div style="text-align: center;" class="tik">
	<img src="img/tik.png">
</div>

<br>
<div style="width: 100%;height: 200px; text-align: center;">
	<p>Ödeme Başarıyla Tamamlanmıştır</p><br>
	<p>Hayırlı Olsun</p><br>
	<p>10 Saniye İçinde Anasayfaya Yönlendirileceksiniz.</p>
	<?php if (1==1) {
		header("Refresh: 10; index.php");
		exit;
	} ?>
</div>
<?php

include"footer.php";

?>