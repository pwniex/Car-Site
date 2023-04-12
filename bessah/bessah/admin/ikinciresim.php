<?php 
    include "header.php";
    include "sidebar.php";
?>

         <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-head-line">Ön Gösterim 2.Bölüm Düzenleme Ekranı</h1>


                           
                               <?php   
                                    if (isset($_GET['yolla2']) && $_GET['yolla2']=='ok') 

                                    {
                                         ?> 
                                            <h1 style="color:green" class="page-subhead-line">Kayıtlar başarıyla eklendi...</h1>
                                    
                                         <?php  
                                    }
                                    elseif (isset($_GET['yolla2']) && $_GET['yolla2']=='no') 
                                    {
                                        ?> 
                                            <h1 style="color:red" class="page-subhead-line">Kayıtlar eklenemedi...</h1>
                                    
                                        <?php 
                                    }
                                    else
                                   {
                                        ?>
                                             <h1 class="page-subhead-line">Sitenizin ön gösterim alanına  bu sayfadan araç ekliyebilirsiniz.</h1>
                                
                                        <?php 
                                    }

                                ?>  

                        </div>
                    </div>
                      <div class="panel panel-info">
                            <div class="panel-heading">
                             Ön Gösterim 1. Bölüm Ayarları
                            </div>
                            <div class="panel-body">
                                <form role="form" action="yol.php" method="POST" autocomplete="off">
                                            <div class="form-group">
                                                <label>Ön Gösterimde Resgilenicek Aracın Markasını Yazınız.</label>
                                                <input class="form-control" type="text" name="gosterim_marka" value="<?php echo $cc['gosteri_marka'];?>">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label>Ön Gösterimde Resgilenicek Aracın Modelini Yazınız.</label>
                                                <input class="form-control" type="text" name="gosterim_model" value="<?php echo $cc['gosteri_model'];?>">
                                                
                                            </div>
                                            
                                         
                                     <div class="form-group">
                                                <label>Ön Gösterimde Resgilenicek Aracın Açıklamsını Yazınız.</label>
                                                <input class="form-control" type="text" name="gosterim_aciklama" value="<?php echo $cc['gosteri_aciklama'];?>">
                                        
                                            </div>
                                            <div class="form-group">
                                            <label>Aracın Kategorisini Seçiniz.</label>
                                       <div class="radio">
                                            <div class="kol5">
                                                <label>
                                                    <input type="radio" name="kategori"  value="suv">Suv
                                                </label>
                                            </div>
                                            <div class="kol5">
                                                <label>
                                                    <input type="radio" name="kategori"  value="binek">Binek
                                                </label>
                                            </div>
                                            <div class="kol5">
                                                <label>
                                                    <input type="radio" name="kategori"  value="elektrikli">Elektrikli
                                                </label>
                                            </div>
                                            <div class="kol5">
                                                <label>
                                                    <input type="radio" name="kategori"  value="offroad">OffRoad
                                                </label>
                                            </div>
                                            <div class="kol5">
                                                <label>
                                                    <input type="radio" name="kategori"  value="spor">Spor
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                            
                                                   <div class="form-group">
                                            <label>Ön Gösterimde Resgilenicek Aracın Resim Adını Yazınız.</label>
                                            <input class="form-control" type="text" name="gosterim_resim" value="<?php echo $cc['gosteri_resim'];?>" required="required">
                                            
                                        </div>

                                               
                                      
                                     
                                            <button type="submit" class="btn btn-info" name="yol2">Güncelle</button>
                                             <a href="ongoster.php" type="submit" class="btn btn-info">Geri Dön</a>

                                        </form>
                                </div>
                            </div>
                </div>
                <!-- /. PAGE INNER  -->
            </div>

    <?php include "footer.php";?>

