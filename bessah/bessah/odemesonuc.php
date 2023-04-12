 <?php
	ob_start();
 ?>
<?php

include"header.php";

?>
<?php  

	
$marka=$_POST["marka"];//marka ismi
$model=$_POST["model"];//model ismi
$fiyat=$_POST["fiyat"];//fiyat çekimi
$renk=$_POST["renk"];


$opsiyon1=$_POST["opsiyon1"];
$opsiyon1=$db->query("SELECT * FROM opsiyon where OpsiyonId='$opsiyon1' ")->fetch();
$opsiyon1ad=$opsiyon1['opsiyonAd'];

if (empty($opsiyon1ad)) {
	$opsiyon1ad="Yok";
}

$opsiyon2=$_POST["opsiyon2"];
$opsiyon2=$db->query("SELECT * FROM opsiyon where OpsiyonId='$opsiyon2' ")->fetch();
$opsiyon2ad=$opsiyon2['opsiyonAd'];

if (empty($opsiyon2ad)) {
	$opsiyon2ad="Yok";
}

$opsiyon3=$_POST["opsiyon3"];
$opsiyon3=$db->query("SELECT * FROM opsiyon where OpsiyonId='$opsiyon3' ")->fetch();
$opsiyon3ad=$opsiyon3['opsiyonAd'];

if (empty($opsiyon3ad)) {
	$opsiyon3ad="Yok";
}

$opsiyon4=$_POST["opsiyon4"];
$opsiyon4=$db->query("SELECT * FROM opsiyon where OpsiyonId='$opsiyon4' ")->fetch();
$opsiyon4ad=$opsiyon4['opsiyonAd'];

if (empty($opsiyon4ad)) {
	$opsiyon4ad="Yok";
}

$opsiyon5=$_POST["opsiyon5"];
$opsiyon5=$db->query("SELECT * FROM opsiyon where OpsiyonId='$opsiyon5' ")->fetch();
$opsiyon5ad=$opsiyon5['opsiyonAd'];

if (empty($opsiyon5ad)) {
	$opsiyon5ad="Yok";
}

$opsiyon6=$_POST["opsiyon6"];
$opsiyon6=$db->query("SELECT * FROM opsiyon where OpsiyonId='$opsiyon6' ")->fetch();
$opsiyon6ad=$opsiyon6['opsiyonAd'];

if (empty($opsiyon6ad)) {
	$opsiyon6ad="Yok";
}

$opsiyon7=$_POST["opsiyon7"];
$opsiyon7=$db->query("SELECT * FROM opsiyon where OpsiyonId='$opsiyon7' ")->fetch();
$opsiyon7ad=$opsiyon7['opsiyonAd'];

if (empty($opsiyon7ad)) {
	$opsiyon7ad="Yok";
}

$opsiyon8=$_POST["opsiyon8"];
$opsiyon8=$db->query("SELECT * FROM opsiyon where OpsiyonId='$opsiyon8' ")->fetch();
$opsiyon8ad=$opsiyon8['opsiyonAd'];

if (empty($opsiyon8ad)) {
	$opsiyon8ad="Yok";
}

$opsiyon9=$_POST["opsiyon9"];
$opsiyon9=$db->query("SELECT * FROM opsiyon where OpsiyonId='$opsiyon9' ")->fetch();
$opsiyon9ad=$opsiyon9['opsiyonAd'];

if (empty($opsiyon9ad)) {
	$opsiyon9ad="Yok";
}

$opsiyon10=$_POST["opsiyon10"];
$opsiyon10=$db->query("SELECT * FROM opsiyon where OpsiyonId='$opsiyon10' ")->fetch();
$opsiyon10ad=$opsiyon10['opsiyonAd'];

if (empty($opsiyon10ad)) {
	$opsiyon10ad="Yok";
}

$opsiyon11=$_POST["opsiyon10"];
$opsiyon11=$db->query("SELECT * FROM opsiyon where OpsiyonId='$opsiyon11' ")->fetch();
$opsiyon11ad=$opsiyon11['opsiyonAd'];

