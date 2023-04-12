<?php 

    if ($gt2 = $db->prepare("SELECT * FROM kullanici ")) 
    {
        $gt2->execute();
        $resu = $get->get_result();
        $cek1 = $resu->fetch_assoc();
    }
    else
    {
        echo 'Ayar Sorgusunda Hata Var:'.$db->error;
    }



 ?>
