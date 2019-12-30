<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Master Resep</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/1140.css" type="text/css" media="screen">
</head>
<body>
<div class="container">
  <div class="row">
    <header>
      <div class="sixcol"> <a href="#" id="logo"><img src="images/logo.png" width="303" height="120" alt=""></a> </div>
      <div class="sixcol last">
        <nav>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us </a></li>
            <li><a href="#">Products</a></li>
            <li><a href="index.html">Gallery</a></li>
            <li><a href="logout.php"> LogOut</a></li>
          </ul>
        </nav>
      </div>
      <img src="images/cake.png" width="350" height="256" alt="" class="cake">
    </header>
  </div>
</div>
<div class="container">
  <div class="row">
    <section id="intro" class="onecol">
      <hgroup>
        <h1>SELAMAT DATANG</h1>
        <h2>Tempat berbagi resep dan teknik memasak terbaru, terkini, dan terinovatif. Dapatkan resep
        yang ingin anda coba dan bagikan resep yang anda 
      miliki.</h2>
      </hgroup>
       <a href="artikel.php" class="button1">Tambahkan resepmu disini</a> </section>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="holder_content1">
      <section class="group4">
        <h3>Resep terbaru</h3>
        <article>
          <h4>10.12.2011 - New cakes <span>Cras quis libero, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut </span></h4>
        </article>
      </section>
    </div>
  </div>
</div>
<div class="container">

  <div class="row">
     <?php
            include "koneksi.php";
            $query = mysqli_query($koneksi, "SELECT * from tabelartikel");
             while($ambil = mysqli_fetch_assoc($query)){
      ?>
    <div class="fourcol">
      <section class="group1">
        <h5><?php echo $ambil['judul_artikel']; ?></h5>
        <p><?php echo $ambil['isi_artikel']; ?></p>
        <a class="photo_hover3" href="#"><img src="picture2.jpg" width="215" height="137" alt=""></a> 
        <a href="resep1.php"><span class="button">Read more</span></a>
        <a href="hapus.php?id=<?php echo $ambil['id_artikel']; ?>"><span class="button">Hapus</span></a>
      </section>

    </div>
   <!-- <div class="fourcol">
      <section class="group2">
        <h5>Resep 2</h5>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. Vestibulum condimentum facilisis nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero.</p>
        <a class="photo_hover3" href="#"><img src="picture1.jpg" width="215" height="137" alt=""></a> <a href="resep2.php"><span class="button">Read more</span></a> </section>
    </div>
    <div class="fourcol last">
      <section class="group3">
        <h5>Resep 3</h5>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. Vestibulum condimentum facilisis nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero. </p>
        <a class="photo_hover3" href="#"><img src="picture3.jpg" width="215" height="137" alt=""></a> <a href="resep3.php"><span class="button">Read more</span></a> </section>
    </div> -->
    <?php
            }
    ?>
  </div>
</div>
<--start footer-->
<footer>
  <div class="container copyright">
    <div class="row">
      <div class="sixcol">
        <div id="FooterTree"> &copy; 2019 chef Gregor </div>
      </div>
      <div class="sixcol last">
        <div id="FooterTwo">contact person admin :08967315355</div>
      </div>
    </div>
  </div>
</footer>
<!--end footer-->
</body>
</html>
