<?php
 	include 'header.php';
 	$id = $_GET['id'];
?>
<head>
	<style type="text/css">
		
  .foto:hover{
  box-shadow:  5px 5px 5px 5px #888888;
  }
	</style>
</head>
<body>
	<?php
		$sql = "SELECT * FROM buku WHERE id_buku = $id";
		$row = $koneksi -> prepare($sql);
        $row -> execute();
        $hasil = $row -> fetchAll();
        foreach ($hasil as $isi ) {
	?>

	<!-- content -->
	<div class="container wrap-detail mt-5">
		<div class="row">
			<div class="col-lg-3 col-foto-detail">
				<img src="assets/img/buku/<?php echo $isi['foto'];?>" class="foto">
			</div>
			<div class="col-lg-5 mt-3">
				<h1><?php echo $isi['judul'];?>.</h1>
				<h5><?php echo $isi['penulis'];?></h5>
				
			</div>


			<div class="col-lg-4 mt-3">

				<!-- Harga -->
				<div class="row">
					<div class="alert alert-secondary text-center" style="width: 500px;">Harga : Rp. <?php echo number_format($isi['harga']);?></div>
				</div>

				<!-- STOK -->
				<?php if($isi['jumlah'] == '0'){ ?>
					<div class="row">
						<div class="alert alert-danger text-center" style="width: 500px;">Stok : <?php echo $isi['jumlah'];?> <br> <p style="font-size: 10px; color: red; padding-top: ">Habis</p></div>
					</div>
				<?php } else if($isi['jumlah'] < '10'){ ?>
					<div class="row">
						<div class="alert alert-warning text-center" style="width: 500px; color: orange;">Stok : <?php echo $isi['jumlah'];?></div>
					</div>
				<?php } else if($isi['jumlah'] >= '10'){ ?>
					<div class="row">
						<div class="alert alert-success text-center" style="width: 500px; color: green;">Stok : <?php echo $isi['jumlah'];?></div>
					</div>
				<?php } ?>

				<!-- KERANJANG -->
				<?php if ($isi['jumlah'] == '0') { ?>
					<form method="post">
					<div class="row">	
						<input class="form-control input-group" min="1" max="<?php echo $isi['jumlah']; ?>" type="number" name="jumlah" disabled="disabled">
						<button class="btn btn-light btn-block mt-2" name="proses" value="keranjang" disabled="disabled">Add To Cart</button>

					</div>
					<hr>
				</form>	
				<?Php } else { ?>
				<form method="post">
					<div class="row">	
						<input class="form-control input-group" min="1" max="<?php echo $isi['jumlah']; ?>" type="number" name="jumlah" placeholder="Masukkan Jumlah Beli">
						<button class="btn btn-light btn-block mt-2" name="proses" value="keranjang">Add To Cart</button>
					</div>
					<hr>
				</form>
				<?php } ?>
				<?php 
				if (isset($_POST['proses'])) {
					
					$jumlah = $_POST['jumlah'];

					$_SESSION['keranjang'][$id] = $jumlah;

					echo "<script>alert('New Item Added');window.history.back();</script>";
				}

				?>

					<div class="row mt-2">
						<?php if ($isi['jumlah'] == '0') { ?>
							<button class="btn btn-info btn-block" readonly>Buy Now</button>
							
						<?php } else { ?>	
							<a href="proses/keranjang_proses.php?id=<?php echo $isi['id_buku']; ?>" class="btn btn-primary btn-block">Buy Now</a>
						<?php } ?>
					</div>
				
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-12">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color: black !important;">Detail</a>
				  </li>
				</ul>
				<div class="tab-content mt-3" id="myTabContent">
					
					<?php
						
						
						
						// memecah string input berdasarkan karakter '\r\n\r\n'
						$pecah = explode("\r\n\r\n", $isi['detail']);
						 
						// string kosong inisialisasi
						$text = "";
						 
						// untuk setiap substring hasil pecahan, sisipkan <p> di awal dan </p> di akhir
						// lalu menggabungnya menjadi satu string utuh $text
						for ($i=0; $i<=count($pecah)-1; $i++)
						{
						   $part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p>", $pecah[$i]);
						   $text .= $part;
						}
						 
						// menampilkan outputnya
					
						  
						?>
				  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><?php echo $text; ?></div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<?php }?>

	<!-- rekomendasi -->

	<div class="container content">
		<?php  if (isset($_SESSION['akun']) || isset($_SESSION['newAkun'])) { ?>
			<h2>Rekomendasi Untukmu</h2>
		<?php } else { ?>
			<h2>Rekomendasi Dari TokBook</h2>
		<?php } ?>
		
		<div class="row">
			<ul id="autoWidth" class="cs-hidden">
			
			


        <?php

        if (isset($_SESSION['akun']) || isset($_SESSION['newAkun'])) {
        
        
	        if (isset($_SESSION['akun']) && !isset($_SESSION['newAkun'])) {
	        	$id_akun = $_SESSION['akun']['id_akun'];
	        } elseif (isset($_SESSION['newAkun']) && !isset($_SESSION['akun'])) {
	        	$id_akun = $_SESSION['newAkun']['id_akun'];
	        }
	          // ambil data buku berdasarkan id_buku terbanyak yang di beli user
	        $ambil = $koneksii -> query("SELECT id_buku, count(id_buku)as jumlah FROM pembelian where id_akun = '$id_akun'  GROUP BY id_buku ORDER BY jumlah DESC limit 1;");
	        $hasil_buku = $ambil -> fetch_assoc();

	        $id_buku = $hasil_buku['id_buku'];

	        // ambil data kategori yang akan dimunculkan 
	        $ambil1 = $koneksii -> query("SELECT id_kat from buku WHERE id_buku = '$id_buku'");
	        $hasil_kategori = $ambil1 -> fetch_assoc();

	        $id_kat = $hasil_kategori['id_kat'];

	        // kemudian tampilkan data buku  berdasarkan kategori
	       $sql = "SELECT * FROM buku WHERE id_kat = $id_kat ORDER BY judul ASC LIMIT 10";
	       $row = $koneksi -> prepare($sql);
	       $row -> execute();
	       $hasil_tampil = $row -> fetchAll();

	        foreach ($hasil_tampil as $isi ) { ?>
	          
	        	<li class="item-a">
	             <div class="mt-1 mb-5 wrap-rekomendasi">
	             	<a href="detail.php?id=<?php echo $isi['id_buku'];?>">
	                <img class="card-img-top" src="assets/img/buku/<?php echo $isi['foto'];?>" alt="Card image cap">
	                
	               	  <div class="overlay-rekomendasi">
		                 <div class="text">
		                  <h5 class="card-title"><b><?php echo $isi['judul']; ?></b></h5>
		                  <p class="card-text"><?php echo $isi['penulis']; ?></p>
		                  <p class="card-text">Rp. <?php echo number_format($isi['harga']); ?></p>
		              	 </div>
		              </div>
		          	</a>
	                
	              
	            </div>
	        </li>
	    <?php } } else { ?>

	    <?php 
	       $sql = "SELECT * FROM buku LIMIT 10";
	       $row = $koneksi -> prepare($sql);
	       $row -> execute();
	       $hasil_tampil = $row -> fetchAll();

	        foreach ($hasil_tampil as $isi ) { ?>
	          
	        	<li class="item-a">
	             <div class="mt-1 mb-5 wrap-rekomendasi">
	             	<a href="detail.php?id=<?php echo $isi['id_buku'];?>">
	                <img class="card-img-top" src="assets/img/buku/<?php echo $isi['foto'];?>" alt="Card image cap">
	                
	               	  <div class="overlay-rekomendasi">
		                 <div class="text">
		                  <h5 class="card-title"><b><?php echo $isi['judul']; ?></b></h5>
		                  <p class="card-text"><?php echo $isi['penulis']; ?></p>
		                  <p class="card-text">Rp. <?php echo number_format($isi['harga']); ?></p>
		              	 </div>
		              </div>
		          	</a>
	                
	              
	            </div>
	        </li>


	    <?php } } ?>
					
		</ul>
	</div>
</div>

	<!-- akhir rekomendasi -->

 <?php
	// include 'footer.php';
?>
<script src="js/marvel/script.js" type="text/javascript"></script>

</body>
</html>