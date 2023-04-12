
<?php include "header.php"; ?>


 <?php 
 	$gelenMarka=$_GET["i"];//marka ismi
    $gelentablo=$_GET["a"];//tablo ismi
    $gelenModel=$_GET["e"];//model ismi
   


 	$cek=$db->query("SELECT * FROM $gelentablo where Marka='$gelenMarka' and Model='$gelenModel' ")->fetch();//model bilgilerini çeken sorgu
 	$standartrenk=$cek['Renk'];

   ?>
   <?php $vericek=$db->query("SELECT * FROM opsiyon where opsiyonAd='$standartrenk'")->fetch();  ?>
   <?php if (isset($_GET['renk'])) {
   		$ilkId=$_GET['renk'];
   		$ilkrenkcek=$db->query("SELECT * FROM opsiyon where OpsiyonId='$ilkId'")->fetch();
   		$ilkrenk=$ilkrenkcek['opsiyonAd'];
   }else{
   	$ilkrenk=$standartrenk;
   }
   if (empty($ilkrenk)) {
    	$ilkrenk=$standartrenk;
    } ?>


<!-- Slider Bölümü -->

<div class="profilfoto-model"> 
<div class="profilx"  >
	<h6 style="text-align: center;">Marka</h6>
	<br>
	<h5><?php echo $cek['Marka'] ?></h5><!--Marka ismi-->
</div>   
<div class="vr"></div>    
<div class="profily"  >
	<h6 style="text-align: center;">Model</h6>
		<br>
		<h5><?php echo $cek['Model'] ?></h5>
</div>
   <img style="" src="img/profil/<?php echo $gelentablo ?>/<?php echo $cek['Model'] ?>.jpg"><!--Profil fotoğrafı çekme-->
		
