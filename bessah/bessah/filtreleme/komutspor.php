
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


	if (isset($_GET["renk7"])) {
		$renk7=$_GET["renk7"];
	}else{
		$renk7="1";
	}

	if (isset($_GET["renk8"])) {
		$renk8=$_GET["renk8"];
	}else{
		$renk8="1";
	}

	if (isset($_GET["renk9"])) {
		$renk9=$_GET["renk9"];
	}else{
		$renk9="1";
	}



	if ($renk1=="1" && $renk2=="1" && $renk3=="1" && $renk4=="1" && $renk5=="1" && $renk6=="1" && $renk7=="1" && $renk8=="1" && $renk9=="1") {
   		$renk1="Beyaz";
   		$renk2="Gri";
   		$renk3="Kırmızı";
   		$renk4="Mavi";
   		$renk5="Turkuaz";
   		$renk6="Turuncu";
   		$renk7="Yeşil";
   		$renk8="Sarı";
   		$renk9="Siyah";
   		
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
   if (isset($_GET["hacim16"])) {
      $hacim16=$_GET["hacim16"];
   }else{
      $hacim16="2";
   }
   if (isset($_GET["hacim17"])) {
      $hacim17=$_GET["hacim17"];
   }else{
      $hacim17="2";
   }
   if (isset($_GET["hacim18"])) {
      $hacim18=$_GET["hacim18"];
   }else{
      $hacim18="2";
   }
   if (isset($_GET["hacim19"])) {
      $hacim19=$_GET["hacim19"];
   }else{
      $hacim19="2";
   }
   if (isset($_GET["hacim20"])) {
      $hacim20=$_GET["hacim20"];
   }else{
      $hacim20="2";
   }
   if (isset($_GET["hacim21"])) {
      $hacim21=$_GET["hacim21"];
   }else{
      $hacim21="2";
   }
   if (isset($_GET["hacim22"])) {
      $hacim22=$_GET["hacim22"];
   }else{
      $hacim22="2";
   }
   if (isset($_GET["hacim23"])) {
      $hacim23=$_GET["hacim23"];
   }else{
      $hacim23="2";
   }
   if (isset($_GET["hacim24"])) {
      $hacim24=$_GET["hacim24"];
   }else{
      $hacim24="2";
   }
   if (isset($_GET["hacim25"])) {
      $hacim25=$_GET["hacim25"];
   }else{
      $hacim25="2";
   }
   if (isset($_GET["hacim26"])) {
      $hacim26=$_GET["hacim26"];
   }else{
      $hacim26="2";
   }
   if (isset($_GET["hacim27"])) {
      $hacim27=$_GET["hacim27"];
   }else{
      $hacim27="2";
   }

   if ($hacim1=="2" && $hacim2=="2" && $hacim3=="2" && $hacim4=="2" && $hacim5=="2" && $hacim6=="2" && $hacim7=="2" && $hacim8=="2" && $hacim9=="2" && $hacim10=="2" &&$hacim11=="2" && $hacim12=="2" && $hacim13=="2" && $hacim14=="2" && $hacim15=="2" && $hacim16=="2" && $hacim17=="2" && $hacim18=="2" && $hacim19=="2" && $hacim20=="2" && $hacim21=="2" && $hacim22=="2" && $hacim23=="2" && $hacim24=="2" && $hacim25=="2" && $hacim26=="2" && $hacim27=="2" ) {
   		$hacim1="3.0 cc";
   		$hacim2="3.4 cc";
   		$hacim3="3.5 cc";
   		$hacim4="3.8 cc";
   		$hacim5="3.9 cc";
   		$hacim6="4.0 cc";
   		$hacim7="4.6 cc";
   		$hacim8="4.9 cc";
   		$hacim9="5.0 cc";
   		$hacim10="5.2 cc";
   		$hacim11="5.5 cc";
   		$hacim12="5.9 cc";
   		$hacim13="6.0 cc";
   		$hacim14="6.1 cc";
   		$hacim15="6.2 cc";
   		$hacim16="6.4 cc";
   		$hacim17="6.5 cc";
   		$hacim18="7.9 cc";
         $hacim19="1.3 cc";
         $hacim20="1.4 cc";
         $hacim21="1.5 cc";
         $hacim22="1.6 cc";
         $hacim23="1.9 cc";
         $hacim24="2.0 cc";
         $hacim25="2.4 cc";
         $hacim26="2.5 cc";
         $hacim27="2.9 cc";
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
	
	if ($vites1=="3" && $vites2=="3") {
		$vites1="Otomatik";
		$vites2="Yari Otomatik";
		

	}
	
//--------------------------Vites Alanı-----------------------------------//
	if (isset($_GET["kapi1"])) {
		$kapi1=$_GET["kapi1"];
	}else{
		$kapi1="a";}

	 if ($kapi1=="a") {
			$kapi1="2";
			
			
		}








 ?>


   
