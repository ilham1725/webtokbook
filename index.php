<?php
  include 'header.php';
  // echo "<pre>";
  //   print_r($_SESSION);
  // echo "</pre>";
?>
<body>

  <!-- slider -->
  <div class="container slider">
    <div class="row">
      <div class="col-lg-12">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="assets/img/slider/silder1.png" alt="">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/img/slider/silder2.png" alt="">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/img/slider/silder3.png" alt="">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
      </div>
      </div>
    </div>
  </div>
  <!-- akhir slider -->

  <!-- content buku terpopuler -->
  <br><br><br>
  <div class="container baris-index">
    <div class="row">
      <div class="col-md-6 col-head-content">
        <h2 class="tanda">Buku Terpopuler</h2>
      </div>
      <div class="col-md-6 col-head-content text-right">
        <a href="">Lihat Semua</a>
      </div>
    </div>
    <div class="iklan">
      <img src="assets/img/side/kategoripopuler.jpg">
    </div>
    <div class="bungkus">
      <ul id="autoWidth" class="cs-hidden">

  <?php 
      $sql = "SELECT * FROM buku ORDER BY judul DESC LIMIT 7 ";
      $row = $koneksi -> prepare($sql);
      $row -> execute();

      $hasil = $row -> fetchAll();
      foreach ($hasil as $isi) {

        if ($isi['jumlah'] > 0) {
        
   ?>
         
          <li class="item-a">
            <div class="box">
              <a href="detail.php?id=<?php echo $isi['id_buku'];?>">
                <img src="assets/img/buku/<?php echo $isi['foto']; ?>" class="buku">
              </a>
                <h4 class="judul"><?php echo $isi['judul']; ?></h4>
                <h5 class="penulis"><?php echo $isi['penulis']; ?></h5>
                <h5 class="harga">Rp. <?php echo number_format($isi['harga']); ?></h5>  
            </div>
          </li>

  <?php } elseif($isi['jumlah'] == 0) { ?>
           <li class="item-a">
            <div class="box-habis">
              <a href="detail.php?id=<?php echo $isi['id_buku'];?>">
                <img src="assets/img/buku/<?php echo $isi['foto']; ?>" class="buku-habis">
              </a>
                <h4 class="judul"><?php echo $isi['judul']; ?></h4>
                <h5 class="penulis"><?php echo $isi['penulis']; ?></h5>
                <h5 class="harga">Rp. <?php echo number_format($isi['harga']); ?></h5>  
            </div>
            <div class="overlay-habis   ">
              <h2 class="text-habis">Habis</h2>
            </div>
          </li>
  <?php } } ?>
      </ul>
    </div>
  </div>

  <!-- content Novel -->
     <br><br><br>
    <div class="container baris-index">
      <div class="row">
        <div class="col-md-6 col-head-content">
          <h2 class="tanda">Novel Paling Laris</h2>
        </div>
        <div class="col-md-6 col-head-content text-right">
          <a href="">Lihat Semua</a>
        </div>
      </div>
      <div class="iklan">
        <img src="assets/img/side/side2.jpg">
      </div>
      <div class="bungkus">
        <ul id="autoWidth2" class="cs-hidden2">

    <?php 
        $sql = "SELECT * FROM buku WHERE id_kat = 2 ORDER BY judul ASC LIMIT 7 ";
        $row = $koneksi -> prepare($sql);
        $row -> execute();

        $hasil = $row -> fetchAll();
        foreach ($hasil as $isi) {

          if ($isi['jumlah'] > 0) {
          
     ?>
           
            <li class="item-a">
              <div class="box">
                <a href="detail.php?id=<?php echo $isi['id_buku'];?>">
                  <img src="assets/img/buku/<?php echo $isi['foto']; ?>" class="buku">
                </a>
                  <h4 class="judul"><?php echo $isi['judul']; ?></h4>
                  <h5 class="penulis"><?php echo $isi['penulis']; ?></h5>
                  <h5 class="harga">Rp. <?php echo number_format($isi['harga']); ?></h5>  
              </div>
            </li>

    <?php } elseif($isi['jumlah'] == 0) { ?>
             <li class="item-a">
              <div class="box-habis">
                <a href="detail.php?id=<?php echo $isi['id_buku'];?>">
                  <img src="assets/img/buku/<?php echo $isi['foto']; ?>" class="buku-habis">
                </a>
                  <h4 class="judul"><?php echo $isi['judul']; ?></h4>
                  <h5 class="penulis"><?php echo $isi['penulis']; ?></h5>
                  <h5 class="harga">Rp. <?php echo number_format($isi['harga']); ?></h5>  
              </div>
              <div class="overlay-habis   ">
                <h2 class="text-habis">Habis</h2>
              </div>
            </li>
    <?php } } ?>
        </ul>
      </div>
    </div>
  <!-- akhir content -->

    <!-- content Komik -->
     <br><br><br>
    <div class="container baris-index">
      <div class="row">
        <div class="col-md-6 col-head-content">
          <h2 class="tanda">Komik Paling Laris</h2>
        </div>
        <div class="col-md-6 col-head-content text-right">
          <a href="">Lihat Semua</a>
        </div>
      </div>
      <div class="iklan">
        <img src="assets/img/side/side3.jpg">
      </div>
      <div class="bungkus">
        <ul id="autoWidth3" class="cs-hidden3">

    <?php 
        $sql = "SELECT * FROM buku WHERE id_kat = 3 ORDER BY judul DESC LIMIT 7 ";
        $row = $koneksi -> prepare($sql);
        $row -> execute();

        $hasil = $row -> fetchAll();
        foreach ($hasil as $isi) {

          if ($isi['jumlah'] > 0) {
          
     ?>
           
            <li class="item-a">
              <div class="box">
                <a href="detail.php?id=<?php echo $isi['id_buku'];?>">
                  <img src="assets/img/buku/<?php echo $isi['foto']; ?>" class="buku">
                </a>
                  <h4 class="judul"><?php echo $isi['judul']; ?></h4>
                  <h5 class="penulis"><?php echo $isi['penulis']; ?></h5>
                  <h5 class="harga">Rp. <?php echo number_format($isi['harga']); ?></h5>  
              </div>
            </li>

    <?php } elseif($isi['jumlah'] == 0) { ?>
             <li class="item-a">
              <div class="box-habis">
                <a href="detail.php?id=<?php echo $isi['id_buku'];?>">
                  <img src="assets/img/buku/<?php echo $isi['foto']; ?>" class="buku-habis">
                </a>
                  <h4 class="judul"><?php echo $isi['judul']; ?></h4>
                  <h5 class="penulis"><?php echo $isi['penulis']; ?></h5>
                  <h5 class="harga">Rp. <?php echo number_format($isi['harga']); ?></h5>  
              </div>
              <div class="overlay-habis   ">
                <h2 class="text-habis">Habis</h2>
              </div>
            </li>
    <?php } } ?>
        </ul>
      </div>
    </div>
  <!-- akhir content -->




  <!-- java -->
  <script src="js/marvel/script.js" type="text/javascript"></script>

  

</body>
</html>