if (empty($opsiyon11ad)) {
	$opsiyon11ad="Yok";
}

$opsiyon12=$_POST["opsiyon12"];
$opsiyon12=$db->query("SELECT * FROM opsiyon where OpsiyonId='$opsiyon12' ")->fetch();
$opsiyon12ad=$opsiyon12['opsiyonAd'];

if (empty($opsiyon12ad)) {
	$opsiyon12ad="Yok";
}

$opsiyon13=$_POST["opsiyon13"];
$opsiyon13=$db->query("SELECT * FROM opsiyon where OpsiyonId='$opsiyon13' ")->fetch();
$opsiyon13ad=$opsiyon13['opsiyonAd'];

if (empty($opsiyon13ad)) {
	$opsiyon13ad="Yok";
}



?>


<?php 
//değişkenleri tanımlıyoruz
	$adsoyad=$_POST["adsoyad"];
	$telnumara=$_POST["telnumara"];
	$eposta=$_POST["e-posta"];
	$kartisim=$_POST["kartisim"];
	$kartno=$_POST["kartno"];
	$ay=$_POST["ay"];
	$yil=$_POST["yil"];
	$guvenlikkod=$_POST["guvenlikkod"];
	$tablo=$_POST["tablo"];
	$showroom=$_POST["showroom"];
	$adet=1;

//araç satışını satis tablosuna ekleme sorgusu
	$Ekle1=$db->prepare('INSERT INTO satis(isimsoyisim,tel,eposta,kartismi,kartnumarası,kartay,kartyil,guvenlikkod,marka,model,kategori,showroom,fiyat,adet,renk,opsiyon1,opsiyon2,opsiyon3,opsiyon4,opsiyon5,opsiyon6,opsiyon7,opsiyon8,opsiyon9,opsiyon10,opsiyon11,opsiyon12,opsiyon13)  VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
	$Ekle1->bindParam(1, $adsoyad);
	$Ekle1->bindParam(2, $telnumara);
	$Ekle1->bindParam(3, $eposta);
	$Ekle1->bindParam(4, $kartisim);
	$Ekle1->bindParam(5, $kartno);
	$Ekle1->bindParam(6, $ay);
	$Ekle1->bindParam(7, $yil);
	$Ekle1->bindParam(8, $guvenlikkod);
	$Ekle1->bindParam(9, $marka);
	$Ekle1->bindParam(10, $model);
	$Ekle1->bindParam(11, $tablo);
	$Ekle1->bindParam(12, $showroom);
	$Ekle1->bindParam(13,$fiyat);
	$Ekle1->bindParam(14,$adet);
	$Ekle1->bindParam(15,$renk);
	$Ekle1->bindParam(16,$opsiyon1ad);
	$Ekle1->bindParam(17,$opsiyon2ad);
	$Ekle1->bindParam(18,$opsiyon3ad);
	$Ekle1->bindParam(19,$opsiyon4ad);
	$Ekle1->bindParam(20,$opsiyon5ad);
	$Ekle1->bindParam(21,$opsiyon6ad);
	$Ekle1->bindParam(22,$opsiyon7ad);
	$Ekle1->bindParam(23,$opsiyon8ad);
	$Ekle1->bindParam(24,$opsiyon9ad);
	$Ekle1->bindParam(25,$opsiyon10ad);
	$Ekle1->bindParam(26,$opsiyon11ad);
	$Ekle1->bindParam(27,$opsiyon12ad);
	$Ekle1->bindParam(28,$opsiyon13ad);
	$Ekle1->execute();

		
$al=$db->query("SELECT * FROM $tablo WHERE model='$model'")->fetch();
	$yenistok=$al['Stok']-1;//stok eksiltme



$guncelle = $db->prepare("UPDATE $tablo SET stok = ? WHERE Model = ?");//stok güncelleme
    $guncelle->bindParam(1, $yenistok);
    $guncelle->bindParam(2, $model);
    $guncelle->execute();

   if ($guncelle->rowCount() > 0) 
    {
        header("Location: odemebitis.php");
		exit;
    }
    else {
      echo "Güncelleme Hatası";
    }



 ?>