</div>
<br>
<br>
<br>
<form  action="profil.php" method="GET">
	<section  style="width: 90%;" id="modelDB">
		<div   class="modelVeri">
			<div   class="container2">
				<div class="col7">	
					<h6 style="color: #8b0000; font-size: 15px;">Motor Hacmi</h6>
					<h5 style="font-size: 30px;"><?php echo $cek['MotorHacmi'] ?></h5><!--Motor hacmi çekimi-->
				</div>
				<div class="col7">	
					<h6 style="color: #8b0000; font-size: 15px;">Renk</h6>
					<div class="renkO">

					<h5 style="font-size: 30px;">
						<!-- Renkleri yazdırma-->
						<?php  $opsiyonrenk=$db->query("SELECT * FROM opsiyon where opsiyonTur='Renk' and opsiyonMarka='$gelenMarka'");  ?>
						
							 <select name="renk">
						                    <option value=""><?php echo $ilkrenk; ?></option>
						                    <?php while($renk=$opsiyonrenk->fetch()){ ?>
						                    <option value="<?php echo $renk['OpsiyonId']; ?>"><?php echo $renk['opsiyonAd']; ?></option> 
						                <?php } ?>
						      </select>


						    </h5>

						<!--Renk bilgisi çekimi--></div>
				</div>
				<div class="col7">	
					<h6 style="color: #8b0000; font-size: 15px;">Showroom</h6>
					<h5 style="font-size: 30px;"> <?php echo $cek['Showroom']?> </h5><!--Motor hacmi çekimi-->
				</div>
			</div>
			<br>
			<div  class="container2">
				<div  class="col7">	
					<h6 style="color: #8b0000; font-size: 15px;">Vites</h6>
					<h5 style="font-size: 30px;"><?php echo $cek['Vites'] ?></h5><!-- Vites  çekimi-->
				</div>
				<div class="col7">	
					<h6 style="color: #8b0000; font-size: 15px;">Yıl</h6>
					<h5 style="font-size: 30px;"><?php echo $cek['UretimYili'] ?></h5><!--Yıl Bilgisi çekimi-->
				</div>
				<div class="col7">	
					<h6 style="color: #8b0000; font-size: 15px;">Stok</h6>
					<h5 style="font-size: 30px;"><?php echo $cek['Stok'] ?><!--Stok Bİlgisi çekimi--></h5>
				</div>
			</div>
			<br>
			<div  class="container2">
				<div  class="col7">	
					<h6 style="color: #8b0000; font-size: 15px;">Yakıt Tipi</h6>
					<h5 style="font-size: 30px;"><?php echo $cek['YakitTipi'] ?></h5><!--Yakıt bilgisi çekimi-->
				</div>
				<div class="col7">	
					<h6 style="color: #8b0000; font-size: 15px;">Çekiş</h6>
					<h5 style="font-size: 30px;"><?php echo $cek['Cekis'] ?></h5><!--Çekiş bilgisi çekimi-->
				</div>
				<div class="col7">	
					<h6 style="color: #8b0000; font-size: 15px;">Kategori</h6>
					<h5 style="font-size: 30px; text-transform: capitalize;"><?php echo $gelentablo ?></h5><!--Kategori bilgisi-->
				</div>
			</div>
			<br>
			
		
			<!--Seçili opsiyonun bilgileri-->
			<!--Çalışıyor-->
			<?php  

			$standartId=$vericek['OpsiyonId'];
			if (isset($_GET['renk'])) {
					$renkId=$_GET['renk'];
					$renkcek=$db->query("SELECT * FROM opsiyon where OpsiyonId='$renkId'")->fetch();
					$renkfiyat=$renkcek['opsiyonFiyat'];
					$renkad=$renkcek['opsiyonAd'];	}


					//çalışıyor
			if (isset($_GET['jant'])) {
				$jantId=$_GET['jant'];
				$jantcek=$db->query("SELECT * FROM opsiyon where OpsiyonId='$jantId' ")->fetch();
				$jantfiyat=$jantcek['opsiyonFiyat'];
				$jantad=$jantcek['opsiyonAd'];
			}else{
				$jantfiyat=0;
			}
			//çalışıyor
			if (isset($_GET['Sunroof'])) {
				$sanrufId=$_GET['Sunroof'];
				$sanrufcek=$db->query("SELECT * FROM opsiyon where OpsiyonId='$sanrufId' ")->fetch();
				$sanruffiyat=$sanrufcek['opsiyonFiyat'];
				$sanrufad=$sanrufcek['opsiyonAd'];
			}else{
				$sanruffiyat=0;
			}
			//çalışıyor
			if (isset($_GET['cam'])) {
				$camId=$_GET['cam'];
				$camcek=$db->query("SELECT * FROM opsiyon where OpsiyonId='$camId' ")->fetch();
				$camfiyat=$camcek['opsiyonFiyat'];
				$camad=$camcek['opsiyonAd'];
			}else{
				$camfiyat=0;
			}
			//çalışıyor
			if (isset($_GET['KoltukKaplaması'])) {
				$koltukId=$_GET['KoltukKaplaması'];
				$koltukcek=$db->query("SELECT * FROM opsiyon where OpsiyonId='$koltukId' ")->fetch();
				$koltukfiyat=$koltukcek['opsiyonFiyat'];
				$koltukad=$koltukcek['opsiyonAd'];
			}else{
				$koltukfiyat=0;
			}
			//çalışıyor
			if (isset($_GET['fartipi'])) {
				$farId=$_GET['fartipi'];
				$farcek=$db->query("SELECT * FROM opsiyon where OpsiyonId='$farId' ")->fetch();
				$farfiyat=$farcek['opsiyonFiyat'];
				$farad=$farcek['opsiyonAd'];
			}else{
				$farfiyat=0;
			}
			//çalışıyor
			if (isset($_GET['sensor'])) {
				$sensorId=$_GET['sensor'];
				$sensorcek=$db->query("SELECT * FROM opsiyon where OpsiyonId='$sensorId' ")->fetch();
				$sensorfiyat=$sensorcek['opsiyonFiyat'];
				$sensorad=$sensorcek['opsiyonAd'];
			}else{
				$sensorfiyat=0;

			}
			//çalışıyor
			if (isset($_GET['KoltukRenk'])) {
				$KoltukRenkId=$_GET['KoltukRenk'];
				$KoltukRenkcek=$db->query("SELECT * FROM opsiyon where OpsiyonId='$KoltukRenkId' ")->fetch();
				$KoltukRenkfiyat=$KoltukRenkcek['opsiyonFiyat'];
				$KoltukRenkad=$KoltukRenkcek['opsiyonAd'];
			}else{
				$KoltukRenkfiyat=0;
			}
			//çalışıyor
            if (isset($_GET['far'])) {
				$FarIsikId=$_GET['far'];
				$FarIsikcek=$db->query("SELECT * FROM opsiyon where OpsiyonId='$FarIsikId' ")->fetch();
				$FarIsikfiyat=$FarIsikcek['opsiyonFiyat'];
				$FarIsikad=$FarIsikcek['opsiyonAd'];
			}else{
				$FarIsikfiyat=0;
			}

			if (isset($_GET['JantRenk'])) {
				$JantRenkId=$_GET['JantRenk'];
				$JantRenkcek=$db->query("SELECT * FROM opsiyon where OpsiyonId='$JantRenkId' ")->fetch();
				$JantRenkfiyat=$JantRenkcek['opsiyonFiyat'];
				$JantRenkad=$JantRenkcek['opsiyonAd'];
			}else{
				$JantRenkfiyat=0;
			}

			if (isset($_GET['Led'])) {
				$LedId=$_GET['Led'];
				$Ledcek=$db->query("SELECT * FROM opsiyon where OpsiyonId='$LedId' ")->fetch();
				$Ledfiyat=$Ledcek['opsiyonFiyat'];
				$Ledad=$Ledcek['opsiyonAd'];
			}else{
				$Ledfiyat=0;
			}

            if (isset($_GET['Tampon'])) {
				$TamponId=$_GET['Tampon'];
				$Tamponcek=$db->query("SELECT * FROM opsiyon where OpsiyonId='$TamponId' ")->fetch();
				$Tamponfiyat=$Tamponcek['opsiyonFiyat'];
				$Tamponad=$Tamponcek['opsiyonAd'];
			}else{
				$Tamponfiyat=0;
			}
//çalışmıyor
            if (isset($_GET['Lastik'])) {
				$LastikId=$_GET['Lastik'];
				$Lastikcek=$db->query("SELECT * FROM opsiyon where OpsiyonId='$LastikId' ")->fetch();
				$Lastikfiyat=$Lastikcek['opsiyonFiyat'];
				$Lastikad=$Lastikcek['opsiyonAd'];
			}else{
				$Lastikfiyat=0;
			}
