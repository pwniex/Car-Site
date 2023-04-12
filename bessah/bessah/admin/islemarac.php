<?php
include "baglan.php";
	if($_SESSION['kullanici_poz']=="Admin" || $_SESSION['kullanici_poz']=="Personel")
	{


		if(isset($_POST["car"]))
		{
			$Resim=$_POST['Resim'];
			$marka=$_POST['Marka'];
			$model=$_POST['Model'];
			$renk=$_POST['Renk'];
			$motorhacmi=$_POST['MotorHacmi'];
			$vitest=$_POST['Vites'];
			$kapi=$_POST['Kapi'];
			$uretimyili=$_POST['UretimYili'];
			$yakit=$_POST['YakitTipi'];
			$yakittuketimi=$_POST['YakitTuketimi'];
			$cekis=$_POST['Cekis'];
			$stok=$_POST['Stok'];
			$Showroom=$_POST['Showroom'];
			$fiyat=$_POST['Fiyat'];
			$kategori=$_POST['kategori'];

			if($kategori=="suv")
			{
					$sql="INSERT INTO suv (Resim,Marka,Model,Renk,MotorHacmi,Vites,Kapi,UretimYili,YakitTipi,Cekis,YakitTuketimi,Showroom,Stok,Fiyat) values ('$Resim','$marka','$model','$renk','$motorhacmi','$vitest','$kapi','$uretimyili','$yakit','$cekis','$yakittuketimi','$Showroom','$stok','$fiyat')";  
					$sonuc=mysqli_query($db,$sql);
						if($sonuc==1)
						{	
			    			header("Location:aracekle.php?car=ok");

								$dizin = '../araclar/suv';
								$yuklenecek_dosya = $dizin . basename($_FILES['dosya']['name']);
								$dizin1 = '../img/profil/suv';
								$yuklenecek_dosya1 = $dizin1 . basename($_FILES['dosya1']['name']);
								 
								if (move_uploaded_file($_FILES['dosya']['tmp_name'], $yuklenecek_dosya))
								{
									if(isset($model))
									{
										rename($yuklenecek_dosya,"../araclar/suv/".$model.".jpg");
									}
									
								}
								if (move_uploaded_file($_FILES['dosya1']['tmp_name'], $yuklenecek_dosya1))
								{
									if(isset($model))
									{
										rename($yuklenecek_dosya1,"../img/profil/suv/".$model.".jpg");
									}
								}

			    		}
			    		else
			    		{
			    			header("Location:aracekle.php?car=no");
			    		}

			}
			elseif ($kategori=="binek") 
			{
				$sql="INSERT INTO binek (Resim,Marka,Model,Renk,MotorHacmi,Vites,Kapi,UretimYili,YakitTipi,Cekis,YakitTuketimi,Showroom,Stok,Fiyat) values ('$Resim','$marka','$model','$renk','$motorhacmi','$vitest','$kapi','$uretimyili','$yakit','$cekis','$yakittuketimi','$Showroom','$stok','$fiyat')";
				$sonuc=mysqli_query($db,$sql);
					if ($sonuc==1)
				{	
	    			header("Location:aracekle.php?car=ok");

								$dizin = '../araclar/binek';
								$yuklenecek_dosya = $dizin . basename($_FILES['dosya']['name']);
								$dizin1 = '../img/profil/binek';
								$yuklenecek_dosya1 = $dizin1 . basename($_FILES['dosya1']['name']);
								 
								if (move_uploaded_file($_FILES['dosya']['tmp_name'], $yuklenecek_dosya))
								{
									if(isset($model))
									{
										rename($yuklenecek_dosya,"../araclar/binek/".$model.".jpg");
									}
									
								}
								if (move_uploaded_file($_FILES['dosya1']['tmp_name'], $yuklenecek_dosya1))
								{
									if(isset($model))
									{
										rename($yuklenecek_dosya1,"../img/profil/binek/".$model.".jpg");
									}
								}

	    		}
	    		else
	    		{
	    			header("Location:aracekle.php?car=no");
	    		}
			}
			elseif ($kategori=="spor") 
			{
				$sql="INSERT INTO spor (Resim,Marka,Model,Renk,MotorHacmi,Vites,Kapi,UretimYili,YakitTipi,Cekis,YakitTuketimi,Showroom,Stok,Fiyat) values ('$Resim','$marka','$model','$renk','$motorhacmi','$vitest','$kapi','$uretimyili','$yakit','$cekis','$yakittuketimi','$Showroom','$stok','$fiyat')";
				$sonuc=mysqli_query($db,$sql);
					if ($sonuc==1)
				{	
	    			header("Location:aracekle.php?car=ok");
	    						$dizin = '../araclar/spor';
								$yuklenecek_dosya = $dizin . basename($_FILES['dosya']['name']);
								$dizin1 = '../img/profil/spor';
								$yuklenecek_dosya1 = $dizin1 . basename($_FILES['dosya1']['name']);
								 
								if (move_uploaded_file($_FILES['dosya']['tmp_name'], $yuklenecek_dosya))
								{
									if(isset($model))
									{
										rename($yuklenecek_dosya,"../araclar/spor/".$model.".jpg");
									}
									
								}
								if (move_uploaded_file($_FILES['dosya1']['tmp_name'], $yuklenecek_dosya1))
								{
									if(isset($model))
									{
										rename($yuklenecek_dosya1,"../img/profil/spor/".$model.".jpg");
									}
								}

	    		}
	    		else
	    		{
	    			header("Location:aracekle.php?car=no");
	    		}
			}
			elseif ($kategori=="offroad") 
			{
				$sql="INSERT INTO offroad (Resim,Marka,Model,Renk,MotorHacmi,Vites,Kapi,UretimYili,YakitTipi,Cekis,YakitTuketimi,Showroom,Stok,Fiyat) values ('$Resim','$marka','$model','$renk','$motorhacmi','$vitest','$kapi','$uretimyili','$yakit','$cekis','$yakittuketimi','$Showroom','$stok','$fiyat')";
				$sonuc=mysqli_query($db,$sql);
					if ($sonuc==1)
				{	
	    			header("Location:aracekle.php?car=ok");
	    						$dizin = '../araclar/offroad';
								$yuklenecek_dosya = $dizin . basename($_FILES['dosya']['name']);
								$dizin1 = '../img/profil/offroad';
								$yuklenecek_dosya1 = $dizin1 . basename($_FILES['dosya1']['name']);
								 
								if (move_uploaded_file($_FILES['dosya']['tmp_name'], $yuklenecek_dosya))
								{
									if(isset($model))
									{
										rename($yuklenecek_dosya,"../araclar/offroad/".$model.".jpg");
									}
									
								}
								if (move_uploaded_file($_FILES['dosya1']['tmp_name'], $yuklenecek_dosya1))
								{
									if(isset($model))
									{
										rename($yuklenecek_dosya1,"../img/profil/offroad/".$model.".jpg");
									}
								}

	    		}
	    		else
	    		{
	    			header("Location:aracekle.php?car=no");
	    		}
			}
			elseif ($kategori=="elektrikli") 
			{
				$sql="INSERT INTO elektrikli (Resim,Marka,Model,Renk,MotorHacmi,Vites,Kapi,UretimYili,YakitTipi,Cekis,YakitTuketimi,Showroom,Stok,Fiyat) values ('$Resim','$marka','$model','$renk','$motorhacmi','$vitest','$kapi','$uretimyili','$yakit','$cekis','$yakittuketimi','$Showroom','$stok','$fiyat')";
				$sonuc=mysqli_query($db,$sql);
					if ($sonuc==1)
				{	
	    			header("Location:aracekle.php?car=ok");
	    						$dizin = '../araclar/elektrikli';
								$yuklenecek_dosya = $dizin . basename($_FILES['dosya']['name']);
								$dizin1 = '../img/profil/elektrikli';
								$yuklenecek_dosya1 = $dizin1 . basename($_FILES['dosya1']['name']);
								 
								if (move_uploaded_file($_FILES['dosya']['tmp_name'], $yuklenecek_dosya))
								{
									if(isset($model))
									{
										rename($yuklenecek_dosya,"../araclar/elektrikli/".$model.".jpg");
									}
									
								}
								if (move_uploaded_file($_FILES['dosya1']['tmp_name'], $yuklenecek_dosya1))
								{
									if(isset($model))
									{
										rename($yuklenecek_dosya1,"../img/profil/elektrikli/".$model.".jpg");
									}
								}

	    		}
	    		else
	    		{
	    			header("Location:aracekle.php?car=no");
	    		}
			}
        }
	}
	else
	{	
		
		
		echo "<script type='text/javascript'>alert('Sayın ".$_SESSION['kullanici_isim']." bu yetkiye sahip değilsiniz.');window.location.href = 'ayarlar.php';</script>";	
	}
	
?>