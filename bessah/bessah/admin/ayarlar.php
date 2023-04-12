<?php 
    include "header.php";
    include "sidebar.php";
    if($_SESSION['kullanici_poz']=="Admin")
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
                        <h1 class="page-head-line">Sitenin Genel Ayarları.</h1>


                       
                           <?php   
                                if (isset($_GET['durum']) && $_GET['durum']=='ok') 

                                {
                                     ?> 
                                        <h1 style="color:green" class="page-subhead-line">Kayıtlar başarıyla güncellendi...</h1>
                                
                                     <?php  
                                }
                                elseif (isset($_GET['durum']) && $_GET['durum']=='no') 
                                {
                                    ?> 
                                        <h1 style="color:red" class="page-subhead-line">Kayıtlar güncellenemedi, değişiklik yapmamış olabilirsiniz...</h1>
                                
                                    <?php 
                                }
                                else
                               {
                                    ?>
                                         <h1 class="page-subhead-line">Sitenizin ayarlarını bu sayfadan düzenliyebilirsiniz.</h1>
                            
                                    <?php 
                                }

                            ?>  

                    </div>
                </div>
                  <div class="panel panel-info">
                        <div class="panel-heading">
                          AYARLAR
                        </div>
                        <div class="panel-body">
                            <form role="form" action="islem.php" method="POST" autocomplete="off">
                                        <div class="form-group">
                                            <label>Site Başlığı Giriniz.</label>
                                            <input class="form-control" type="text" name="ayar_baslik" value="<?php echo $ck1['ayar_baslik'];?>">
                                            
                                        </div>
                                 <div class="form-group">
                                            <label>Anahtar Kelime Giriniz</label>
                                            <input class="form-control" type="text" name="ayar_anahtar" value="<?php echo $ck1['ayar_anahtar'];?>">
                                    
                                        </div>
                                        <div class="form-group">
                                            <label>Site Linki Giriniz.</label>
                                            <input class="form-control" type="text" name="ayar_url" value="<?php echo $ck1['ayar_url'];?>">
                                            
                                        </div>
                                            <div class="form-group">
                                            <label>Sitenin Açıklamasını Giriniz.</label>
                                            <textarea class="form-control" rows="3" name="ayar_aciklama" ><?php echo $ck1['ayar_aciklama'];?></textarea>
                                        </div>
                                  
                                 
                                        <button type="submit" class="btn btn-info" name="ayarkaydet">Ayarları Kaydet</button>
                                         <button type="reset" class="btn btn-info" name="temizle">Temizle</button>

                                    </form>
                            </div>
                        </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>

<?php include "footer.php";?>

