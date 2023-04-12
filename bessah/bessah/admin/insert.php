<?php
include "baglan.php";
	if(isset($_POST['insert']))
	{
		$kadi=$_POST['kullanici_isim'];
		$kid=$_POST['kullanici_adi'];
		$ksifre=$_POST['kullanici_sifre'];
		$kategori=$_POST['kategori'];

			$sql="INSERT INTO kullanici(kullanici_isim,kullanici_adi,kullanici_sifre,kullanici_poz) values 	('".$kadi."','".$kid."','".$ksifre."','".$kategori."')";  
			$sonuc=mysqli_query($db,$sql);

			if ($sonuc==1)
			{	
    			header("Location:personel.php?insert=ok");
    		}
    		else
    		{
    			header("Location:personel.php?insert=no");
    		}
	}
	?>