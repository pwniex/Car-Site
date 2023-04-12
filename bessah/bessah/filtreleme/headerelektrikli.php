<?php 

include "baglan.php";

?>
<!-- HEADER -->
<!DOCTYPE html>
<html lang="tr">
<head>


  <meta charset="UTF-8">
  <meta name="description" content="Luxury Car"> <!-- Açıklama Bölümü -->
  <meta name="author" content="KTUN_P6">      <!-- Yazar Bölümü -->
  <meta name="keywords" content="html, css">    <!-- Diller -->
  <meta name="viewport" content="width-device-width, initial-scale-1.0">  <!-- Görüntü alanı -->

  <title>Bessah</title> <!-- Üst linkte yer alan yazı -->
  <link rel="shortcut icon" href="img/logo.ico"> <!-- üst link logo resmi -->

  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> <!-- Sosyal medya iconları için -->
  <link rel="stylesheet" type="text/css" href="css/reset.css">      <!-- web browser css stilini kaldırmak için -->
  <link rel="stylesheet" type="text/css" href="css/main.css"> 
  <link rel="stylesheet" type="text/css" href="css/yeni.css">     <!-- kendi css ayarlarımız -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://kit.fontawesome.com/766f3d27dc.js" crossorigin="anonymous"></script> <!-- Sosyal medya iconları için -->

</head>
<body>


<!-- AÇILIR MENÜ -->

<div id="YanMenu" class="sidenav">  <!-- Açılır menünün ana divi -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">  <!-- Kapatma butonunun js den çekildiği yer ve işlev verilmesi için açılan onclick özelliği -->
  &times;</a>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function(){
        ajaxFunc("marka", "", "#marka");

        $("#marka").on("change", function(){

            $("#model").attr("disabled", false).html("<option value=''>Seçin..</option>");
            console.log($(this).val());
            ajaxFunc("model", $(this).val(), "#model");

        });

           
        function ajaxFunc(action, name, id ){
            $.ajax({
                url: "filtreleme/ajaxelektrikli.php",
                type: "POST",
                data: {action:action, name:name},
                success: function(sonuc){
                    $.each($.parseJSON(sonuc), function(index, value){
                        var row="";
                        row +='<option value="'+value+'">'+value+'</option>';
                        $(id).append(row);
                    });
                }});
        }
    });
</script>

<div class="container">
  <div class="logo" style="margin-right: auto;">
    <a href="index.php"><img style="height: 70px;" src="img/logo.png"></a>
  </div>
</div>
<div class="sabitfoto-model">
    <!--<div id="mainMarka" class="marka"  ><button class="markayazi"><?php //echo $gelenid; ?></button></div>-->


    <div class="sabitfoto-content-model">
            
        <div class="sabitfoto-item-model">            
            <img src="img/filtre.jpg">
        </div>
    
    </div>
</div>
<section id="preview" class="sectionArea"> <!-- class açma sebebi-> fotoğraflar ve altındaki başlıklar arasında boşluk yaratmak için -->
<div class="previewTop">
  <h2 class="sectionHeaderS">Filtreleme</h2> <!-- başlık bölümünde aynı tür tasarım kullanacağı için class ismi verildi -->
  <!--<p>Bu ve benzeri daha bir çok aracaımıza <a href="showroom.php" style="color: #fff; text-decoration: none;">Showroom'lar</a> bölümünden bakabilirsiniz.
  </p>-->
</div>
</section>

<section id="filtreelektrik">
  <div class="filtreleme">
