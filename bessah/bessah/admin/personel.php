<?php 
    include "header.php";
    include "sidebar.php";
    if($_SESSION['kullanici_poz']=="Admin" or $_SESSION['kullanici_poz']=="Müdür"  or $_SESSION['kullanici_poz']=="İnsan Kaynakları")
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
                        <h1 class="page-head-line">Personel Ekleme Ekranı</h1>


                       
                           <?php   
                                if (isset($_GET['insert']) && $_GET['insert']=='ok') 

                                {
                                     ?> 
                                        <h1 style="color:green" class="page-subhead-line">Kayıtlar başarıyla eklendi...</h1>
                                
                                     <?php  
                                }
                                elseif (isset($_GET['insert']) && $_GET['insert']=='no') 
                                {
                                    ?> 
                                        <h1 style="color:red" class="page-subhead-line">Kayıtlar eklenemedi...</h1>
                                
                                    <?php 
                                }
                                else
                               {
                                    ?>
                                         <h1 class="page-subhead-line">Sitenizin admin paneline bu sayfadan personel ekliyebilirsiniz.</h1>
                            
                                    <?php 
                                }

                            ?>  

                    </div>
                </div>
                  <div class="panel panel-info">
                        <div class="panel-heading">
                          Personel Ekle
                        </div>
                        <div class="panel-body">
                            <form role="form" action="insert.php" method="POST" autocomplete="off">
                                        <div class="form-group">
                                            <label>Personelin Adını Giriniz.</label>
                                            <input class="form-control" type="text" name="kullanici_isim" placeholder="Ali">
                                            
                                        </div>
                                 <div class="form-group">
                                            <label>Personel Kullanıcı Adını giriniz</label>
                                            <input class="form-control" type="text" name="kullanici_adi" placeholder="alley vb.">
                                    
                                        </div>
                                        <div class="form-group">
                                            <label>Personel Kullanıcı Şifresini Giriniz.</label>
                                           <script > function isNumberKey(evt) {
                                                var charCode = (evt.which) ? evt.which : event.keyCode;
                                                if (charCode > 31 && (charCode < 48 || charCode > 57))
                                                    return false;
                                                return true;
}                                           </script>
                                            <input class="form-control" type="text" onkeypress="return isNumberKey(event)" pattern="\d{5}"  name="kullanici_sifre" title="Bu input'a sadece 5 karakterli sayısal değer girilebilir" required>
                                            
                                        </div>
                                          <div class="form-group">
                                            <label>Personel Unvanını Seçiniz</label>
                                           <div class="radio">
                                            <div class="kol5">
                                                <label>
                                                    <input type="radio" name="kategori"  value="Müdür">Müdür
                                                </label>
                                            </div>
                                            <div class="kol5">
                                                <label>
                                                    <input type="radio" name="kategori"  value="Personel">Personel
                                                </label>
                                            </div>
                                            <div class="kol5">
                                                <label>
                                                    <input type="radio" name="kategori"  value="İnsan Kaynakları">İnsan Kaynakları
                                                </label>
                                            </div>
                                            <div class="kol5">
                                                <label>
                                                    <input type="radio" name="kategori"  value="Admin">Admin
                                                </label>
                                            </div>
                                             <div class="kol5">
                                                <label>
                                                    <input type="radio" name="kategori"  value="Muhasebeci">Muhasebeci
                                                </label>
                                            </div>
                                           
                                        </div>
                                            
                                        </div>
                                           
                                  
                                 
                                        <button type="submit" class="btn btn-info" name="insert">Personel Ekle</button>
                                         <button type="reset" class="btn btn-info" name="temizle">Temizle</button>

                                    </form>
                            </div>
                        </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>

<?php include "footer.php";?>

