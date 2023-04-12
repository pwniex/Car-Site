<?php 
    include "header.php";
    include "sidebar.php";
    include "gelircek.php";
     if($_SESSION['kullanici_poz']=="Admin" or $_SESSION['kullanici_poz']=="Müdür" or $_SESSION['kullanici_poz']=="Muhasebeci")
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
                        <h1 class="page-head-line">Gelir Tablosuna Hoş Geldiniz.</h1>
                        <h1 class="page-subhead-line">Sitenizin satılan araçları ve ne kadar kazandığınızı görmenize yarıyan sayfa.
                        </h1>

                    </div>
                </div>
                <form role="form"  method="POST">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a type="submit" href="suv.php"class="btn btn-info" name="suv">Suv</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <a type="submit" href="binek.php" class="btn btn-info" name="binek">Binek</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <a type="submit"  href="elek.php" class="btn btn-info" name="elektrikli">Elektirikli</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <a type="submit"  href="road.php" class="btn btn-info" name="offroad">OffRoad</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <a type="submit"  href="spor.php" class="btn btn-info" name="spor">Spor</a>
                 </br>
                 </br>


                            <div class="panel panel-default">
                        <div class="panel-heading">
                            Gelir Tablosu
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" >
                                    <thead>
                                        <tr>
                                            
                                            <th>Kategori</th>
                                            <th>Fiyat</th>
                                            <th>Satılan Adet</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php                                       
                                            $db= @new mysqli('localhost', 'root', 'root', 'bessah');
                                            $db->set_charset("utf8");
                                            $query="SELECT SUM(fiyat),kategori,SUM(adet) FROM satis GROUP BY kategori";
                                            $result = $db->query($query);
                                            while ($b = $result->fetch_assoc()) 
                                            {
                                                
                                                $kategor = $b['kategori'];
                                                $fiyat = $b['SUM(fiyat)'];
                                                $adet = $b['SUM(adet)'];
                                                $x = number_format($fiyat, 2, ',', '.');
                                                     
                                                echo "<tr>
                                                   
                                                <td style='text-transform: capitalize;'>$kategor</td>
                                                <td>$x</td>
                                                <td>$adet</td>
                                                </tr>";
                                                   
                                            }
                                           
                                        ?>
                                        </tr>
                                        <tr style="background-color: rgba(0,0,0,0.5);color:white;">
                                            <td>Toplam</td>
                                            <td><?php 
                                            $a=$cek1['SUM(fiyat)'];
                                            $x = number_format($a, 2, ',', '.');

                                            echo $x; ?></td>
                                            <td><?php echo $cek1['SUM(adet)']; ?></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     
                                    </div>
                </form> 
            </div>
            <!-- /. PAGE INNER  -->
        </div>

<?php include "footer.php";?>

