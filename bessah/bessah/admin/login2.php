<?php 
include 'baglan.php';
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Bessah Yönetim Paneli</title>
    <meta name="description" content="Bessah Yönetim Paneli">
    <meta name="keywords" content="admin,tamplate,bessah">
    <meta name="author" content="KTUN_P6">
    <link rel="shortcut icon" href="../img/logo.ico"> <!-- üst link logo resmi -->

  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <style>
  </style>
</head>
<body >
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="assets/img/logo.png" />
            </div>
        </div>
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

                <div class="panel-body">
                    <form role="form" action="login.php"  method="POST" >
                        <hr />
                        <h4 style="text-align: center; color:white;">Giriş Yap</h4></br>
                        <div style="color:white;">
                          <?php 
                         
                          if(isset($_GET['login']) && $_GET['login']=="no")
                          {
                            echo  "Kullanıcı Adınız yada Şifreniz Hatalı...";
                          }
                         ?>
                           
                         </div>
                        <br />
                        <div class="form-group input-group" >
                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                            <input type="text" class="form-control" placeholder="Kullanıcı Adınız. " name="kadi" />
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                            <input type="password" class="form-control"  placeholder="Şifreniz." name="sifre" />
                        </div>
                        <div class="form-group">
                            <label class="checkbox-inline" style="color:white;">
                                <input type="checkbox" style="color:white;" /> Beni Hatırla
                            </label>
                           
                     </div>

                     <button  class="btn btn-primary"name="login">Giriş Yap</button>
                     <hr />
                     <div style="text-align: center;">
                     <a href="../index.php">Anasayfaya Dön</a> 
                    </div>
               </form>
             </div>

         </div>


     </div>
 </div>

</body>
</html>
