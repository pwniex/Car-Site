<?php 
    include "header.php";
    include "sidebar.php";
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
                        <h1 class="page-head-line">Araç Satış Tablosuna Hoş Geldiniz.</h1>
                        <h1 class="page-subhead-line">Sitenizin satılan araçları ve nr tür eklentiler yapıldığını görmenize yarıyan sayfa.
                        </h1>

                    </div>
                </div>
                <form role="form"  method="POST">
                            <div class="panel panel-default">
                        <div class="panel-heading">
                            Araç Satış Tablosu
                        </div>
                        <div class="panel-body">
                            <div class="ali">
                            <div class="table-responsive">
                                <table class="table" style=" overflow-x: auto;" >
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Adı-Soyadı</th>
                                            <th>Telefon</th>
                                            <th>Marka</th>
                                            <th>Model</th>
                                            <th>Renk</th>
                                            <th>Opsiyonlar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php                                       
                                            $db= @new mysqli('localhost', 'root', 'root', 'bessah');
                                            $db->set_charset("utf8");
                                            $query="SELECT * FROM satis";
                                            $result = $db->query($query);
                                            $a=1;
                                            while ($b = $result->fetch_assoc()) 
                                            {
                                                $id=$b['id'];   
                                                $ad = $b['isimsoyisim'];
                                                $tel = $b['tel'];
                                                $marka = $b['marka'];
                                                $model = $b['model'];
                                                $renk=$b['renk'];
                                                $op1 = $b['opsiyon1'];
                                                $op2 = $b['opsiyon2'];
                                                $op3 = $b['opsiyon3'];
                                                $op4 = $b['opsiyon4'];
                                                $op5 = $b['opsiyon5'];
                                                $op6 = $b['opsiyon6'];
                                                $op7 = $b['opsiyon7'];
                                                $op8 = $b['opsiyon8'];
                                                $op9 = $b['opsiyon9'];
                                                $op10 = $b['opsiyon10'];
                                                $op11 = $b['opsiyon11'];
                                                $op12 = $b['opsiyon12'];
                                                $op13 = $b['opsiyon13'];
                                                ?><tr>
                                                <td><?php echo $a; ?></td>
                                                <td style='text-transform: capitalize;'><?php echo $ad; ?></td>
                                                <td style='text-transform: capitalize;'><?php echo $tel; ?></td>
                                                <td style='text-transform: capitalize;'><?php echo $marka; ?></td>
                                                <td style='text-transform: capitalize;'><?php echo $model; ?></td>
                                                <td style='text-transform: capitalize;'><?php echo $renk; ?></td>
                                                <td style='text-transform: capitalize;'><?php if (isset($op1)) {
                                                    echo $op1;
                                                } ?><?php if (isset($op2)) {
                                                    echo ", ".$op2;
                                                } ?><?php if (isset($op3)) {
                                                    echo ", ".$op3;
                                                } ?><?php if (isset($op4)) {
                                                    echo ", ".$op4;
                                                } ?><?php if (isset($op5)) {
                                                    echo ", ".$op5;
                                                } ?><?php if (isset($op6)) {
                                                    echo ", ".$op6;
                                                } ?><?php if (isset($op7)) {
                                                    echo ", ".$op7;
                                                } ?><?php if (isset($op8)) {
                                                    echo ", ".$op8;
                                                } ?><?php if (isset($op9)) {
                                                    echo ", ".$op9;
                                                } ?><?php if (isset($op10)) {
                                                    echo ", ".$op10;
                                                } ?><?php if (isset($op11)) {
                                                    echo ", ".$op11;
                                                } ?><?php if (isset($op12)) {
                                                    echo ", ".$op12;
                                                } ?><?php if (isset($op13)) {
                                                    echo ", ".$op13;
                                                } ?></td>

                                                </tr>
                                                <?php $a+=1;
                                            } ?>
                                                   
                                           
                                           
                                    
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                           </div>
                        </div>
                    </div>
                     
                                    </div>
                </form> 
            </div>
            <!-- /. PAGE INNER  -->
        </div>

<?php include "footer.php";?>

