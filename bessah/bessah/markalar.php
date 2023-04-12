<?php $headerss=$_GET['e'] ;

?>
<?php 

include"filtreleme/$headerss";

?>

<!-- PARALLAX -->
<?php $gelentablo=$_GET["i"]; ?>
<div class="slider-model">
	<div id="mainMarka" class="marka"  ><button style="text-transform: uppercase;" class="markayazi"><?php echo $gelentablo; ?></button></div>


    <div class="slider-content-model">
        <div class="slider-item-model">            
            <img  src="img/slider/<?php echo $gelentablo ?>/1.jpg">
        </div>
        <div class="slider-item-model">
            <img  src="img/slider/<?php echo $gelentablo ?>/2.jpg">
        </div>
        <div class="slider-item-model">
            <img  src="img/slider/<?php echo $gelentablo ?>/3.jpg">
        </div>
        <div class="slider-item-model">
            <img  src="img/slider/<?php echo $gelentablo ?>/4.jpg">
        </div>
        <div class="slider-item-model">
            <img  src="img/slider/<?php echo $gelentablo ?>/5.jpg">
        </div>
    </div>
</div>
<br>



<!-- KATEGORİ -->
<?php 
    $gelentablo=$_GET["i"];
	$binek = $db->query("SELECT * FROM $gelentablo group by Marka ")->fetchAll(PDO::FETCH_ASSOC); /*Tabloların  tamamının çekildiği yer */
?>

		<section id="modeller" class="modellerArea">
            <div class="modellerTop">
                <h2 class="sectionHeader">Markalar</h2>
            </div>
            <div class="modellerBody">
                <div class="container2">
              	<?php

					foreach ($binek as $bnk)
			 	{ ?>	
                    <div class="colll5">
                        <div class="modellerİtem">
                               <div class="modellerFoto"><a href="model.php?i=<?php echo $bnk['Marka'];?>&a=<?php echo $gelentablo; ?>&e=<?php echo $headerss; ?>"><img src="img/logo/<?php echo $bnk['Marka'] ?>.png"></a></div>
                               <div class="modellerText"><a href="model.php?i=<?php echo $bnk['Marka'];?>&a=<?php echo $gelentablo; ?>&e=<?php echo $headerss; ?>"><div><?php echo $bnk['Marka'] ?></div></a></div>
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