<?php
	include 'header-kat.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
				<?php
				$sql = 'SELECT * FROM kategori where id_kat = 11';
		        $row = $koneksi -> prepare($sql);
		        $row -> execute();
		        $hasil = $row -> fetchAll();
		        foreach ($hasil as $isi ) {
		        	
		        
				?>

	<div class="container content">
		<h2 class="mt-3">Kategori <?php echo $isi['nm_kat'];?></h2>
		<?php }?>
		<div class="row">
			
		
				<?php

		        $sql = 'SELECT * FROM buku WHERE id_kat = 11';
		        $row = $koneksi -> prepare($sql);
		        $row -> execute();

		        $jumRow = $row -> rowCount();
		        if ($jumRow > 0) {

		        $hasil = $row -> fetchAll();
		        foreach ($hasil as $isi ) {
		        	
		        



		        	
		        ?>




		      <div class="col-xs-2 col-md-2 mt-3" >
		          <a href="../detail.php?id=<?php echo $isi['id_buku'];?>">
		          <img class="card-img-top .d-none .d-sm-block" src="../assets/img/buku/<?php echo $isi['foto'];?>" alt="Card image cap"></a>
		          <div class="card-body ">
		            <h5 class="card-title" style="font-size: 0.7em;"><b><?php echo $isi['judul']; ?></b></h5>
		            <p class="card-text" style="font-size: 0.6em"><?php echo $isi['penulis']; ?></p>
		            <p class="card-text" style="font-size: 0.8em">Rp. <?php echo number_format($isi['harga']); ?></p>
		          </div> 
		      </div>
		      <?php }} else {
		      	
		      	echo "<center><h1>Maaf, Buku Belum Tersedia</h1></center>";
		      } ?>
		</div>
	</div>


</body>
</html>