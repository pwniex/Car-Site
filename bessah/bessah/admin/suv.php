<?php 
    include "header.php";
    include "sidebar.php";

     
   

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
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a type="submit" href="suv.php"class="btn btn-info" name="car">Suv</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <a type="submit" href="binek.php" class="btn btn-info" name="temizle">Binek</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <a type="submit"  href="elek.php" class="btn btn-info" name="car">Elektirikli</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <a type="submit"  href="road.php" class="btn btn-info" name="temizle">OffRoad</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <a type="submit"  href="spor.php" class="btn btn-info" name="car">Spor</a>
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
                                            <th>#</th>
                                            <th>Marka</th>
                                            <th>Model</th>
                                            <th>Fiyat</th>
                                            <th>Satılan Adet</th>
                                            <th>Staış Tarihi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php                                       
                                            $db= @new mysqli('localhost', 'root', 'root', 'bessah');
                                            $db->set_charset("utf8");
                                            $query="SELECT * FROM satis WHERE kategori='suv'";
                                            $result = $db->query($query);
                                            $a=1;
                                            while ($b = $result->fetch_assoc()) 
                                            {

                                                    
                                                    $id = $b['id'];
                                                    $marka = $b['marka'];
                                                    $model = $b['model'];
                                                    $fiyat = $b['fiyat'];
                                                    $adet = $b['adet'];
                                                    $tarih=$b['satistarihi'];
                                                     
                                                    
                                                    echo "<tr>
                                                    <td>$a</td>
                                                    <td>$marka</td>
                                                    <td>$model</td>
                                                    <td>$fiyat</td>
                                                    <td>$adet</td>
                                                     <td>$tarih</td>
                                                </tr>";$a+=1;
                                            }
                                           
                                        ?>
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