//çalışmıyor
			if (isset($_GET['CekisDemir'])) {
				$CekisDemirId=$_GET['CekisDemir'];
				$CekisDemircek=$db->query("SELECT * FROM opsiyon where OpsiyonId='$CekisDemirId' ")->fetch();
				$CekisDemirfiyat=$CekisDemircek['opsiyonFiyat'];
				$CekisDemirad=$CekisDemircek['opsiyonAd'];
			}else{
				$CekisDemirfiyat=0;
			}


		    //Seçili opsiyonun bilgileri

			
			//yeni fiyat tanımlaması
			if (isset($renkad)) {
				if ($renkad==$standartrenk) {
					$renkfiyat=0;
				}
			}else{
				$renkfiyat=0;
			}
			if ($renkfiyat+$jantfiyat+$camfiyat+$sanruffiyat+$koltukfiyat+$farfiyat+$sensorfiyat+$CekisDemirfiyat+$Lastikfiyat+$Tamponfiyat+$Ledfiyat+$JantRenkfiyat+$FarIsikfiyat+$KoltukRenkfiyat>0) {
				$yenipara=$renkfiyat+$jantfiyat+$cek['Fiyat']+$camfiyat+$sanruffiyat+$koltukfiyat+$farfiyat+$sensorfiyat+$CekisDemirfiyat+$Lastikfiyat+$Tamponfiyat+$Ledfiyat+$JantRenkfiyat+$FarIsikfiyat+$KoltukRenkfiyat;

			}else{
				$yenipara=0;
			}
			//yeni fiyat tanımlaması

				//opsiyon fiyat tanımlaması
			if (isset($renkad)) {
				if ($renkad==$standartrenk) {
					$renkfiyat=0;
				}
			}else{
				$renkfiyat=0;
			}
			if ($renkfiyat+$jantfiyat+$camfiyat+$sanruffiyat+$koltukfiyat+$farfiyat+$sensorfiyat+$CekisDemirfiyat+$Lastikfiyat+$Tamponfiyat+$Ledfiyat+$JantRenkfiyat+$FarIsikfiyat+$KoltukRenkfiyat>0) {
				$opsiyonpara=$renkfiyat+$jantfiyat+$camfiyat+$sanruffiyat+$koltukfiyat+$farfiyat+$sensorfiyat+$CekisDemirfiyat+$Lastikfiyat+$Tamponfiyat+$Ledfiyat+$JantRenkfiyat+$FarIsikfiyat+$KoltukRenkfiyat;

			}else{
				$opsiyonpara=0;
			}
			//opsiyon fiyat tanımlaması
			
		?>

	</section>
	<br>
	<br>
	<br>

