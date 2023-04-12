<?php 
    include "header.php";
    include "sidebar.php";
    if($_SESSION['kullanici_poz']=="Admin" or $_SESSION['kullanici_poz']=="Müdür" or $_SESSION['kullanici_poz']=="Personel")
    {
        
    }
    else
    {
        echo "<script type='text/javascript'>alert('Sayın ".$_SESSION['kullanici_isim']." bu yetkiye sahip değilsiniz.');window.location.href = 'index.php';</script>";
    }
?>

         <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-head-line">Ön Gösterim Düzenleme/Güncelleme Ekranı</h1>
                            <h1 class="page-subhead-line">Sitenizin ön gösterim alanı için bu sayfadan resimleri güncelliyebilirsiniz.</h1>
                                <form>
                                    <div class="radio">
                                        <div class="kol3">
                                        <a href="birinciresim.php" type="submit" class="btn btn-info">Ön Gösterim 1. Alan</a>
                                    </div>
                                        <div class="kol3">
                                        <a href="ikinciresim.php" type="submit" class="btn btn-info">Ön Gösterim 2. Alan</a>
                                        </div>
                                        <div class="kol3">
                                        <a href="ucuncuresim.php" type="submit" class="btn btn-info">Ön Gösterim 3. Alan</a>
                                        </div>
                                        
                                    </div>
                                </form>

                        </div>
                    </div>
                     
                </div>
                <!-- /. PAGE INNER  -->
            </div>

    <?php include "footer.php";?>

