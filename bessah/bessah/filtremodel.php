<?php $gelentablo=$_GET['tablo'];

?>
<?php include "/filtreleme/komut$gelentablo.php" ?>
<?php include "filtreleme/header$gelentablo.php"  ?>



<!-- PARALLAX -->

<div class="sabitfoto-model">
    <!--<div id="mainMarka" class="marka"  ><button class="markayazi"><?php //echo $gelenid; ?></button></div>-->


    <div class="sabitfoto-content-model">
            
        <div class="sabitfoto-item-model">            
            <img src="img/sabitfotograflar/audi.jpg">
        </div>
    
    </div>
</div>


<!-- KATEGORİ -->
<?php 

    include "filtreleme/veri$gelentablo.php"



?>

		<section  id="model" class="modelArea">
            <div class="modelTop">
                <h2 class="modelHeader">Modeller</h2>
            </div>
            <div class="modelBody">
                <div class="container1">
              	<?php

					while($yaz=$filtre->fetch()) { ?>
                    <div class="coll5">
                        <div class="modelContainer">
                            <img src="araclar/<?php echo $gelentablo; ?>/<?php echo $yaz['Model']; ?>.jpg" class="imageOver11">
                            <div class="modelOverlay">

                                <div class="modelText"><a href="profil.php?i=<?php echo $yaz['Marka'] ?>&a=<?php echo $gelentablo ?>&e=<?php echo $yaz['Model'] ?>" style="color: #fff;text-decoration: none;"><?php echo $yaz['Model'] ?></a></div>
                            </div>
                        </div>
                        <br>
                        <div class="model-btn">
                            <p style="color: #fff;"><?php echo $yaz['Marka']?>&nbsp - &nbsp<?php echo $yaz['Model']?></p>
                            <a href="profil.php?i=<?php echo $yaz['Marka'] ?>&a=<?php echo $gelentablo; ?>&e=<?php echo $yaz['Model'] ?>" class="buttonkesfet">Modeli Keşfet</a>
                        </div>
                    </div>
                    <?php	} ?>
                </div>
            </div>
        </section>
        <?php  include "filtreleme/veri$gelentablo.php";
         if (empty($bos)) { ?>
                            <div style="position: relative; bottom: 50px;" class="bilgibulunamadi">
                            <div style="position: relative; text-align: center;" class="fotoP">
                                <img src="img/bilgiBulanamadi.png">
                            </div>                               
                                <p class="bilgibulunamadiP">Bilgi Bulunamadı!</p>
                                <div class="aciklamaP">
                                <p class="aciklamaP1">Üzgünüz. Showroomlarımıza ait aradığınız kriterler aralığında bilgi bulunmamaktadır.</p>
                                <p class="aciklamaP2">Dilerseniz aşağıdaki buton üzerinden sayfamızda yeniden filtreleme yapabilirsiniz.</p>
                                </div>
                            </div>
                        <div class="sonucBtn">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-6"> <a href="kategori.php" class="btn btn-sm animated-button gibson-one">Kategoriler Seçimine Geri Dön</a> </div>
                            </div>
                        </div>
                        <?php } ?>
       	
                     

<br>
<br>
<br>
<br>

<?php

include"footer.php";

?>