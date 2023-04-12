      <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">

                            <div class="inner-text" style="font-size: 12px;">
                                </br>
                               Giriş Yapan Kullanıcı: <?php echo $_SESSION['kullanici_isim']; ?>
                            </br>
                                Unvan: <?php echo $_SESSION['kullanici_poz']; ?>
                               </div>
                        </div>

                    </li>

                   
                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Anasayfa</a>
                    </li>
                    <li>
                        <a class="active-menu" href="ayarlar.php"><i class="fa fa-cogs"></i>Ayarlar</a>
                    </li>
                   <li>
                        <a class="active-menu" href="personel.php"><i class="fa fa-user "></i>Personel Ekle</a>
                    </li>
                     <li>
                        <a class="active-menu" href="aracekle.php"><i class="fa fa-car "></i>Araç Ekle</a>
                    </li>
                     <li>
                        <a class="active-menu" href="option.php"><i class="fa fa-table "></i>Araç Satış Tablosu</a>
                    </li>
                    <li>
                        <a class="active-menu" href="gelir.php"><i class="fa fa-table "></i>Gelir Tablosu</a>
                    </li>
                     <li>
                        <a class="active-menu" href="opsiyon.php"><i class="fa fa-car "></i>Opsiyon Ekle</a>
                    </li>
                    <li>
                        <a class="active-menu" href="insankaynaklari.php"><i class="fa fa-table "></i>Personel Tablosu</a>
                    </li>
                     <li>
                        <a class="active-menu" href="ongoster.php"><i class="fa fa-taxi"></i>Ön Gösterim Ayarı</a>
                    </li>
                </ul>

            </div>

        </nav>