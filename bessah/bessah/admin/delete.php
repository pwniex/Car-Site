<?php
	include "baglan.php";
	
	
		$ad=$_GET["ad"];
		$sql="DELETE FROM kullanici WHERE kullanici_id='$ad'";
		$sonuc=mysqli_query($db,$sql);
		if ($sonuc==1)
		{
		    header('Location:insankaynaklari.php?del=ok');
		}
		else
		{
			header('Location:insankaynaklari.php?del=no');
		}
		

	


?>