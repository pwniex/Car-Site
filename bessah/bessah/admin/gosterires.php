<?php 

include "baglan.php";
?>

<?php
    if ($g = $db->prepare("SELECT * FROM gosteri ")) 
    {
        $g->execute();
        $r = $g->get_result();
        $c = $r->fetch_assoc();
    }
    else
    {
        echo 'Ayar Sorgusunda Hata Var:'.$db->error;
    }



 ?>