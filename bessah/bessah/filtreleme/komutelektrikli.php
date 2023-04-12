
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
   		$renk3="Kirmizi";
   		$renk4="Mavi";
   		$renk5="Turkuaz";
   		$renk6="Turuncu";
   		$renk7="Koyu Gri";
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
		$vites2="Yarı Otomatik";


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
	if (isset($_GET["kapi3"])) {
		$kapi3=$_GET["kapi3"];
	}else{
		$kapi3="a";
	}
	if (isset($_GET["kapi4"])) {
		$kapi4=$_GET["kapi4"];
	}else{
		$kapi4="a";
	}

	 if ($kapi1=="a" && $kapi2=="a" && $kapi3=="a" && $kapi4=="a") {
			$kapi1="5";
			$kapi2="4";
			$kapi3="3";
			$kapi4="2";

		}







 ?>


   
