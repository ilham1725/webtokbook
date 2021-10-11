<?php
	include 'header.php';
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
		<h2 class="text-center font-weight-bold mt-4">Riwayat Belanja</h2>
		 <hr>
		<ul class="nav nav-tabs" id="myTab" role="tablist">
		  <li class="nav-item">
		    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Proses</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Selesai</a>
		  </li>
		  
		</ul>
		<div class="tab-content" id="myTabContent">
		  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
		  	
		  	<div class="container mt-4">
				
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">
							  <table class="table  table-striped">
							  	  <thead>
								    <tr>
								      <th>No</th>
								      <th>Kode Transaksi</th>
								      <th>Tanggal Transaksi</th>
								      <th>Total Belanja</th>
								      <th>Alamat</th>
								      <th><center>Bukti</center></th>
								      <th>Status</th>
								      <th>Aksi</th>
								    </tr>
								  </thead>
								  <tbody>

					<?php
						$no = 1;
						if (isset($_SESSION['akun']) && !isset($_SESSION['newAkun'])) {

							$id_akun = $_SESSION['akun']['id_akun'];

						} else if(isset($_SESSION['newAkun']) && !isset($_SESSION['akun'])) {

							$id_akun = $_SESSION['newAkun']['id_akun'];
						}

						$sql = "SELECT * FROM transaksi WHERE id_akun = $id_akun AND status = 'proses' OR status = 'Menunggu Acc Admin' OR status = 'Sedang Di Kirim'" ; 
						$row = $koneksi -> prepare($sql);
						$row -> execute();
						$hasil = $row -> fetchAll();
						foreach ($hasil as $isi) {
							if ($isi['id_transaksi'] == 0 ) {
								echo "tidak ada";
							} else {
							
						

					?>			  





								 
								    <tr>
								      <th><?php echo $no; ?></th>
								      <td><?php echo $isi['id_transaksi']; ?></td>
								      <td><?php echo $isi['tanggal_transaksi']; ?></td>
								      <td>Rp. <?php echo number_format($isi['biaya']); ?></td>
								      <td><?php echo $isi['alamat']; ?></td>

								  <?php if(empty($isi['foto_upload'])){ ?>
								  
								      <td><center><a href="upload.php?id=<?php echo $isi['id_transaksi']; ?>" class="btn btn-primary"> Upload </a></center></td>

								  <?php } else { ?>

								  	  <td>Berhasil Upload</td>
								  <?php } ?>
								      <td><?php echo $isi['status']; ?></td>
								  <?php if($isi['status'] == 'Sedang Di Kirim'){ ?>
								      <td>
								      	<form method="post">
								      		<input type="hidden" name="id_transaksi" value="<?php echo $isi['id_transaksi']; ?>">
								      		<button name="proses" class="btn btn-success btn-block" value="Selesai">Selesai</button>
								      	</form>
								      </td>
								  <?php } else { ?>
								  	  <td>
								  	  	<button disabled="disabled" class="btn btn-success btn-block">Selesai</button>
								  	  </td>
								  	<?php }?>
								    </tr>
								    <?php $no++; }} ?>
								  </tbody>			  
							  </table>
						</div>
					</div>
				</div>
			</div>
			<?php
			if (isset($_POST['proses'])) {
				$hasil = $_POST['proses'];
				$id_transaksi = $_POST['id_transaksi'];
			 	$koneksii -> query("UPDATE transaksi SET status = '$hasil' WHERE id_transaksi = '$id_transaksi'");

			 	echo "<script>alert('Berhasil');window.location='transaksi.php';</script>";
			 	
			 } 
			?>

		  </div>
		  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
		  	
		  	<div class="container mt-4">
				
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">
							  <table class="table  table-striped">
							  	  <thead>
								    <tr>
								      <th>No</th>
								      <th>Kode Transaksi</th>
								      <th>Tanggal Transaksi</th>
								      <th>Total Belanja</th>
								      <th>Alamat</th>
								      <th><center>Bukti</center></th>
								      <th>Status</th>
								    </tr>
								  </thead>
								  <tbody>

					<?php
						$no = 1;
						if (isset($_SESSION['akun']) && !isset($_SESSION['newAkun'])) {

							$id_akun = $_SESSION['akun']['id_akun'];

						} else if(isset($_SESSION['newAkun']) && !isset($_SESSION['akun'])) {

							$id_akun = $_SESSION['newAkun']['id_akun'];
						}

						$sql = "SELECT * FROM transaksi WHERE id_akun = $id_akun AND status = 'selesai' OR status = 'Ditolak'";
						$row = $koneksi -> prepare($sql);
						$row -> execute();
						$hasil = $row -> fetchAll();
						foreach ($hasil as $isi) { ?>
							<?php if ($isi['status'] == 'Ditolak') { ?>
								
								  <tr style="background-color: #ffa6a6;">
								      <th><?php echo $no; ?></th>
								      <td><?php echo $isi['id_transaksi']; ?></td>
								      <td><?php echo $isi['tanggal_transaksi']; ?></td>
								      <td>Rp. <?php echo number_format($isi['biaya']); ?></td>
								      <td><?php echo $isi['alamat']; ?></td>

								  <?php if(empty($isi['foto_upload'])){ ?>
								  
								      <td>Belum Upload</td>

								  <?php } else { ?>

								  	  <td>Sudah Upload</td>
								  <?php } ?>
								      <td><?php echo $isi['status']; ?></td>
								    </tr>
	


							<?php $no++;} else { ?>
							
						

							  





								 
								    <tr style="background-color: #a6ffbe;">
								      <th><?php echo $no; ?></th>
								      <td><?php echo $isi['id_transaksi']; ?></td>
								      <td><?php echo $isi['tanggal_transaksi']; ?></td>
								      <td>Rp. <?php echo number_format($isi['biaya']); ?></td>
								      <td><?php echo $isi['alamat']; ?></td>

								  <?php if(empty($isi['foto_upload'])){ ?>
								  
								      <td><center><a href="upload.php?id=<?php echo $isi['id_transaksi']; ?>" class="btn btn-primary"> Upload </a></center></td>

								  <?php } else { ?>

								  	  <td>Sudah Upload</td>
								  <?php } ?>
								      <td><?php echo $isi['status']; ?></td>
								    </tr>
								    <?php $no++; }} ?>
								  </tbody>			  
							  </table>
						</div>
					</div>
				</div>
			</div>
		  </div>
		  
		</div>
	</div>
	

</body>
</html>

