<?php 

    if ($get = $db->prepare("SELECT SUM(fiyat),SUM(adet) FROM satis 
")) 
    {
        $get->execute();
        $resu = $get->get_result();
        $cek1 = $resu->fetch_assoc();
    }
    else
    {
        echo 'Ayar Sorgusunda Hata Var:'.$db->error;
    }



 ?>
