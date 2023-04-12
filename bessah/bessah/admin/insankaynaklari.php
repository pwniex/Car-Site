<?php 
    include "header.php";
    include "sidebar.php";
    if($_SESSION['kullanici_poz']=="Admin" or $_SESSION['kullanici_poz']=="Müdür" or $_SESSION['kullanici_poz']=="İnsan Kaynakları")
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
                        <h1 class="page-head-line">Personel Tablosuna Hoş Geldiniz.</h1>
                        <?php   
                                if (isset($_GET['del']) && $_GET['del']=='ok') 

                                {
                                     ?> 
                                        <h1 style="color:green" class="page-subhead-line">Kullanıcı başarıyla silindi...</h1>
                                
                                     <?php  
                                }
                                elseif (isset($_GET['del']) && $_GET['del']=='no') 
                                {
                                    ?> 
                                        <h1 style="color:red" class="page-subhead-line">Kullanıcı Silinemedi...</h1>
                                
                                    <?php 
                                }
                                else
                               {
                                    ?>
                                         <h1 class="page-subhead-line">Sitenizin ve şirketinizdeki çalışanları görebilirsiniz.</h1>
                            
                                    <?php 
                                }

                            ?>  


                    </div>
                </div>
                <form role="form"  method="POST" action="delete.php">
                   
               


                            <div class="panel panel-default">
                        <div class="panel-heading">
                            Personel Tablosu
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" >
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Adı Soyadı</th>
                                            <th>Unvanı</th>
                                            <th>Kaldır</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php                                       
                                            $db= @new mysqli('localhost', 'root', 'root', 'bessah');
                                            $db->set_charset("utf8");
                                            $query1="SELECT * FROM kullanici";
                                            $result1 = $db->query($query1);
            
                                            $a=1;
                                            while ($b1 = $result1->fetch_assoc()) 
                                            {
                                                
                                                $isim = $b1['kullanici_isim'];
                                                $unvan = $b1['kullanici_poz'];
                                                $id=$b1['kullanici_id'];
                                                if($_SESSION['kullanici_isim']!=$isim)
                                                {   ?>
                                                        <tr>
                                                            <td><?php echo $a; ?></td>
                                                            <td><?php echo $isim; ?></td>
                                                            <td><?php echo $unvan; ?></td>
                                                            <td><a type='submit' class='btn btn-danger' href='delete.php?ad=$id'>Sil</a></td>
                                                        </tr>
                                                    <?php 
                                                }
                                                else
                                                {  ?> 
                                                        <tr>
                                                            <td><?php echo $a; ?></td>
                                                            <td><?php echo $isim; ?></td>
                                                            <td><?php echo $unvan; ?></td>
                                                            <td></td>
                                                           
                                                        </tr>
                                                    <?php 
                                                }       
                                                    $a+=1;      
                                           }
                                           
                                        ?>
                                        
                                       

                                          
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

