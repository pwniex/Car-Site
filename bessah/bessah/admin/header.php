<?php 
include "baglan.php";
    if(!isset($_SESSION['kadi']))
        {
            header('Location:login2.php');
            
        }
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
    <!-- BOOTSTRAP  Resim STYLES-->
    <link href="assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Değiştir</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><b style="font-size: 30px;color: #8b0000; ">Bessah</b><br><b style="font-size: 10px">Yönetim Paneli</b></br></a>
            </div>

            <div class="header-right">

                <a href="logout.php" class="btn btn-danger" title="Çıkış Yap"><i class="fa fa-exclamation-circle fa"></i>  Güvenli Çıkış</a>

            </div>
        </nav>