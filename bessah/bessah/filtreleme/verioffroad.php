<?php 

    $filtre=$db->query("SELECT * FROM $gelentablo where Fiyat between $fiyatmin and $fiyatmax and Marka=$marka and Model=$model and Renk IN ('$renk1','$renk2','$renk3','$renk4','$renk5','$renk6') and MotorHacmi IN ('$hacim1','$hacim2','$hacim3','$hacim4','$hacim5','$hacim6','$hacim7','$hacim8','$hacim9','$hacim10','$hacim11','$hacim12','$hacim13','$hacim14','$hacim15')  and Vites IN ('$vites1','$vites2','$vites3') and Kapi IN ('$kapi1','$kapi2') and UretimYili between $yilmin and $yilmax");
    $bos=$db->query("SELECT * FROM $gelentablo where Fiyat between $fiyatmin and $fiyatmax and Marka=$marka and Model=$model and Renk IN ('$renk1','$renk2','$renk3','$renk4','$renk5','$renk6') and MotorHacmi IN ('$hacim1','$hacim2','$hacim3','$hacim4','$hacim5','$hacim6','$hacim7','$hacim8','$hacim9','$hacim10','$hacim11','$hacim12','$hacim13','$hacim14','$hacim15')  and Vites IN ('$vites1','$vites2','$vites3') and Kapi IN ('$kapi1','$kapi2') and UretimYili between $yilmin and $yilmax")->fetch();



?>