






<body onload="window.print()">
	<div class="content">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-11">
					<div class="card">
						<div class="header">
							<h3 class="title">LAPORAN INVOICE</h3>
							<hr>
						</div>
						<table class="table table-stiped border-bottom">
							<thead>
		                         <th>NO</th>
		                         <th>ID TRANSAKSI</th>
		                         <th>NAMA PEMBELI</th>
		                         <th>TANGGAL TRANSAKSI</th>
		                         <th>TOTAL BELANJA</th>
		                         <th>ALAMAT TUJUAN</th>
		                    </thead>
		                    <tbody>
		                    	<?php 

		                    		$no = 1;
		                    		$id_transaksi = $_GET['id'];
		                    		$sql = "SELECT * FROM transaksi INNER JOIN akun ON akun.id_akun = transaksi.id_akun WHERE id_transaksi = '$id_transaksi'";
		                    		$row = $koneksi -> prepare($sql);
		                    		$row -> execute();
		                    		$hasil = $row -> fetch();

		                    		if($hasil['status'] !== 'selesai'){
		                    			echo "<script>alert('Sesi belum terpenuhi');window.history.back();</script>";
		                    			die();
		                    		}
		                    		

		                    		// echo "<pre>";
		                    		// 	print_r($hasil);
		                    		// echo "</pre>";
		                    	?>
		                    	<tr>
	                                 <td><?php echo $no; ?></td>
	                                 <td><?php echo $hasil['id_transaksi']; ?></td>
	                                 <td><?php echo $hasil['nama']; ?></td>
	                                 <td><?php echo $hasil['tanggal_transaksi']; ?></td>
	                                 <td>Rp. <?php echo number_format($hasil['biaya']); ?></td>
	                                 <td><?php echo $hasil['alamat']; ?></td>                                          
	                            </tr>
		                    </tbody>
		                </table> 
						
		                <div class="container">
							<div class="row">
								<div class="col-md-11">
									<p class="category">RINCIAN : </p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-11">
									<p class="category">NAMA PEMBELI : <?php echo $hasil['nama']; ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-11">
									<p class="category">TOTAL BAYAR : Rp. <?php echo number_format($hasil['biaya']); ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-11">
									<p class="category">STATUS : <?php echo $hasil['status']; ?> BY ADMIN 1</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<p class="category">BUKTI FOTO :></p>
								</div>
								<div class="col-md-8" style="margin-bottom: 30px;">
									<img src="../../assets/img/foto_upload/<?php echo $hasil['foto_upload']; ?>" style="max-width: 150px;">
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php 

 die();
?>