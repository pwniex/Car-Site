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
                        <h1 class="page-head-line">Opsiyon Ekleme Ekranı</h1>


                       
                           <?php   
                                if (isset($_GET['opsiyon']) && $_GET['opsiyon']=='ok') 

                                {
                                     ?> 
                                        <h1 style="color:green" class="page-subhead-line">Opsiyon başarıyla eklendi...</h1>
                                
                                     <?php  
                                }
                                elseif (isset($_GET['opsiyon']) && $_GET['opsiyon']=='no') 
                                {
                                    ?> 
                                        <h1 style="color:red" class="page-subhead-line">Opsiyon eklenemedi...</h1>
                                
                                    <?php 
                                }
                                else
                               {
                                    ?>
                                         <h1 class="page-subhead-line">Sitenizin araçlarına ek metaryel ekliyebilirsiniz.</h1>
                            
                                    <?php 
                                }

                            ?>  

                    </div>
                </div>
                  <div class="panel panel-info">
                        <div class="panel-heading">
                          Opsiyon Ekle
                        </div>
                        <div class="panel-body">
                            <form role="form" action="opsi.php" method="POST" autocomplete="off">
                                        <div class="form-group">
                                            <label>Aracın Markasını Giriniz.</label>
                                            <input class="form-control" type="text" name="opsiyonMarka" placeholder="BMW"  required="required">
                                            
                                        </div>
                                 <div class="form-group">
                                            <label>Opsiyon Adını giriniz</label>
                                            <input class="form-control" type="text" name="opsiyonAd" required="required" >
                                    
                                        </div>
                                        <div class="form-group">
                                            <label>Opsiyon Fiyatını Giriniz.</label>
                                           <script > function isNumberKey(evt) {
                                                var charCode = (evt.which) ? evt.which : event.keyCode;
                                                if (charCode > 31 && (charCode < 48 || charCode > 57))
                                                    return false;
                                                return true;
}                                           </script>
                                            <input class="form-control" type="text" onkeypress="return isNumberKey(event)"   name="opsiyonFiyat"   placeholder="4500 "required="required">
                                            
                                        </div>
                                        <div class="radio">
                                            <div class="kol14">
                                                <label>
                                                    <input type="radio" name="opsiyonTur"  value="Cam Filmi">Cam Filmi
                                                </label>
                                            </div>
                                            <div class="kol14">
                                                <label>
                                                    <input type="radio" name="opsiyonTur"  value="Çekiş Demiri">Çekiş Demiri
                                                </label>
                                            </div>
                                            <div class="kol14">
                                                <label>
                                                    <input type="radio" name="opsiyonTur"  value="Far Işığı">Far Işığı
                                                </label>
                                            </div>
                                           
                                            <div class="kol14">
                                                <label>
                                                    <input type="radio" name="opsiyonTur"  value="Jant Boyutu">Jant Boyutu
                                                </label>
                                            </div>
                                                 <div class="kol14">
                                                <label>
                                                    <input type="radio" name="opsiyonTur"  value="Sunroof">SunRoof
                                                </label>
                                            </div>
                                            
                                            <div class="kol14">
                                                <label>
                                                    <input type="radio" name="opsiyonTur"  value="Jant Reng">Jant Rengi
                                                </label>
                                            </div>
                                           
                                            <div class="kol14">
                                                <label>
                                                    <input type="radio" name="opsiyonTur"  value="Koltuk Rengi">Koltuk Rengi
                                                </label>
                                            </div>
                                            
                                             <div class="kol14">
                                                <label>
                                                    <input type="radio" name="opsiyonTur"  value="Far Tipi">Far Tipi
                                                </label>
                                            </div>
                                            <div class="kol14">
                                                <label>
                                                    <input type="radio" name="opsiyonTur"  value="Yedek Lastik">Yedek Lastik
                                                </label>
                                            </div>
                                            <div class="kol14">
                                                <label>
                                                    <input type="radio" name="opsiyonTur"  value="Sensörler">Sensörler
                                                </label>
                                            </div>
                                      
                                            
                                             <div class="kol14">
                                                <label>
                                                    <input type="radio" name="opsiyonTur"  value="Koltuk Kaplaması">Koltuk Kaplaması
                                                </label>
                                            </div>
                                            <div class="kol14">
                                                <label>
                                                    <input type="radio" name="opsiyonTur"  value="Led İlave Aydınlatma">Led İlave Aydınlatma
                                                </label>
                                            </div>
                                            <div class="kol14">
                                                <label>
                                                    <input type="radio" name="opsiyonTur"  value="Ön Tampon Koruması">Ön Tampon Koruması
                                                </label>
                                            </div>
                                             <div class="kol14">
                                                <label>
                                                    <input type="radio" name="opsiyonTur"  value="Renk">Renk
                                                </label>
                                            </div>
                                            
                                        </div>
                                          
                                           
                                  
                                 
                                        <button type="submit" class="btn btn-info" name="opsiyon">Opsiyon Ekle</button>
                                         <button type="reset" class="btn btn-info" name="temizle">Temizle</button>

                                    </form>
                            </div>
                        </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>

<?php include "footer.php";?>

