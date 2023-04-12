<?php 
include "baglan.php";
   if(!isset($_SESSION['kadi']))
        {
            header('Location:login2.php');
            
        }

	if($_SESSION['kullanici_poz']=="Admin")
	{


		if(isset($_POST["ayarkaydet"]))
		{

	 		$id=1;
			$ayarkaydet = "UPDATE ayar SET ayar_baslik='".mysqli_real_escape_string($db, $_POST['ayar_baslik'])."',           
	             ayar_anahtar='".mysqli_real_escape_string($db,$_POST['ayar_anahtar'])."',
	             ayar_aciklama='".mysqli_real_escape_string($db, $_POST['ayar_aciklama'])."',
	             ayar_url='".mysqli_real_escape_string($db, $_POST['ayar_url'])."'";

		}

			if($db->query($ayarkaydet) === true)
			{ 
				header("Location:ayarlar.php?durum=ok"); 
			}
			else
			{
	 			header("Location:ayarlar.php?durum=no"); 
			}

	}
	else
	{	
		
		
		echo "<script type='text/javascript'>alert('Sayın ".$_SESSION['kullanici_isim']." bu yetkiye sahip değilsiniz.');window.location.href = 'ayarlar.php';</script>";

		
	}
	?>