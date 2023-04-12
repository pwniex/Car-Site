<?php 
	include "baglan.php";

	

		if(isset($_POST["yol1"]))
		{
			$id=1;
			$yol1 = "UPDATE ongosterim SET gosteri_resim='".mysqli_real_escape_string($db, $_POST['gosterim_resim'])."',           
	            gosteri_model='".mysqli_real_escape_string($db,$_POST['gosterim_model'])."',
	            gosteri_aciklama='".mysqli_real_escape_string($db, $_POST['gosterim_aciklama'])."',
	            gosteri_marka='".mysqli_real_escape_string($db, $_POST['gosterim_marka'])."',
	            gosteri_kategori='".mysqli_real_escape_string($db, $_POST['kategori'])."'
	             WHERE gosteri_id=1";

		

			if($db->query($yol1) === true)
			{ 
				header("Location:birinciresim.php?yolla=ok"); 
			}
			else
			{
	 			header("Location:birinciresim.php?yolla=no"); 
			}
		}
		elseif(isset($_POST["yol2"]))
		{
			$id=1;
			$yol2 = "UPDATE ongosterim SET gosteri_resim='".mysqli_real_escape_string($db, $_POST['gosterim_resim'])."',           
	            gosteri_model='".mysqli_real_escape_string($db,$_POST['gosterim_model'])."',
	            gosteri_aciklama='".mysqli_real_escape_string($db, $_POST['gosterim_aciklama'])."',
	            gosteri_marka='".mysqli_real_escape_string($db, $_POST['gosterim_marka'])."',
	            gosteri_kategori='".mysqli_real_escape_string($db, $_POST['kategori'])."'
	             WHERE gosteri_id=2";

		

			if($db->query($yol2) === true)
			{ 
				header("Location:ikinciresim.php?yolla2=ok"); 
			}
			else
			{
	 			header("Location:ikinciresim.php?yolla2=no"); 
			}
		}
		elseif(isset($_POST["yol3"]))
		{
			$id=1;
			$yol3 = "UPDATE ongosterim SET gosteri_resim='".mysqli_real_escape_string($db, $_POST['gosterim_resim'])."',           
	            gosteri_model='".mysqli_real_escape_string($db,$_POST['gosterim_model'])."',
	            gosteri_aciklama='".mysqli_real_escape_string($db, $_POST['gosterim_aciklama'])."',
	            gosteri_marka='".mysqli_real_escape_string($db, $_POST['gosterim_marka'])."',
	            gosteri_kategori='".mysqli_real_escape_string($db, $_POST['kategori'])."'
	             WHERE gosteri_id=3";

		

			if($db->query($yol3) === true)
			{ 
				header("Location:ucuncuresim.php?yolla3=ok"); 
			}
			else
			{
	 			header("Location:ucuncuresim.php?yolla3=no"); 
			}
		}

	?>