
<?php

	if (empty($_GET["marka"])) {
		$marka="Marka";
	}else{
		$marka=$_GET["marka"];
		$marka="'$marka'";
	}


	if (empty($_GET["model"])) {
		$model="Model";
	}else{
		$model=$_GET["model"];
		$model="'$model'";

	}
//--------------------------Renk Alanı-----------------------------------//
	if (isset($_GET["renk1"])) {
		$renk1=$_GET["renk1"];
	}else{
		$renk1="1";
	}

	if (isset($_GET["renk2"])) {
		$renk2=$_GET["renk2"];
	}else{
		$renk2="1";
	}

	if (isset($_GET["renk3"])) {
		$renk3=$_GET["renk3"];
	}else{
		$renk3="1";
	}

	if (isset($_GET["renk4"])) {
		$renk4=$_GET["renk4"];
	}else{
		$renk4="1";
	}

	if (isset($_GET["renk5"])) {
		$renk5=$_GET["renk5"];
	}else{
		$renk5="1";
	}

	if (isset($_GET["renk6"])) {
		$renk6=$_GET["renk6"];
	}else{
		$renk6="1";
	}



	if ($renk1=="1" && $renk2=="1" && $renk3=="1" && $renk4=="1" && $renk5=="1" && $renk6=="1") {
   		$renk1="Beyaz";
   		$renk2="Gri";
   		$renk3="Kırmızı";
   		$renk4="Mavi";
   		$renk5="Turuncu";
   		$renk6="Siyah";
   		
   		
 }




//--------------------------Renk Alanı-----------------------------------//



//--------------------------Fİyat Alanı-----------------------------------//


$fiyatmin=$_GET["fiyatmin"];
$fiyatmax=$_GET["fiyatmax"];

	if ($fiyatmin=="") {
		$fiyatmin="0";
	}
	if ($fiyatmax=="") {
		$fiyatmax="1000000000000";
	}




//--------------------------Fİyat Alanı-----------------------------------//
//--------------------------Fİyat Alanı-----------------------------------//


$yilmin=$_GET["yilmin"];
$yilmax=$_GET["yilmax"];

	if ($yilmin=="") {
		$yilmin="0";
	}
	if ($yilmax=="") {
		$yilmax="2022";
	}




//--------------------------Fİyat Alanı-----------------------------------//



//--------------------------Hacim Alanı-----------------------------------//
	if (isset($_GET["hacim1"])) {
		$hacim1=$_GET["hacim1"];
	}else{
		$hacim1="2";
	}

   if (isset($_GET["hacim2"])) {
      $hacim2=$_GET["hacim2"];
   }else{
      $hacim2="2";
   }
   if (isset($_GET["hacim3"])) {
      $hacim3=$_GET["hacim3"];
   }else{
      $hacim3="2";
   }
   if (isset($_GET["hacim4"])) {
      $hacim4=$_GET["hacim4"];
   }else{
      $hacim4="2";
   }
   if (isset($_GET["hacim5"])) {
      $hacim5=$_GET["hacim5"];
   }else{
      $hacim5="2";
   }
   if (isset($_GET["hacim6"])) {
      $hacim6=$_GET["hacim6"];
   }else{
      $hacim6="2";
   }
   if (isset($_GET["hacim7"])) {
      $hacim7=$_GET["hacim7"];
   }else{
      $hacim7="2";
   }
   if (isset($_GET["hacim8"])) {
      $hacim8=$_GET["hacim8"];
   }else{
      $hacim8="2";
   }
   if (isset($_GET["hacim9"])) {
      $hacim9=$_GET["hacim9"];
   }else{
      $hacim9="2";
   }
   if (isset($_GET["hacim10"])) {
      $hacim10=$_GET["hacim10"];
   }else{
      $hacim10="2";
   }
   if (isset($_GET["hacim11"])) {
      $hacim11=$_GET["hacim11"];
   }else{
      $hacim11="2";
   }
   if (isset($_GET["hacim12"])) {
      $hacim12=$_GET["hacim12"];
   }else{
      $hacim12="2";
   }
   if (isset($_GET["hacim13"])) {
      $hacim13=$_GET["hacim13"];
   }else{
      $hacim13="2";
   }

   if (isset($_GET["hacim14"])) {
      $hacim14=$_GET["hacim14"];
   }else{
      $hacim14="2";
   }

   if (isset($_GET["hacim15"])) {
      $hacim15=$_GET["hacim15"];
   }else{
      $hacim15="2";
   }

     if ($hacim1=="2" && $hacim2=="2" && $hacim3=="2" && $hacim4=="2" && $hacim5=="2" && $hacim6=="2" && $hacim7=="2" && $hacim8=="2" && $hacim9=="2" && $hacim10=="2" &&$hacim11=="2" && $hacim12=="2" && $hacim13=="2" && $hacim14=="2" && $hacim15=="2" ) {
   		$hacim1="1.6 cc";
   		$hacim2="1.9 cc";
   		$hacim3="2.0 cc";
   		$hacim4="2.1 cc";
   		$hacim5="2.3 cc";
   		$hacim6="2.4 cc";
   		$hacim7="2.5 cc";
   		$hacim8="2.9 cc";
   		$hacim9="3.0 cc";
   		$hacim10="3.5 cc";
   		$hacim11="4.0 cc";
   		$hacim12="5.6 cc";
   		$hacim13="6.0 cc";
   		$hacim13="6.2 cc";
   		$hacim13="6.4 cc";

 }
//--------------------------Hacim Alanı-----------------------------------//
 //--------------------------Vites Alanı-----------------------------------//
	if (isset($_GET["vites1"])) {
		$vites1=$_GET["vites1"];
	}else{
		$vites1="3";
	}

	if (isset($_GET["vites2"])) {
		$vites2=$_GET["vites2"];
	}else{
		$vites2="3";
	}

	if (isset($_GET["vites3"])) {
		$vites3=$_GET["vites3"];
	}else{
		$vites3="3";
	}

	if ($vites1=="3" && $vites2=="3" && $vites3=="3") {
		$vites1="Otomatik";
		$vites2="Yarı Otomatik";
		$vites3="Manuel";

	}
	
//--------------------------Vites Alanı-----------------------------------//
	if (isset($_GET["kapi1"])) {
		$kapi1=$_GET["kapi1"];
	}else{
		$kapi1="a";
	}
	if (isset($_GET["kapi2"])) {
		$kapi2=$_GET["kapi2"];
	}else{
		$kapi2="a";
	}

	 if ($kapi1=="a" && $kapi2=="a") {
			$kapi1="5";
			$kapi2="4";
		}







 ?>


   
