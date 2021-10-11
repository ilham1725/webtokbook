<?php
	
	if (!isset($_POST['search']) || empty($_POST['search'])) {

		echo "<script>alert('Ooopps u cant do it!');window.history.back();</script>";
		die();

	}

	include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<div class="container content">
		<h3 class="mt-3 border-bottom border-info">Result : <?php echo $_POST['search']; ?></h3>
		<div class="row">

	        <?php
	        $search = $_POST['search'];

	        $sql = "SELECT * FROM buku WHERE penulis LIKE '%".$search."%' OR judul LIKE '%".$search."%'";
	        $row = $koneksi -> prepare($sql);
	        $row -> execute();
	        $hasil = $row -> fetchAll();
	        foreach ($hasil as $isi ) {
	        	if ($_POST['search'] === $isi['judul']) {
	        		

	        ?>



	      <div class="col-xs-2 col-md-2 mt-2">
	          <a href="detail.php?id=<?php echo $isi['id_buku'];?>">
	          <img class="card-img-top .d-none .d-sm-block" src="assets/img/buku/<?php echo $isi['foto'];?>" alt="Card image cap"></a>
	          <div class="card-body ">
	            <h5 class="card-title" style="font-size: 0.7em;"><b><?php echo $isi['judul']; ?></b></h5>
	            <p class="card-text" style="font-size: 0.6em"><?php echo $isi['penulis']; ?></p>
	            <p class="card-text" style="font-size: 0.8em">Rp. <?php echo number_format($isi['harga']); ?></p>
	          </div>
	        
	      </div>
	      <?php }else{ ?>

	      <div class="col-xs-2 col-md-2 mt-2">
	          <a href="detail.php?id=<?php echo $isi['id_buku'];?>">
	          <img class="card-img-top .d-none .d-sm-block" src="assets/img/buku/<?php echo $isi['foto'];?>" alt="Card image cap"></a>
	          <div class="card-body ">
	            <h5 class="card-title" style="font-size: 0.7em;"><b><?php echo $isi['judul']; ?></b></h5>
	            <p class="card-text" style="font-size: 0.6em"><?php echo $isi['penulis']; ?></p>
	            <p class="card-text" style="font-size: 0.8em">Rp. <?php echo number_format($isi['harga']); ?></p>
	          </div>
	        
	      </div>



	    <?php  } }?>
	    </div>
	</div>

</body>
</html>