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
                        <h1 class="page-head-line">Araç Ekleme Ekranı</h1>


                       
                           <?php   
                                if (isset($_GET['car']) && $_GET['car']=='ok') 

                                {
                                     ?> 
                                        <h1 style="color:green" class="page-subhead-line">Araç başarıyla eklendi...</h1>
                                
                                     <?php  
                                }
                                elseif (isset($_GET['car']) && $_GET['car']=='no') 
                                {
                                    ?> 
                                        <h1 style="color:red" class="page-subhead-line">Araç eklenemedi...</h1>
                                
                                    <?php 
                                }
                                else
                               {
                                    ?>
                                         <h1 class="page-subhead-line">Sitenize bu sayfadan araç ekliyebilirsiniz.</h1>
                            
                                    <?php 
                                }

                            ?>  

                    </div>
                </div>
                 <div class="panel panel-info">
                        <div class="panel-heading">
                          Araç Ekle
                        </div>
                        <div class="panel-body">
                            <form role="form" action="islemarac.php" method="POST" autocomplete="off" enctype="multipart/form-data" >
                                        <div class="form-group">
                                            <label>Aracın Markasını Giriniz.</label>
                                            <input class="form-control" type="text" name="Marka" placeholder="BMW" required="required">
                                            
                                        </div>
                                 <div class="form-group">
                                            <label>Aracın Modelini giriniz</label>
                                            <input class="form-control" type="text" name="Model" placeholder="M4" required="required">
                                    
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
                                            <label>Aracın Rengini Giriniz.</label>
                                            <input class="form-control" type="text" name="Renk" placeholder="Mavi" required="required">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Aracın Motor Hacmini Giriniz.</label>
                                            <input class="form-control" type="text" name="MotorHacmi" placeholder="1.5 cc" required="required">
                                            
                                        </div>
                                             <div class="form-group">
                                            <label>Aracın Vites Türünü Seçiniz.</label>
                                            <div class="radio">
                                            <div class="kol3">
                                                <label>
                                                    <input type="radio" name="Vites"  value="Otomatik">Otomatik
                                                </label>
                                            </div>
                                            <div class="kol3">
                                                <label>
                                                    <input type="radio" name="Vites"  value="Yarı Otonatik">Yarı Otonatik
                                                </label>
                                            </div>
                                            <div class="kol3">
                                                <label>
                                                    <input type="radio" name="Vites" value="Manuel">Manuel
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label>Aracın Kapı Sayısını Giriniz.</label>
                                             <script > function isNumberKey(evt) {
                                                var charCode = (evt.which) ? evt.which : event.keyCode;
                                                if (charCode > 31 && (charCode < 48 || charCode > 57))
                                                    return false;
                                                return true;
}                                           </script>
                                            <input class="form-control" type="text" onkeypress="return isNumberKey(event)" name="Kapi" placeholder="2" required="required">
                                            
                                        </div>
                                          <div class="form-group">
                                            <label>Aracın Üretim Yılını Giriniz.</label>
                                            <input class="form-control" type="text" onkeypress="return isNumberKey(event)" name="UretimYili" placeholder="2021" required="required">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Aracın Yakıt Tipini Seçiniz.</label>
                                            <div class="radio">
                                            <div class="kol4">
                                                <label>
                                                    <input type="radio" name="YakitTipi"  value="Benzin" >Benzin
                                                </label>
                                            </div>
                                            <div class="kol4">
                                                <label>
                                                    <input type="radio" name="YakitTipi"  value="Dizel">Dizel
                                                </label>
                                            </div>
                                            <div class="kol4">
                                                <label>
                                                    <input type="radio" name="YakitTipi"  value="Elektirik">Elektirik
                                                </label>
                                            </div>
                                            <div class="kol4">
                                                <label>
                                                    <input type="radio" name="YakitTipi"  value="Hybrid">Hybrid
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                          <div class="form-group">
                                            <label>Aracın Yakıt Tüketimini Giriniz.</label>
                                            <input class="form-control" type="text" name="YakitTuketimi" placeholder="5.9 Lt" required="required">
                                            
                                        </div>
                                         <div class="form-group">
                                            <label>Aracın Çekiş Türünü Seçiniz.</label>
                                            <div class="radio">
                                            <div class="kol5">
                                                <label>
                                                    <input type="radio" name="Cekis"  value="Önden Çekiş" >Önden Çekiş
                                                </label>
                                            </div>
                                            <div class="kol5">
                                                <label>
                                                    <input type="radio" name="Cekis"  value="Arkadan İtiş">Arkadan İtiş
                                                </label>
                                            </div>
                                            <div class="kol5">
                                                <label>
                                                    <input type="radio" name="Cekis"  value="4WD (Sürekli)">4WD (Sürekli)
                                                </label>
                                            </div>
                                            <div class="kol5">
                                                <label>
                                                    <input type="radio" name="Cekis" value="4x4">4x4
                                                </label>
                                            </div>
                                            <div class="kol5">
                                                <label>
                                                    <input type="radio" name="Cekis"  value="4x2 (Arkadan İtiş)">4x2 (Arkadan İtiş)
                                                </label>
                                             
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Aracın Stok Sayısını Giriniz.</label>
                                            <input class="form-control" type="text" onkeypress="return isNumberKey(event)" name="Stok" placeholder="3" required="required">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Aracın Fiyatını Giriniz.</label>
                                            <input class="form-control" type="text" onkeypress="return isNumberKey(event)" name="Fiyat" placeholder="2950000" required="required">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Aracın Hangi Showrooma Ait Olduğunu Seçiniz.</label>
                                            <div class="radio">
                                            <div class="kol3">
                                                <label>
                                                    <input type="radio" name="Showroom"  value="İstanbul" >İstanbul
                                                </label>
                                            </div>
                                            <div class="kol3">
                                                <label>
                                                    <input type="radio" name="Showroom"  value="Ankara">Ankara
                                                </label>
                                            </div>
                                            <div class="kol3">
                                                <label>
                                                    <input type="radio" name="Showroom"  value="Konya">Konya
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="form-group">
                                            <label>Aracın Model Sayfası İçin Resim Adını Giriniz.</label>
                                            <input class="form-control" type="text" name="Resim" placeholder="1.jpg" required="required">
                                            
                                        </div>
                                        <div class="form-group">
                        <label class="control-label col-lg-4">Model Sayfası İçin Resim Seçiniz.</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="assets/img/demoUpload.jpg" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Resim Seçiniz</span><span class="fileupload-exists">Değiştir</span><input type="file" name="dosya"></span>
                                    <a href="#" class="btn btn-danger2 fileupload-exists" data-dismiss="fileupload">Sil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                                            <label>Aracın Profil Sayfası İçin Resim Adını Giriniz.</label>
                                            <input class="form-control" type="text" name="Resim" placeholder="1.jpg" required="required">
                                            
                                        </div>
                     <div class="form-group">
                        <label class="control-label col-lg-4">Profil Sayfası İçin Resim Seçiniz.</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="assets/img/demoUpload.jpg" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Resim Seçiniz</span><span class="fileupload-exists">Değiştir</span><input type="file" name="dosya1"></span>
                                    <a href="#" class="btn btn-danger2 fileupload-exists" data-dismiss="fileupload">Sil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                                            
                                       
                                 
                                        <button type="submit" class="btn btn-info" name="car">Araç Ekle</button>
                                         <button type="reset" class="btn btn-info" name="temizle">Temizle</button>

                                    </form>
                            </div>
                        </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>

<?php include "footer.php";?>


