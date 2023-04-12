<?php 
ob_start();
session_start();

?>



<?php 

	$db= @new mysqli('localhost', 'root', 'root', 'bessah');
	$db->set_charset("utf8");
	if ($db->connect_error) 
	{
 		die($db->connect_error);
	}
	else
	{
	}
?>
<?php 

    if ($get1 = $db->prepare("SELECT * FROM ayar")) 
    {
        $get1->execute();
        $res1 = $get1->get_result();
        $ck1 = $res1->fetch_assoc();
    }
    else
    {
        echo 'Ayar Sorgusunda Hata Var:'.$db->error;
    }



 ?>
 <?php 

    if ($gt = $db->prepare("SELECT * FROM kullanici ORDER BY kullanici_id ASC ")) 
    {
        $gt->execute();
        $rt = $gt->get_result();
        $ck = $rt->fetch_assoc();
    }
    else
    {
        echo 'Kullanıcı Sorgusunda Hata Var:'.$db->error;
    }



 ?>
 <?php
    if ($g = $db->prepare("SELECT * FROM ongosterim where gosteri_id='1' ")) 
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
 <?php
    if ($gg = $db->prepare("SELECT * FROM ongosterim where gosteri_id='2' ")) 
    {
        $gg->execute();
        $rr = $gg->get_result();
        $cc = $rr->fetch_assoc();
    }
    else
    {
        echo 'Ayar Sorgusunda Hata Var:'.$db->error;
    }



 ?>
<?php
    if ($ggg = $db->prepare("SELECT * FROM ongosterim where gosteri_id='3' ")) 
    {
        $ggg->execute();
        $rrr = $ggg->get_result();
        $ccc = $rrr->fetch_assoc();
    }
    else
    {
        echo 'Ayar Sorgusunda Hata Var:'.$db->error;
    }



 ?>