<form action="filtremodel.php" method="get">
  <div class="markaModelF">
    <div class="container3">
      <div class="col2">
              <label for="marka" style="font-size: 25px;">Marka</label>
              <br>
              <br>
                <select name="marka" id="marka"  >
                    <option value="">Seçin...</option>
                </select>
          </div>
          <div class="col2">
              <label for="model" style="font-size: 25px;">Model</label>
              <br>
              <br>
              <div class="modelF">
                <select name="model" id="model" disabled="disabled">
                    <option value="" style="text-align: center;">Seçin...</option>
                </select>
              </div>
        </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <hr style="width: 90%; border-color: #666;">
    <br>
    <br>
    <br>
    <div class="renklerF" action="sonuc2.php" method="get">
        
    <div class="renkler">
      <h6>Renkler</h6>
    </div>
    <br>
    <br>
    <div class="renklerCh">
      <div class="container4">
        <div class="col10"> 
          <div class="ch1">
            <h5><p style="align-items: center;">Beyaz</p><input type="checkbox" name="renk1" value="Beyaz"></h5>
          </div>
        </div>
        <div class="col10">
          <div class="ch2">
            <h5><p style="align-items: center;">Gri</p><input type="checkbox" name="renk2" value="Gri"></h5>
          </div>
        </div>
        <div class="col10">
          <div class="ch3">
            <h5><p style="align-items: center;">Kırmızı</p><input type="checkbox" name="renk3" value="Kırmızı"></h5>
          </div>
        </div>
      </div>
      <br>
      <div class="container4">
        <div class="col10">
          <div class="ch4">
            <h5><p style="align-items: center;">Mavi</p><input type="checkbox" name="renk4" value="Mavi"></h5>
          </div>
        </div>
        <div class="col10">
          <div class="ch9">
            <h5><p style="align-items: center;">Turkuaz</p><input type="checkbox" name="renk5" value="Turkuaz"></h5>
          </div>
        </div>
        <div class="col10">
          <div class="ch10">
            <h5><p style="align-items: center;">Turuncu</p><input type="checkbox" name="renk6" value="Turuncu"></h5>
          </div>
        </div>
      </div>
      <br>
      <div class="container4">
        <div class="col10">
          <div class="ch5">
            <h5><p style="align-items: center;">Koyu Gri</p><input type="checkbox" name="renk7" value="Koyu Gri"></h5>
          </div>
        </div>
        <div class="col10">
          <div class="ch7">
            <h5><p style="align-items: center;">Sarı</p><input type="checkbox" name="renk8" value="Sarı"></h5>
          </div>
        </div>
        <div class="col10">
          <div class="ch8">
            <h5><p style="align-items: center;">Siyah</p><input type="checkbox" name="renk9" value="Siyah"></h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <hr style="width: 90%; border-color: #666;">
  <br>
  <br>
  <br>
  <div class="fiyatYilF" action="sonuc2.php" method="get">
    <div class="container6">
      <div class="col11">
        <h6>Fiyat</h6>
        <br>
        <h5>
          <label for="fy1">Min</label>
          <input id="fy1" type="text" name="fiyatmin">
        </h5>
          <br>
        <h5>
          <label for="fy2">Max</label>
          <input id="fy2" type="text" name="fiyatmax">
        </h5>
      </div>
      <div class="col11">
        <h6>Yıl</h6>
        <br>
          <h5>
            <label for="fy3">Min</label>
            <input id="fy3" type="text" name="yilmin">
          </h5>
          <br>
          <h5>
            <label for="fy4">Max</label>
            <input id="fy4" type="text" name="yilmax">
          </h5>
      </div>
    </div>
  </div>
  </div>
  <br>
  <br>
  <br>
  <hr style="width: 90%; border-color: #666;">
  <br>
  <br>
  <br>
  <div class="vitesKapiF" action="sonuc2.php" method="get">
    <div class="vitesKapiCh">
      <div class="container9">
        <div class="col13">
          <h6>Vites</h6>
          <br>
          <h5>
            <label for="vk1">Otomatik</label>
            <input id="vk1" type="checkbox" name="vites1" value="Otomatik">
          </h5>
          <h5>
            <label for="vk2">Yarı Otomatik</label>
            <input id="vk2" type="checkbox" name="vites2" value="Yarı Otomatik">
          </h5>
        </div>
        <div class="col13">
          <h6>Kapı</h6>
          <br>
          <h5>
            <label for="vk4">5</label>
            <input id="vk4" type="checkbox" name="kapi1" value="5">
          </h5>
          <h5>
            <label for="vk5">4</label>
            <input id="vk5" type="checkbox" name="kapi2" value="4">

          </h5>
          <h5>
            <label for="vk6">3</label>
            <input id="vk6" type="checkbox" name="kapi3" value="3">

          </h5>
          <h5>
            <label for="vk7">2</label>
            <input id="vk7" type="checkbox" name="kapi4" value="2">

          </h5>
        </div>
      </div>
    </div>
    <input type="hidden" name="tablo" value="elektrikli">
  </div>
  <br>
  <br>
  <br>
    <div class="btnF">
      <input class="BtnF" type="submit" name="gonder" value="Filtrele">
    </div>
</form>
</div>
</section>
<br>

<span style="font-size:30px;cursor:pointer; color: #8b0000; position: relative; left: 35px; top: 50px; " onclick="openNav()">  <!-- sağ üstteki menü açılma butonu ve tıklandığında verilen özellik -->

&#9776;</span>

<script>
function openNav() { /*sağ üstteki icona tıklandığında oluşacak eylemin belirtildiği yer */
  document.getElementById("YanMenu").style.width = "100%";
}

function closeNav() { /*sol tarafta çıkan çarpı iconuna tıklandığında oluşacak eylemin belirtildiği yer */
  document.getElementById("YanMenu").style.width = "0";
}
</script>

<!-- Normal Menü -->

<header>
   
    <div class="container">  <!-- ana div -->
        <div class="logo">  <!-- logo divi -->
            <a href="index.php"><img src="img/logo.png"></a>  <!-- logonun verildiği yer -->
        </div>
            <div style="z-index: 2;" class="order">
                <ul class="menu cf">  <!-- menü divi ve altıda menü içeriği -->
                    <li><a href="index.php">ANASAYFA</a></li>
                    <li><a href="kategori.php">Araç Galerisi</a></li>
                    <li><a href="hakkimizda.php">Hakkımızda</a></li>
                    <li><a href="iletisim.php">İletişim</a></li>
                </ul>    
            </div>
            
</header>








