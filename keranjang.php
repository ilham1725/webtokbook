
<?php 
include 'header.php';

if(empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])){
	echo	'<script>alert("Silahkan Berbelanja Terlebih Dahulu");window.history.back()</script>';
	die();
}
// echo "<pre>";
// 		print_r($_SESSION);
// 	echo "</pre>";
?>

       
        <!-- End Sidebar -->
<div class="container">
<div class="col-md-12" >
	
		
 			<h2 class="text-center font-weight-bold m-4">Keranjang</h2>
 			<hr>
 			<div class="table-responsive">
	 			<table class="table table-bordered table-striped">
	 				<thead>
	 					<tr>
	 						<th>No</th>
	 						<th>Judul</th>
	 						<th>Harga</th>
	 						<th>Jumlah</th>
	 						<th>Subharga</th>
	 						<th>Aksi</th>
	 					</tr>
	 				</thead>
	 				<tbody>
	 					<?php $no = 1;?>
	 					<?php foreach ($_SESSION['keranjang'] as $id_buku => $jumlah) {
	 						$sql = "SELECT * FROM buku WHERE id_buku = '$id_buku'";
	 						 $row = $koneksi -> prepare($sql);
						     $row -> execute();
						     $hasil = $row -> fetchAll();
						     foreach ($hasil as $pecah) {
						     	# code...
						     
	 						$subharga = $pecah['harga']*$jumlah;

	 					 ?>
	 					<tr>
	 						<td><?php echo $no;?></td>
	 						<td><?php echo $pecah['judul'];?></td>
	 						<td>Rp. <?php echo number_format($pecah['harga']);?></td>
	 						<td><?php echo $jumlah;?></td>
	 						<td>Rp. <?php echo number_format($subharga);?></td>
	 						<td><a href="proses/hapus_keranjang.php?id=<?php echo $pecah['id_buku']; ?>" class="btn btn-danger">Hapus</a></td>
	 					</tr>
	 				<?php $no++; }}?>
	 				</tbody>

	 			</table>
	 		</div>
 			<a href="index.php" class="btn"> Lanjutkan Berbelanja</a>
 			<a href="checkout.php" class="btn btn-primary">Checkout</a>
 		</div>
     
</div>
<!-- ini footer -->
<footer class="container-fluid " style="margin-top: 10%; margin-bottom: 5%" >
<div class="row">

  <div class="col-md-12"> <h9 style="color: black;"><center>Copyrights © 2021 Ilham Gadang Murakabi. All Rights Reserved </h9></div>  

</div>
</div>
</footer>

</body>
</html>