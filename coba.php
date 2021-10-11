<?php
  include 'header.php';
  include 'koneksi.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Marvel Slider</title>
<!-- <link rel="stylesheet" href="assets/css/slider/style.css"/> -->
<!-- <link rel="stylesheet" type="text/css" href="assets/css/slider/lightslider.css"/> -->
<!--Jquery-->


<style type="text/css">
  .wrap-card{
    width: 160px;
    height: 340px;
  
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    top: 0;
    position: relative;
  }
  .gambar-iklan{
  
    position: absolute;
  }
  .row{
    width: 80%;
    margin-left: 180px;
  }

  /*sold*/
  .habis {
  position: relative;
  }
  .overlay-index{
    margin: auto;
    position: absolute;
    top: -132px;
    bottom: 0;
    left: 0;
    right: 0;
      height: 100%;
      width: 100%;
      opacity: 1;
      transition: .5s ease;
      background-color: rgb(0,0,0);
      background-color: rgba(0,0,0, 0.9);
  }
  .habis:hover .overlay-index{
    opacity: 0;
  }

  .overlay-index img{
    padding-top: 20px;
  }

</style>

</head>
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
  
  <!-- akhir slider -->
  <div class="container content">
    <div class="gambar-iklan mt-1">
        <img class="iklan" src="assets/img/side/kategoripopuler.jpg">
      </div>
    <div class="row">
      
    <ul id="autoWidth" class="cs-hidden">
    <?php
    $sql = "SELECT * FROM buku LIMIT 7";
    $row = $koneksi -> prepare($sql);
    $row -> execute();
    $hasil = $row -> fetchAll();
    foreach ($hasil as $isi) {
    if ($isi['jumlah'] == 0) { ?>
          <li class="item-a">
           <div class="wrap-card mt-1 habis"> 
                <img class="card-img-top .d-none .d-sm-block" src="assets/img/buku/<?php echo $isi['foto'];?>" alt="Card image cap">
                <div class="card-body ">
                  <h5 class="card-title" style="font-size: 0.7em;"><b><?php echo $isi['judul']; ?></b></h5>
                  <p class="card-text" style="font-size: 0.6em"><?php echo $isi['penulis']; ?></p>
                  <p class="card-text" style="font-size: 0.8em">Rp. <?php echo number_format($isi['harga']); ?></p>
                 </div>
                 <div class="overlay-index">
                   <a href="detail.php?id=<?php echo $isi['id_buku'];?>">
                    <img src="assets/img/logo/sold.png" class="habis1"> 
                  </a>
                </div>
            </div>
          </li>
    <?php } else{ ?>
       <li class="item-a">
          <div class="wrap-card mt-1">
                <a href="detail.php?id=<?php echo $isi['id_buku'];?>">
                <img class="card-img-top card-active .d-none .d-sm-block" src="assets/img/buku/<?php echo $isi['foto'];?>" alt="Card image cap"></a>
                <div class="card-body ">
                  <h5 class="card-title" style="font-size: 0.7em;"><b><?php echo $isi['judul']; ?></b></h5>
                  <p class="card-text" style="font-size: 0.6em"><?php echo $isi['penulis']; ?></p>
                  <p class="card-text" style="font-size: 0.8em">Rp. <?php echo number_format($isi['harga']); ?></p>
                </div>
        
          </div>
        </li>
      
    <?php } } ?>
    </ul>
  </div>
</div>
  
  
<script src="js/marvel/script.js" type="text/javascript">
</script>
<script>
   $('.carousel').carousel()
    $('.carousel').carousel({
      interval: 2000
    })  ;                                                                        
</script>
</body>
</html>

  
nWOQnVUtf4QYcK
<?php
// //echo'sukses' -> Koneksi Database;
//   $u_mysql='epiz_27615669';
//   $p_mysql='nWOQnVUtf4QYcK';
//   $koneksi= new PDO('mysql:host=sql103.epizy.com;dbname=epiz_27615669_tokbuk',$u_mysql,$p_mysql);
//echo 'sukses';
?>






























