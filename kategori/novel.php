<?php
	include 'header-kat.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <!--  <script>
	  $( function() {
	    $( "#slider-range" ).slider({
	      range: true,
	      min: 0,
	      max: 300000,
	      values: [ 0, 300000 ],
	      slide: function( event, ui ) {
	        $( "#amount" ).val( "Rp." + ui.values[ 0 ] + " - Rp." + ui.values[ 1 ] );
	      }
	    });
	    $( "#amount" ).val( "Rp." + $( "#slider-range" ).slider( "values", 0 ) +
	      " - Rp." + $( "#slider-range" ).slider( "values", 1 ) );
	  } );
    </script> -->
</head>
<body>
 
	<!-- <div class="container mt-3">
		<p>
	  		<label for="amount">Price range:</label>
	  		<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
		</p>
		<div id="slider-range"></div>
	</div> -->
	
				<?php
				$sql = 'SELECT * FROM kategori where id_kat = 2';
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

		        $sql = 'SELECT * FROM buku WHERE id_kat = 2';
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