<hr style="width: 80%; background-color: #8b0000;">
<br>
<br>
<br>
<br>

	<section id="opsiyonBody">


		<!--Seçili Opsiyonlar-->
		<?php if ($yenipara>=0) { ?>

		<section style="height: 150px;">
			<div class="opsiyonHeader" style="position: relative; text-align: center;">
			<h2 class="sectionHeader">Opsiyonlar</h2>
		</div>
		<br>


			<p style="position: absolute;right: 45%;"><?php if (isset($renkad)) {
				if ($renkad==$standartrenk) {
					
				}else{
					echo "<p class='opsiyonsecili1'>Renk:</p>";
					echo "<p class='opsiyonsecili'>$renkad</p>";
				}
			}  ?>
			 <?php if ($renkfiyat>0) {
			 	
			 		echo "<p class='opsiyonsecili'>$renkfiyat TL</p>";
			 } ?>


			 <?php if (isset($jantad)) {
				if ($jantad!="Yok") {
					echo "<p class='opsiyonsecili1'>Jant:</p>";
					echo "<p class='opsiyonsecili'>$jantad</p>";
				}
			} ?> 

			<?php 
				if (isset($jantad)) {
					if ($jantad!="Yok") {
						if ($jantfiyat>0) {
							echo "<p class='opsiyonsecili'>$jantfiyat TL</p>";
						}
					}
				} ?>
				
				<?php if (isset($sanrufad)) {
					echo "<p class='opsiyonsecili1'>Sunroof:</p>";
					echo "<p class='opsiyonsecili'>$sanrufad</p>";
					echo "&nbsp";
				}

				if (isset($sanrufad)) {
					echo "<p class='opsiyonsecili'>$sanruffiyat TL</p>";
				}

				 ?>

				
					<?php if (isset($camad)) {
					echo "<p class='opsiyonsecili1'>Cam:</p>";
					echo "<p class='opsiyonsecili'>$camad</p>";
					echo "&nbsp";
				}

				if (isset($camad)) {
					echo "<p class='opsiyonsecili'>$camfiyat TL</p>";
				}

				 ?>
				
				<?php if (isset($koltukad)) {
					echo "<p class='opsiyonsecili1'>Koltuk Kaplaması:</p>";
					echo "<p class='opsiyonsecili'>$koltukad</p>";
					echo "&nbsp";
				}

				if (isset($koltukad)) {
					echo "<p class='opsiyonsecili'>$koltukfiyat TL</p>";
				}

				 ?>
				 
				<?php if (isset($farad)) {
					echo "<p class='opsiyonsecili1'>Far Tipi</p>";
					echo "<p class='opsiyonsecili'>$farad</p>";
					echo "&nbsp";
				}

				if (isset($farad)) {
					echo "<p class='opsiyonsecili'>$farfiyat TL</p>";
				}

				 ?>
				 
				
				<?php if (isset($KoltukRenkad)) {
					echo "<p class='opsiyonsecili1'>Koltuk Rengi:</p>";
					echo "<p class='opsiyonsecili'>$KoltukRenkad</p>";
					echo "&nbsp";
				}

				if (isset($KoltukRenkad)) {
					echo "<p class='opsiyonsecili'>$KoltukRenkfiyat TL</p>";
				}

				 ?>

				 
				<?php if (isset($FarIsikad)) {
					echo "<p class='opsiyonsecili1'>Far Işığı:</p>";
					echo "<p class='opsiyonsecili'>$FarIsikad</p>";
					echo "&nbsp";
				}

				if (isset($FarIsikad)) {
					echo "<p class='opsiyonsecili'>$FarIsikfiyat TL</p>";
				}

				 ?>

				

				<?php if (isset($JantRenkad)) {
					echo "<p class='opsiyonsecili1'>Jant Rengi</p>";
					echo "<p class='opsiyonsecili'>$JantRenkad</p>";
					echo "&nbsp";
				}

				if (isset($JantRenkad)) {
					echo "<p class='opsiyonsecili'>$JantRenkfiyat TL</p>";
				}

				 ?>

				

				<?php if (isset($Ledad)) {
					echo "<p class='opsiyonsecili1'>Led İlave Aydınlatma:</p>";
					echo "<p class='opsiyonsecili'>$Ledad</p>";
					echo "&nbsp";
				}

				if (isset($Ledad)) {
					echo "<p class='opsiyonsecili'>$Ledfiyat TL</p>";
				}

				 ?>

				


				<?php if (isset($Tamponad)) {
					echo "<p class='opsiyonsecili1'>Ön Tampon:</p>";
					echo "<p class='opsiyonsecili'>$Tamponad</p>";
					echo "&nbsp";
				}

				if (isset($Tamponad)) {
					echo "<p class='opsiyonsecili'>$Tamponfiyat TL</p>";
				}

				 ?>

				


				<?php if (isset($Lastikad)) {
					echo "<p class='opsiyonsecili1'>Yedek Lastik:</p>";
					echo "<p class='opsiyonsecili'>$Lastikad</p>";
					echo "&nbsp";
				}

				if (isset($Lastikad)) {
					echo "<p class='opsiyonsecili'>$Lastikfiyat TL</p>";
				}

				 ?>
				 <?php if (isset($sensorad)) {
				 	echo "<p class='opsiyonsecili1'>Sensör:</p>";
					echo "<p class='opsiyonsecili'>$sensorad</p>";
					echo "&nbsp";
				}

				if (isset($sensorad)) {
					echo "<p class='opsiyonsecili'>$sensorfiyat TL</p>";
				}

				 ?>

				


				<?php if (isset($CekisDemirad)) {
					echo "<p class='opsiyonsecili1'>Çeki Demiri</p>";
					echo "<p class='opsiyonsecili'>$CekisDemirad</p>";
					echo "&nbsp";
				}

				if (isset($CekisDemirad)) {
					echo "<p class='opsiyonsecili'>$CekisDemirfiyat TL</p>";
				}

				 ?>

				<?php } ?>
		

			<div class="echoO" style="position: relative; text-align: center;">

			<?php if ($yenipara<$cek['Fiyat']) {
				echo "Seçili Opsiyon Bulunmamaktadır.";
			} ?>

			</div>
			</section>
			<br>
	<!--Seçili Opsiyonlar-->

	
			
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>

			<!--Jant Bilgisi yazdırma-->
			<?php 
						$opsiyonjant1=$db->query("SELECT * FROM opsiyon where opsiyonTur='Jant Boyutu' and opsiyonMarka='$gelenMarka' or opsiyonMarka='Ortak' ")->fetch();
			 		?>
			<?php if (isset($opsiyonjant1['OpsiyonId'])) {?>
	

			<div class="jant">
				<p style="font-size: 35px;">Jantlar<p>
				<br>
				<div class="jantİ">
					<?php 
						$opsiyonjant=$db->query("SELECT * FROM opsiyon where opsiyonTur='Jant Boyutu' and opsiyonMarka='$gelenMarka' or opsiyonMarka='Ortak' ");
			 		?>
			
					<?php while($op=$opsiyonjant->fetch()){ ?>

				
					<div style="display: inline-block;">
						<label>
							<p style="font-size: 15px; color: #ff0000;"><?php echo $op['opsiyonAd']; ?></p>
						</label>

						<br>

						<label>
							<p style="margin: 15px;"><?php echo $op['opsiyonFiyat']; ?>TL</p>
						</label>

						<input style="position: relative; margin: 0 auto;" type="radio" name="jant" value="<?php echo $op['OpsiyonId']; ?>"></div> <?php } ?>
				<!--Jant Bilgisi yazdırma-->

				</div>
			</div>

			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		<?php } ?>

				<!--Sunroff Bilgisi yazdırma-->
				<?php 
							$opsiyonsanruf1=$db->query("SELECT * FROM opsiyon where opsiyonTur='Sunroof' and opsiyonMarka='$gelenMarka'")->fetch();
			 			?>
				<?php if (isset($opsiyonsanruf1['OpsiyonId'])) { ?>
					
			
				<div class="sunroof">
					<p style="font-size: 35px;">Sunroof</p>
					<br>
					<div class="sunroofİ">
						<?php 
							$opsiyonsanruf=$db->query("SELECT * FROM opsiyon where opsiyonTur='Sunroof' and opsiyonMarka='$gelenMarka'");
			 			?>

						<?php while($op=$opsiyonsanruf->fetch()){ ?>

				
						<div style="display: inline-block;">
							<label>
								<p style="font-size: 15px; margin: 5px; color: #ff0000;"><?php echo $op['opsiyonAd']; ?></p>
							</label>

							<br>

							<label>
								<p><?php echo $op['opsiyonFiyat']; ?>TL</p>
							</label>

							<input style="position: relative; margin: 0 auto;" type="radio" name="Sunroof" value="<?php echo $op['OpsiyonId']; ?>"></div> 
						<?php } ?>
				<!--Sunroof Bilgisi yazdırma-->

					</div>
				</div>

				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<?php } ?>

				<!--Cam Bilgisi yazdırma-->
				<?php 
						$opsiyoncam1=$db->query("SELECT * FROM opsiyon where opsiyonTur='Cam Filmi' and opsiyonMarka='$gelenMarka'")->fetch();
			 		?>

				<?php if (isset($opsiyoncam1['OpsiyonId'])) { ?>
					
	
				<div class="cam">
					<p style="font-size: 35px;">Cam Filmi</p>
					<br>
					<div class="camİ" style="background-color: #0f0f0f;">
					<?php 
						$opsiyoncam=$db->query("SELECT * FROM opsiyon where opsiyonTur='Cam Filmi' and opsiyonMarka='$gelenMarka'");
			 		?>

					<?php while($op=$opsiyoncam->fetch()){ ?>

				
				<div style="display: inline-block;">
					<label>
						<p style="font-size: 15px; margin: 10px; color: #ff0000;"><?php echo $op['opsiyonAd']; ?></p>
					</label>

					<br>

					<label>
						<p><?php echo $op['opsiyonFiyat']; ?>TL</p>
					</label>

					<input style="position: relative; margin: 0 auto;" type="radio" name="cam" value="<?php echo $op['OpsiyonId']; ?>"></div> <?php } ?>
				<!--Cam Bilgisi yazdırma-->

					</div>
				</div>

<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<?php } ?>

				<!--Koltuk Bilgisi yazdırma-->
				<?php 
						$opsiyonkoltuk1=$db->query("SELECT * FROM opsiyon where opsiyonTur='Koltuk Kaplaması' and opsiyonMarka='$gelenMarka'")->fetch();
			 		?>
			 		<?php if (isset($opsiyonkoltuk1['OpsiyonId'])) { ?>
			 			
			 		
				<div class="koltukK">
					<p style="font-size: 35px;">Koltuk Kaplaması</p>
					<br>
					<div class="koltukKİ">
					<?php 
						$opsiyonkoltuk=$db->query("SELECT * FROM opsiyon where opsiyonTur='Koltuk Kaplaması' and opsiyonMarka='$gelenMarka'");
			 		?>

					<?php while($op=$opsiyonkoltuk->fetch()){ ?>

				
				<div style="display: inline-block;">
					<label>
						<p style="font-size: 15px; margin: 10px; color: #ff0000;"><?php echo $op['opsiyonAd']; ?></p>
					</label>

					<br>

					<label>
						<p style="margin: 5px;"><?php echo $op['opsiyonFiyat']; ?>TL</p>
					</label>

					<input style="position: relative; margin: 0 auto;" type="radio" name="KoltukKaplaması" value="<?php echo $op['OpsiyonId']; ?>"></div> <?php } ?>
				<!--Koltuk Bilgisi yazdırma-->
					</div>
				</div>

				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<?php } ?>

				<!--Far Bilgisi yazdırma-->
				<?php 
						$opsiyonfar1=$db->query("SELECT * FROM opsiyon where opsiyonTur='Far Işığı' and opsiyonMarka='$gelenMarka'")->fetch();
			 		?>
			 		<?php if (isset($opsiyonfar1['OpsiyonId'])) { ?>

				<div class="far" style="position: relative; width: 100%;">
					<p style="font-size: 35px;">Far Işığı</p>
					<br>
					<div class="farİ">
					<?php 
						$opsiyonfar=$db->query("SELECT * FROM opsiyon where opsiyonTur='Far Işığı' and opsiyonMarka='$gelenMarka'");
			 		?>

					<?php while($op=$opsiyonfar->fetch()){ ?>

				
				<div style="display: inline-block;">
					<label>
						<p style="font-size: 15px; margin: 10px; color: #ff0000;"><?php echo $op['opsiyonAd']; ?></p>
					</label>

					<br>
					
					<label>
					<p style="margin: 15px;"><?php echo $op['opsiyonFiyat']; ?>TL</p>
					</label>

					<input style="position: relative; margin: 0 auto;" type="radio" name="far" value="<?php echo $op['OpsiyonId']; ?>"></div> <?php } ?>
				<!--Far Bilgisi yazdırma-->

					</div>
				</div>

				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<?php } ?>

				<!--Sensör Bilgisi yazdırma-->
				<?php 
						$opsiyonsensor1=$db->query("SELECT * FROM opsiyon where opsiyonTur='Sensörler' and opsiyonMarka='$gelenMarka'")->fetch();
			 		?>
			 		<?php if (isset($opsiyonsensor1['OpsiyonId'])) { ?>

				<div class="sensor">
					<p style="font-size: 35px;">Sensör</p>
					<br>
					<div class="sensorİ">
					<?php 
						$opsiyonsensor=$db->query("SELECT * FROM opsiyon where opsiyonTur='Sensörler' and opsiyonMarka='$gelenMarka'");
			 		?>

					<?php while($op=$opsiyonsensor->fetch()){ ?>

				
				<div>
					<label>
						<p style="font-size: 15px; margin: 20px; color: #ff0000;"><?php echo $op['opsiyonAd']; ?></p>
					</label>

					<br>
					
					<label>
						<p><?php echo $op['opsiyonFiyat']; ?>TL</p>
					</label>
					
					<input style="position: relative; margin: 0 auto;" type="radio" name="sensor" value="<?php echo $op['OpsiyonId']; ?>"></div> <?php } ?>
				<!--Sensör Bilgisi yazdırma-->

					</div>
				</div>

				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<?php } ?>

                <!--Far Işığı Bilgisi yazdırma-->
                <?php 
						$opsiyonFarIsik1=$db->query("SELECT * FROM opsiyon where opsiyonTur='Far Tipi' and opsiyonMarka='$gelenMarka'")->fetch();
			 		?>
			 		<?php if (isset($opsiyonFarIsik1['OpsiyonId'])) { ?>

                <div class="farI">
					<p style="font-size: 35px; margin-top: 100%;">Far Tipi</p>
					<br>
					<div class="farIİ">
					<?php 
						$opsiyonFarIsik=$db->query("SELECT * FROM opsiyon where opsiyonTur='Far Tipi' and opsiyonMarka='$gelenMarka'");
			 		?>

					<?php while($op=$opsiyonFarIsik->fetch()){ ?>

				
				<div style="display: inline-block;">
					<label>
						<p style="font-size: 15px; margin: 20px; color: #ff0000;"><?php echo $op['opsiyonAd']; ?></p>
					</label>

					<br>

					<label>
						<p><?php echo $op['opsiyonFiyat']; ?>TL</p>
					</label>

					<input style="position: relative; margin: 0 auto;" type="radio" name="fartipi" value="<?php echo $op['OpsiyonId']; ?>"></div> <?php } ?>
				<!--Far Işığı Bilgisi yazdırma-->

				</div>
			</div>

			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<?php } ?>

                <!--Koltuk Rengi Bilgisi yazdırma-->
                <?php 
						$opsiyonKoltukRenk1=$db->query("SELECT * FROM opsiyon where opsiyonTur='Koltuk Rengi' and opsiyonMarka='$gelenMarka'")->fetch();
			 		?>
			 		<?php if (isset($opsiyonKoltukRenk1['OpsiyonId'])) { ?>

                <div class="koltukR">
					<p style="font-size: 35px;">Koltuk Rengi</p>
					<br>
					<div class="koltukRİ">
					<?php 
						$opsiyonKoltukRenk=$db->query("SELECT * FROM opsiyon where opsiyonTur='Koltuk Rengi' and opsiyonMarka='$gelenMarka'");
			 		?>

					<?php while($op=$opsiyonKoltukRenk->fetch()){ ?>

				
				<div style="display: inline-block;">
					<label>
						<p style="font-size: 15px; margin: 20px; color: #ff0000;"><?php echo $op['opsiyonAd']; ?></p>
					</label>

					<br>

					<label>
						<p><?php echo $op['opsiyonFiyat']; ?>TL</p>
					</label>

					<input style="position: relative; margin: 0 auto;" type="radio" name="KoltukRenk" value="<?php echo $op['OpsiyonId']; ?>"></div> <?php } ?>
				<!--Koltuk Rengi Bilgisi yazdırma-->

					</div>
				</div>

			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<?php } ?>


                <!--Jant Rengi Bilgisi yazdırma-->
                <?php 
						$opsiyonJantRenk1=$db->query("SELECT * FROM opsiyon where opsiyonTur='Jant Rengi' and opsiyonMarka='$gelenMarka'")->fetch();
			 		?>
			 		<?php  if (isset($opsiyonJantRenk1['OpsiyonId'])) { ?>
                <div class="jantR">
					<p style="font-size: 35px;">Jant Rengi</p>
					<br>
					<div class="jantRİ">
					<?php 
						$opsiyonJantRenk=$db->query("SELECT * FROM opsiyon where opsiyonTur='Jant Rengi' and opsiyonMarka='$gelenMarka'");
			 		?>

					<?php while($op=$opsiyonJantRenk->fetch()){ ?>

				
				<div style="display: inline-block;">
					<label>
					<p style="font-size: 15px; margin: 20px; color: #ff0000;"><?php echo $op['opsiyonAd']; ?></p>
					</label>

					<br>

					<label>
					<p ><?php echo $op['opsiyonFiyat']; ?>TL</p>
					</label>

					<input style="position: relative; margin: 0 auto;" type="radio" name="JantRenk" value="<?php echo $op['OpsiyonId']; ?>"></div> <?php } ?>
                <!--Jant Rengi Bilgisi yazdırma-->

                	</div>
            	</div>

            <br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<?php } ?>

                <!--Led İlave Aydınlatma Bilgisi yazdırma-->
                <?php 
				$opsiyonLed1=$db->query("SELECT * FROM opsiyon where opsiyonTur='Led İlave Aydınlatma' and opsiyonMarka='$gelenMarka'")->fetch();
			 ?>
			 <?php if (isset($opsiyonLed1['OpsiyonId'])) { ?>

                <div class="liab">
					<p style="font-size: 35px;">Led İlave Aydınlatma</p>
				<br>
					<div class="liabİ">
				<?php 
				$opsiyonLed=$db->query("SELECT * FROM opsiyon where opsiyonTur='Led İlave Aydınlatma' and opsiyonMarka='$gelenMarka'");
			 ?>
					<?php while($op=$opsiyonLed->fetch()){ ?>

				
				<div style="display: inline-block;">
					<label>
					<p style="font-size: 15px; margin: 20px; color: #ff0000;"><?php echo $op['opsiyonAd']; ?></p>
					</label>

					<br>

					<label>
						<p><?php echo $op['opsiyonFiyat']; ?>TL</p>
					</label>

					<input style="position: relative; margin: 0 auto;" type="radio" name="Led" value="<?php echo $op['OpsiyonId']; ?>"></div> <?php } ?>
                <!--Led İlave Aydınlatma Bilgisi yazdırma-->

                	</div>
            	</div>

            <br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<?php } ?>

                <!--Ön Tampon Koruması Bilgisi yazdırma-->
                <?php 
						$opsiyonTampon1=$db->query("SELECT * FROM opsiyon where opsiyonTur='Ön Tampon Koruması' and opsiyonMarka='$gelenMarka'")->fetch();
			 		?>
			 		<?php if (isset($opsiyonTampon1['OpsiyonId'])) { ?>

                <div class="otkb">
					<p style="font-size: 35px;">Ön Tampon Koruması</p>
					<br>
					<div class="otkbİ">
					<?php 
						$opsiyonTampon=$db->query("SELECT * FROM opsiyon where opsiyonTur='Ön Tampon Koruması' and opsiyonMarka='$gelenMarka'");
			 		?>

					<?php while($op=$opsiyonTampon->fetch()){ ?>

				
				<div style="display: inline-block;">
					<label>
					<p style="font-size: 15px; margin: 20px; color: #ff0000;"><?php echo $op['opsiyonAd']; ?></p>
					</label>

					<br>

					<label>
						<p><?php echo $op['opsiyonFiyat']; ?>TL</p>
					</label>

					<input style="position: relative; margin: 0 auto;" type="radio" name="Tampon" value="<?php echo $op['OpsiyonId']; ?>"></div> <?php } ?>
                <!--Ön Tampon Koruması Bilgisi yazdırma-->

                	</div>
            	</div>

			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<?php } ?>


                <!--Yedek Lastik Bilgisi yazdırma-->
                <?php 
						$opsiyonLastik1=$db->query("SELECT * FROM opsiyon where opsiyonTur='Yedek Lastik' and opsiyonMarka='$gelenMarka'")->fetch();
			 		?>
			 		<?php if (isset($opsiyonLastik1['OpsiyonId'])) { ?>

                <div class="ylb">
					<p style="font-size: 35px;">Yedek Lastik</p>
					<br>
					<div class="ylbİ">
					<?php 
						$opsiyonLastik=$db->query("SELECT * FROM opsiyon where opsiyonTur='Yedek Lastik' and opsiyonMarka='$gelenMarka'");
			 		?>

					<?php while($op=$opsiyonLastik->fetch()){ ?>

				
				<div style="display: inline-block;">
					<label>
						<p style="font-size: 15px; margin: 20px; color: #ff0000;"><?php echo $op['opsiyonAd']; ?></p>
					</label>

					<br>

					<label>
					<p><?php echo $op['opsiyonFiyat']; ?>TL</p>
					</label>

					<input style="position: relative; margin: 0 auto;" type="radio" name="Lastik" value="<?php echo $op['OpsiyonId']; ?>"></div> <?php } ?>
                <!--Yedek Lastik Bilgisi yazdırma-->

                	</div>
            	</div>

			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<?php } ?>

                <!--Çekiş Demiri Bilgisi yazdırma-->
                <?php 
						$opsiyonCekisDemir1=$db->query("SELECT * FROM opsiyon where opsiyonTur='Çekiş Demiri' and opsiyonMarka='$gelenMarka'")->fetch();
			 		?>
			 		<?php if (isset($opsiyonCekisDemir1['OpsiyonId'])) { ?>

                <div class="cdb">
					<p style="font-size: 35px;">Çekiş Demiri</p>
					<br>
					<div class="cdbİ">
					<?php 
						$opsiyonCekisDemir=$db->query("SELECT * FROM opsiyon where opsiyonTur='Çekiş Demiri' and opsiyonMarka='$gelenMarka'");
			 		?>

					<?php while($op=$opsiyonCekisDemir->fetch()){ ?>

				
				<div style="display: inline-block;">
					<label>
					<p style="font-size: 15px; color: #ff0000;"><?php echo $op['opsiyonAd']; ?></p>
					</label>

					<br>

					<label>
						<p style=" margin: 20px;"><?php echo $op['opsiyonFiyat']; ?>TL</p>
					</label>

					<input style="position: relative; margin: 0 auto;" type="radio" name="CekisDemir" value="<?php echo $op['OpsiyonId']; ?>"></div> <?php } ?>
                <!--Çekiş Demiri Bilgisi yazdırma-->

                	</div>
            	</div>
				
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<?php } ?>

				<br>
				<!--Butonlar-->
				<div class="US">
					<input style="height: 50px;" class="buttonFiyat" type="submit" name="kaydet" value="Uygula">
					<input style="height: 50px;" class="buttonFiyat" type="reset" value="Sıfırla">
				</div>
				<!--Butonlar-->
				<input type="hidden" name="i" value="<?php echo $gelenMarka  ?>">
				<input type="hidden" name="a" value="<?php echo $gelentablo  ?>">
				<input type="hidden" name="e" value="<?php echo $gelenModel ?>">
						<div class="container20">
				<div class="col20">
					<?php 

					if(isset($renkad)) {
						
					}else{
						$renkad=$ilkrenk;
					}

					if (isset($renkad)) {
						$renk=$renkad;
					}else{
						$renk=$ilkrenk;
					}

					if (isset($jantId)) {
						$opsiyon1=$jantId;
					}else{
						$opsiyon1="bos";
					}

					if (isset($sanrufId)) {
						$opsiyon2=$sanrufId;
					}else{
						$opsiyon2="bos";
					}

					if (isset($camId)) {
						$opsiyon3=$camId;
					}else{
						$opsiyon3="bos";
					}

					if (isset($koltukId)) {
						$opsiyon4=$koltukId;
					}else{
						$opsiyon4="bos";
					}
					

					if (isset($farId)) {
						$opsiyon5=$farId;
					}else{
						$opsiyon5="bos";
					}
					if (isset($sensorId)) {
						$opsiyon6=$sensorId;
					}else{
						$opsiyon6="bos";
					}

					if (isset($FarIsikId)) {
						$opsiyon7=$FarIsikId;
					}else{
						$opsiyon7="bos";
					}

					if (isset($KoltukRenkId)) {
						$opsiyon8=$KoltukRenkId;
					}else{
						$opsiyon8="bos";
					}

					if (isset($JantRenkId)) {
						$opsiyon9=$JantRenkId;
					}else{
						$opsiyon9="bos";
					}

					if (isset($LedId)) {
						$opsiyon10=$LedId;
					}else{
						$opsiyon10="bos";
					}

					if (isset($TamponId)) {
						$opsiyon11=$TamponId;
					}else{
						$opsiyon11="bos";
					}

					if (isset($LastikId)) {
						$opsiyon12=$LastikId;
					}else{
						$opsiyon12="bos";
					}

					if (isset($CekisDemirId)) {
						$opsiyon13=$CekisDemirId;
					}else{
						$opsiyon13="bos";
					}





					 ?>

