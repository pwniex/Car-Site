<?php
include "baglan.php";?>
<?php 
	if($_SESSION['kullanici_poz']=="Admin" || $_SESSION['kullanici_poz']=="Personel")
	{


		if(isset($_POST["opsiyon"]))
		{
			$opsiyonMarka=$_POST['opsiyonMarka'];
			$opsiyonAd=$_POST['opsiyonAd'];
			$opsiyonFiyat=$_POST['opsiyonFiyat'];
			$opsiyonTur=$_POST['opsiyonTur'];
			
				$sql="INSERT INTO opsiyon (opsiyonAd,opsiyonMarka,opsiyonTur,opsiyonFiyat) values ('$opsiyonAd','$opsiyonMarka','$opsiyonTur','$opsiyonFiyat')";  
				$sonuc=mysqli_query($db,$sql);
						if($sonuc==1)
						{	
			    			header("Location:opsiyon.php?opsiyon=ok");
			    		}
			    		else
			    		{
			    			header("Location:opsiyon.php?opsiyon=no");
			    		}
		}
	}
?>