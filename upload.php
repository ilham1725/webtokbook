<?php
	 include 'header.php';
	// unset($_SESSION['keranjang']);
	// echo "<pre>";
	// 	print_r($_SESSION);
	// echo "</pre>";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="container">
		<h2 class="text-center font-weight-bold mt-4">Upload Bukti</h2>
 		<hr>
		<div class="row justify-content-center">
			<div class="col-lg-4 col-centered">
				<div class="custom-file mt-3">
					<form method="post" enctype="multipart/form-data">
					  <input type="file" class="form-control" name="foto" required="required">
					  <button name="upload" class="btn btn-primary btn-block mt-3"> Upload </button>
					  <a href="selesai.php" class="btn btn-block btn-danger"> Upload Nanti</a>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php
		if (isset($_POST['upload'])) { 

			
			$id_transaksi = $_GET['id'];
			$foto = $_FILES['foto']['name'];
			$tmp = $_FILES['foto']['tmp_name'];

			if (move_uploaded_file($tmp, "assets/img/foto_upload/".$foto)) {
				
				$sql = "UPDATE transaksi SET foto_upload = '$foto', status = 'menunggu acc admin' WHERE id_transaksi = '$id_transaksi' ";
				$row = $koneksi -> prepare($sql);
				$row -> execute();

				unset($_SESSION['id_transaksi']); 

				$sql = "SELECT foto_upload FROM transaksi WHERE id_transaksi = '$id_transaksi'";
				$row = $koneksi -> prepare($sql);
				$row -> execute();
				$hasil = $row -> fetch();
				?>
				
								
						<div class="container container-akun mt-5">
							<div class="row justify-content-center">
								<div class="col-lg-6">
						  			<img src="assets/img/foto_upload/<?php echo $hasil['foto_upload'];?>" alt="Avatar" class="materialboxed img-akun" style="max-width:100%">
						  			<a href="transaksi.php" onClick="confirm('Apakah kamu yakin gambar/bukti sudah benar?')" class="btn btn-primary text-left mt-4"> Upload </a>
						  		</div>
							</div>
						</div>





				

		 <?php } } ?>




</body>
</html>