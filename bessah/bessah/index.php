<?php

include"header.php";

?>

<!-- ANASAYFA -->


<div class="slider-ana"><!-- Slider--> 
    <div class="slider-content-ana">
        <div class="slider-item-ana">
            <img  src="img/mainSlider1.jpg">
        </div>
        <div class="slider-item-ana">
            <img  src="img/mainSlider2.jpg">
        </div>
        <div class="slider-item-ana">
            <img  src="img/mainSlider3.jpg">
        </div>
        <div class="slider-item-ana">
            <img  src="img/mainSlider4.jpg">
        </div>
        <div class="slider-item-ana">
            <img  src="img/mainSlider5.jpg">
        </div>
    </div>
</div>

</section>

<!-- ÖN GÖSTERİM -->

<section id="preview" class="sectionArea"> <!-- class açma sebebi-> fotoğraflar ve altındaki başlıklar arasında boşluk yaratmak için -->
<div class="previewTop">
	<h2 class="sectionHeader">Ön Gösterim</h2> <!-- başlık bölümünde aynı tür tasarım kullanacağı için class ismi verildi -->
	<!--<p>Bu ve benzeri daha bir çok aracaımıza <a href="showroom.php" style="color: #fff; text-decoration: none;">Showroom'lar</a> bölümünden bakabilirsiniz.
	</p>-->
</div>
<div class="previewBody">
	<div class="container">
		<?php 
		$vericek = $db->query("SELECT * FROM ongosterim ", PDO::FETCH_ASSOC);
		foreach($vericek as $row)
		{	
			$marka=$row['gosteri_model'];
			$res=$row['gosteri_resim'];
			$aciklama=$row['gosteri_aciklama'];
			$model=$row['gosteri_marka'];
			$kategori=$row['gosteri_kategori'];
		

		echo "<div class='col3'>
			<div class='item'>
				<div class='zoom'>
					<img src='ongosterim/$res'>
				</div>
				<div class='itemText'>
					<h3>".$model." ".$marka."</h3>
					<p>$aciklama</p>
					<a href='profil.php?i=$model&a=$kategori&e=$marka' class='btnİncele'>Git</a>
				</div>
			</div>
		</div>";}
 ?>
		
	</div>
</div>

</section>

<!-- PARALLAX -->

<section id="parallax" class="parallaxArea">

	<div class="parallaxTop">
	<br>
		<br>
		<br>
		<br>
		<a href="kategori.php"><button class="parallaxBtn">Araçları Keşfet</button></a>
        <br>
        <br>
		<p>Binek, SUV, Spor, Elektrikli ve Offroad araçlarımızla tanışın</p>
	</div>	
	</div>



</section>



        <br>
        <br>
<?php 

include"footer.php";

?>