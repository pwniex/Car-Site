<?php
include "baglan.php";		
	if(isset($_POST["login"]))
	{
		$kullanici_adi=$_POST['kadi'];
		$kullanici_sifre=$_POST['sifre'];


			$sorgu="SELECT * FROM kullanici WHERE kullanici_adi='$kullanici_adi' and kullanici_sifre='$kullanici_sifre'";
			$res=mysqli_query($db,$sorgu);
			$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
			if(mysqli_num_rows($res)==1)
			{
				$_SESSION['kullanici_isim']=$row['kullanici_isim'];
				$_SESSION['kullanici_poz']=$row['kullanici_poz'];
				$_SESSION['kadi']=$kullanici_adi;
				$_SESSION['sifre']=$kullanici_Sifre;
				header('Location:index.php?login=ok');

			}
			else
			{
				
				header('Location:login2.php?login=no');
			}
			
	}?>