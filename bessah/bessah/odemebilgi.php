<?php

include"header.php";

?>
<?php  
//gerekli bilgilerin çekme işlemi
	$marka=$_GET['marka'];
	$model=$_GET['model'];
	$fiyat=$_GET['fiyat'];
	$tablo=$_GET['tablo'];
	if (isset($_GET['renk'])) {
		$renk=$_GET['renk'];
	}else{
		$renk="Yok";
	}
	if (isset($_GET['opsiyon1'])) {
		$opsiyon1=$_GET['opsiyon1'];
	}else{
		$opsiyon1="Yok";
	}
	if (isset($_GET['opsiyon2'])) {
		$opsiyon2=$_GET['opsiyon2'];
	}else{
		$opsiyon2="Yok";
	}
	if (isset($_GET['opsiyon3'])) {
		$opsiyon3=$_GET['opsiyon3'];
	}else{
		$opsiyon3="Yok";
	}
	if (isset($_GET['opsiyon4'])) {
		$opsiyon4=$_GET['opsiyon4'];
	}else{
		$opsiyon4="Yok";
	}
	

	if (isset($_GET['opsiyon5'])) {
		$opsiyon5=$_GET['opsiyon5'];
	}else{
		$opsiyon5="Yok";
	}
	if (isset($_GET['opsiyon6'])) {
		$opsiyon6=$_GET['opsiyon6'];
	}else{
		$opsiyon6="Yok";
	}

	if (isset($_GET['opsiyon7'])) {
		$opsiyon7=$_GET['opsiyon7'];
	}else{
		$opsiyon7="Yok";
	}

	if (isset($_GET['opsiyon8'])) {
		$opsiyon8=$_GET['opsiyon8'];
	}else{
		$opsiyon8="Yok";
	}

	if (isset($_GET['opsiyon9'])) {
		$opsiyon9=$_GET['opsiyon9'];
	}else{
		$opsiyon9="Yok";
	}

	if (isset($_GET['opsiyon10'])) {
		$opsiyon10=$_GET['opsiyon10'];
	}else{
		$opsiyon10="Yok";
	}

	if (isset($_GET['opsiyon11'])) {
		$opsiyon11=$_GET['opsiyon11'];
	}else{
		$opsiyon11="Yok";
	}

	if (isset($_GET['opsiyon12'])) {
		$opsiyon12=$_GET['opsiyon12'];
	}else{
		$opsiyon12="Yok";
	}

	if (isset($_GET['opsiyon13'])) {
		$opsiyon13=$_GET['opsiyon13'];
	}else{
		$opsiyon13="Yok";
	}


	$cek=$db->query("SELECT * FROM $tablo where Marka='$marka' and Model='$model'")->fetch();
	$showroom=$cek['Showroom']




?>

<div class="sabitfoto-model">
	<!--<div id="mainMarka" class="marka"  ><button class="markayazi"><?php //echo $gelenid; ?></button></div>-->


    <div class="sabitfoto-content-model">
        <div class="sabitfoto-item-model">            
            <img src="img/profil/<?php echo $tablo; ?>/<?php echo $cek['Model']; ?>.jpg"><!--Id numarasına göre fotoğrafların çekimi-->
        </div>
    </div>
</div>
<section id="preview" class="sectionArea"> <!-- class açma sebebi-> fotoğraflar ve altındaki başlıklar arasında boşluk yaratmak için -->
<div class="previewTop">
  <h2 class="sectionHeaderS">Satın Alma</h2> <!-- başlık bölümünde aynı tür tasarım kullanacağı için class ismi verildi -->
  <!--<p>Bu ve benzeri daha bir çok aracaımıza <a href="showroom.php" style="color: #fff; text-decoration: none;">Showroom'lar</a> bölümünden bakabilirsiniz.
  </p>-->
</div>
</section>

<br>
<div class="container2">
	<div class="col17">	
		<h6 style="color: #8b0000; font-size: 15px;">Marka</h6>
		<h5 style="font-size: 30px;"><?php echo $marka ?></h5>
	</div>
	<div class="col17">	
		<h6 style="color: #8b0000; font-size: 15px;">Model</h6>
		<h5 style="font-size: 30px;"><?php echo $model ?></h5>
	</div>
	<div class="col17">	
		<h6 style="color: #8b0000; font-size: 15px;">Fiyat</h6>
		<h5 style="font-size: 30px;"><?php $x = number_format($fiyat, 2, ',', '.'); echo $x ?>TL</h5>
	</div>
</div>

<br>
<br>
<br>

<script > 
function isNumberKey(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;//sadece rakam yazılmasını sağlayan komut
    return true;
}                                      
 </script>
 <script>
 function iskeywordkey(evt) {
             var charCode = (evt.which) ? evt.which : event.keyCode
            if (((charCode <= 93 && charCode >= 65) || (charCode <= 122 && charCode >= 97) || charCode == 8) || charCode == 350 || charCode == 351 || charCode == 304 || charCode == 286 || charCode == 287 || charCode == 231 || charCode == 199 || charCode == 305 || charCode == 214 || charCode == 246 || charCode == 220 || charCode == 252 || charCode == 18 || charCode == 32) 
                return true;
           		return false; //sadece harf yazılmasını sağlayan komut   
 }
 </script>



