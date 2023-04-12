<?php 

    $filtre=$db->query("SELECT * FROM $gelentablo where Fiyat between $fiyatmin and $fiyatmax and Marka=$marka and Model=$model and Renk IN ('$renk1','$renk2','$renk3','$renk4','$renk5','$renk6','$renk7','$renk8','$renk9') and Vites IN ('$vites1','$vites2') and Kapi IN ('$kapi1','$kapi2','$kapi3','$kapi4') and UretimYili between $yilmin and $yilmax");
    $bos=$db->query("SELECT * FROM $gelentablo where Fiyat between $fiyatmin and $fiyatmax and Marka=$marka and Model=$model and Renk IN ('$renk1','$renk2','$renk3','$renk4','$renk5','$renk6','$renk7','$renk8','$renk9') and Vites IN ('$vites1','$vites2') and Kapi IN ('$kapi1','$kapi2','$kapi3','$kapi4') and UretimYili between $yilmin and $yilmax")->fetch();



?>