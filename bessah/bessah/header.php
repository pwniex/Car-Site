<?php 
include "baglan.php";
 ?>

<!-- HEADER -->

<!DOCTYPE html>
<html lang="tr">
<head>

	<meta charset="UTF-8">
	<meta name="description" content="<?php echo $ck1['ayar_aciklama']; ?>"> <!-- Açıklama Bölümü -->
	<meta name="author" content="KTUN_P6"> 			<!-- Yazar Bölümü -->
	<meta name="keywords" content="<?php echo $ck1['ayar_anahtar']; ?>">		<!-- Site ile İlgili Anahtar Kelimeler -->
	<meta name="viewport" content="width-device-width, initial-scale-1.0">  <!-- Görüntü alanı -->

	<title><?php echo $ck1['ayar_baslik'];?></title> <!-- Üst linkte yer alan yazı -->
	<link rel="shortcut icon" href="img/logo.ico"> <!-- üst link logo resmi -->

	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> <!-- Sosyal medya iconları için -->
	<link rel="stylesheet" type="text/css" href="css/reset.css">			<!-- web browser css stilini kaldırmak için -->
	<link rel="stylesheet" type="text/css" href="css/main.css">	
	<link rel="stylesheet" type="text/css" href="css/yeni.css">			<!-- kendi css ayarlarımız -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script src="https://kit.fontawesome.com/766f3d27dc.js" crossorigin="anonymous"></script> <!-- Sosyal medya iconları için -->

</head>
<body>

<header>
	
	<!-- MENÜ -->

	<div class="container">
		<div class="logo">
			<a href="index.php"><img src="img/logo.png"></a>
		</div>
            <div style="z-index: 1;" class="order">
                <ul class="menu cf">
                    <li><a href="index.php">ANASAYFA</a></li>
                    <li><a href="kategori.php">Araç Galerisi</a></li>
                    <li><a href="hakkimizda.php">Hakkımızda</a></li>
                    <li><a href="iletisim.php">İletişim</a></li>
                </ul>    
            </div>
    </div>
            

</header>
