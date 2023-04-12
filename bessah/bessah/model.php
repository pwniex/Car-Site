<?php $headerss=$_GET['e'] ;

?>
<?php 

include"filtreleme/$headerss";

?>



<?php 
    $gelenid=$_GET["i"];
    $gelena=$_GET["a"];
    $cek=$db->query("SELECT * FROM $gelena where Marka='$gelenid'")->fetch(); /* binek tablosunun tamamının çekildiği yer */

?>

<div class="sabitfoto-model">
	<!--<div id="mainMarka" class="marka"  ><button class="markayazi"><?php //echo $gelenid; ?></button></div>-->


    <div class="sabitfoto-content-model">
            
        <div class="sabitfoto-item-model">            
            <img src="img/sabitfotograflar/<?php echo $cek['Marka'] ?>.jpg">
        </div>
    
    </div>
</div>
<br>



<!-- KATEGORİ -->
<?php 
    $gelenid=$_GET["i"];
    $gelena=$_GET["a"];
	$binek = $db->query("SELECT * FROM $gelena where Marka='$gelenid' group by model ")->fetchAll(PDO::FETCH_ASSOC); /* binek tablosunun tamamının çekildiği yer */

?>

		<section  id="model" class="modelArea">
            <div class="modelTop">
                <h2 class="sectionHeader">Modeller</h2>
            </div>
            <div class="modelBody">
                <div class="container1">
              	<?php

					foreach ($binek as $bnk)
			 	{ ?>	
                    <div class="coll5">
                        <div class="modelContainer">
                            <img src="araclar/<?php echo $gelena; ?>/<?php echo $bnk['Model']; ?>.jpg" class="imageOver11">
                            <div class="modelOverlay">
                                <div class="modelText"><a href="profil.php?i=<?php echo $gelenid;?>&a=<?php echo $gelena;?>&e=<?php echo $bnk['Model']?>" style="color: #fff;text-decoration: none;"><?php echo $bnk['Model'] ?></a></div>
                            </div>
                        </div>
                        <br>
                        <div class="model-btn">
                            <p style="color: #fff;"><?php echo $bnk['Model']?></p>
                            <a href="profil.php?i=<?php echo $gelenid;?>&a=<?php echo $gelena;?>&e=<?php echo $bnk['Model']?>" class="buttonkesfet">Modeli Keşfet</a>
                        </div>
                    </div>
                    <?php	} ?>
                </div>
            </div>
        </section>

<br>
<br>
<br>
<br>

<?php

include"footer.php";

?>