</section>
						
						<br>
						<br>
						<br>
					 	<hr style="width: 80%;">
					 	<br>
					 	<br>
					 	<br>



			</div>
				<div class="col20">

		

			
		<p style="text-align: center;"><?php if ($cek['Stok']==0) {
				echo "Araç Stoğu Bulunmamaktadır.";//stok 0 ise yazdır
			} ?></p>
			<br>
		<p style="text-align: center;">Fiyatlarımız ÖTV KDV dahildir.</p>
		<br>
				</div>
			</div>
		</div>


	</section>
	</form>

<div style="height: 100px;width: 100%;background-color: #8b0000;position: fixed;bottom:0px;">

	<div class="container2bttnn">

		<div style="position: relative;margin-left:6%;" class="col50">
		<label style="position: relative; max-width: 80%;" class="col7bttnn">
				<h6 style="color: #0f0f0f; font-size: 15px;">Fiyat</h6>
				<h5 style="font-size: 30px;"><?php $x = number_format($cek['Fiyat'], 2, ',', '.'); echo $x ?>TL</h5><!--fiyat bilgisi-->
		</label>
		</div>
	


	<!--Yeni Para yazdırma-->
	<?php if ($yenipara>0) {?>
					<div class="col50">
				<label style=" max-width: 80%;" class="col7bttnn2">
					<h6 style="color: #0f0f0f; font-size: 15px;">Opsiyonların Fiyatı</h6>
					<h5 style="font-size: 30px;"><?php $x = number_format($opsiyonpara, 2, ',', '.'); echo $x ?>TL</h5><!--fiyat bilgisi-->
				</label>
			</div>
	

	<?php } ?>
	<!--Yeni Para yazdırma-->
		<!--opsiyon Para yazdırma-->
	<?php if ($yenipara>0) {?>
		
			<div class="col50">
			<label style=" max-width: 80%;" class="col7bttnn22">
				<h6 style="color: #0f0f0f; font-size: 15px;">Toplam Fiyat</h6>
				<h5 style="font-size: 30px;"><?php $x = number_format($yenipara, 2, ',', '.'); echo $x ?>TL</h5><!--fiyat bilgisi-->
			</label>
			</div>
		

	<?php } ?>
	<!--opsiyon Para yazdırma-->
		<div style="position: relative; margin-top:2%;margin-left: 15%" class="col50">
			<label>

					<a <?php
					if ($yenipara>$cek['Fiyat']) {
						$fiyat=$yenipara;
					}else{
						$fiyat=$cek['Fiyat'];
					}


					
					 if ($cek['Stok']<=0) {
						echo 'style="cursor:not-allowed;"';//stok yoksa imleci değiştir
					}else{
						echo "href='odemebilgi.php?fiyat=$fiyat&marka=$gelenMarka&model=$gelenModel&tablo=$gelentablo&renk=$renk&opsiyon1=$opsiyon1&opsiyon2=$opsiyon2&opsiyon3=$opsiyon3&opsiyon4=$opsiyon4&opsiyon5=$opsiyon5&opsiyon6=$opsiyon6&opsiyon7=$opsiyon7&opsiyon8=$opsiyon8&opsiyon9=$opsiyon9&opsiyon10=$opsiyon10&opsiyon11=$opsiyon11&opsiyon12=$opsiyon12&opsiyon13=$opsiyon13'";
					} ?>  class="buttonFiyat2" title="Linke gitmek için tıklayınız">Satın Al</a><!--Stok varsa link ver-->
					</label>
				</div>



	</div>
</div>

 <?php 
include "footer.php";
  ?>