<section id="odemeBilgiD">
<form action="odemesonuc.php" method="POST">
	<div class="odemeBilgiİ">
		<div class="container12">
			 <label for="ob1">Ad Soyad</label>
			 <div class="col16">
			 <input id="ob1"  type="text" name="adsoyad" autocomplete="off" autofocus="autofocus"  required="required" maxlength="40" onkeypress="return iskeywordkey(event)" \>
			 </div>
			 <br>
			 <br>
			 <label for="ob2">Telefon Numarası</label>
			 <div class="col16">
			 <input id="ob2" type="tel" name="telnumara" autocomplete="off" placeholder="5425926367" pattern="[0-9]{10}" required="required" onkeypress="return isNumberKey(event)"  maxlength="10" \>
			 </div>
			 <br>
			 <br>
			 <label for="ob3">E-Posta</label>
			 <div class="col16">
			 <input id="ob3" type="email" name="e-posta" autocomplete="off" placeholder="birisi@example.com" required="required"  \>
			 </div>
			 <br>
			 <br>
			 <label for="ob4">Kart Numarası</label>
			 <div class="col16">
			 <input id="ob4" type="text" name="kartno" autocomplete="off" autofocus="autofocus" placeholder="4000 3008 8006 9003" pattern="[0-9]{16}"  required="required" maxlength="16"
			 onkeypress="return isNumberKey(event)"  \>
			 </div>
			 <br>
			 <br>
			 <label for="ob5">Kart Üzerindeki İsim</label>
			 <div class="col16">
			 <input id="ob5" type="tel" name="kartisim" autocomplete="off" required="required" onkeypress="return iskeywordkey(event)"  \>
			 </div>
			 <br>
			 <br>
			 <label for="ob6">Kartın Son Kullanma Tarihi</label>
			 <br>
			 <br>
			<div  class="dataF">
				<div class="container15">
					<div class="col15">
						<label class="selectBoxX">
			 				<select name="ay"   >
                    			<option value="01">01</option>
                    			<option value="02">02</option>
                    			<option value="03">03</option>
                    			<option value="04">04</option>
                    			<option value="05">05</option>
                    			<option value="06">06</option>
                    			<option value="07">07</option>
                    			<option value="08">08</option>
                    			<option value="09">09</option>
                    			<option value="10">10</option>
                    			<option value="11">11</option>
                    			<option value="12">12</option>
                    	
                			</select>
                		</label>
                	</div>
                	<div class="col15">
                		<label class="selectBoxX">
			 				<select name="yil"   >
                    			<option value="2021">2021</option>
                    			<option value="2022">2022</option>
                    			<option value="2023">2023</option>
                    			<option value="2024">2024</option>
                    			<option value="2025">2025</option>
                    			<option value="2026">2026</option>
                    			<option value="2027">2027</option>
                    			<option value="2028">2028</option>
                    			<option value="2029">2029</option>
                    			<option value="2030">2030</option>
                    			<option value="2031">2031</option>
                			</select>
                		</label>
            		</div>
            	</div>
            </div>
             <br>
			 <br>
			 <br>
			 <br>
			 <label for="ob7">Günvelik Kodu</label>
			 <div class="col16">
			 <input id="ob7" type="text" name="guvenlikkod" autocomplete="off" pattern="[0-9]{3}" required="required" 
			 onkeypress="return isNumberKey(event)" maxlength="3" \>
			 </div>
		</div>
			 <br>
			 <br>
			 <div class="obBtn">
			 	<input style="cursor: pointer;" type="submit" name="btn" value="Satın Al">
			 </div>
			 <input type="hidden" name="marka" value="<?php echo $marka; ?>">
			 <input type="hidden" name="model" value="<?php echo $model; ?>">
			 <input type="hidden" name="fiyat" value="<?php echo $fiyat; ?>">
			 <input type="hidden" name="tablo" value="<?php echo $tablo; ?>">
			 <input type="hidden" name="renk" value="<?php echo $renk; ?>">
			 <input type="hidden" name="opsiyon1" value="<?php echo $opsiyon1; ?>">
			 <input type="hidden" name="opsiyon2" value="<?php echo $opsiyon2; ?>">
			 <input type="hidden" name="opsiyon3" value="<?php echo $opsiyon3; ?>">
			 <input type="hidden" name="opsiyon4" value="<?php echo $opsiyon4; ?>">
			 <input type="hidden" name="opsiyon5" value="<?php echo $opsiyon5; ?>">
			 <input type="hidden" name="opsiyon6" value="<?php echo $opsiyon6; ?>">
			 <input type="hidden" name="opsiyon7" value="<?php echo $opsiyon7; ?>">
			 <input type="hidden" name="opsiyon8" value="<?php echo $opsiyon8; ?>">
			 <input type="hidden" name="opsiyon9" value="<?php echo $opsiyon9; ?>">
			 <input type="hidden" name="opsiyon10" value="<?php echo $opsiyon10; ?>">
			 <input type="hidden" name="opsiyon11" value="<?php echo $opsiyon11; ?>">
			 <input type="hidden" name="opsiyon12" value="<?php echo $opsiyon12; ?>">
			 <input type="hidden" name="opsiyon13" value="<?php echo $opsiyon13; ?>">
			 <input type="hidden" name="showroom" value="<?php echo $showroom; ?>">

	</div>
</form>
</section>

<br>
<br>

<?php

include"footer.php";

?>