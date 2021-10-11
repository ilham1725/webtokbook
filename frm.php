
<?php 
require 'koneksi.php';

?>
	</div>
	<center>
	<form method="POST" enctype="multipart/form-data" action="proses/frm_proses.php">
	<table id="data2">
		<tr>
			<th colspan="3">Isilah Data-data berikut</th>
		</tr>
		<tr>
			<td>judul</td>
			<td>:</td>
			<td><input class="input" type="text" name="judul" > </td>
		</tr>
		<tr>
			<td>kategori</td>
			<td>:</td>
			<td>
			<select name="id_kat">
 									<option>Pilih Kategori</option>

		<?php
				   $sql = 'SELECT * FROM kategori';
				        $row = $koneksi -> prepare($sql);
				        $row -> execute();
				        $hasil = $row -> fetchAll();
				  foreach ($hasil as $isi ) {
				  	?>
 									<option value="<?php echo $isi['id_kat'];?>">
 										<?php echo $isi['nm_kat'];?>		
 									</option>
 					<?php } ?>
 								</select>
 							</td>
 							
 							
 				
 		</tr>
		<tr>
			<td>penulis</td>
			<td>:</td>
			<td><input type="text" name="penulis"></td>
		</tr>
		<tr>
			<td>detail</td>
			<td>:</td>
			<td><textarea name="detail"></textarea></td>
		</tr>
		<tr>
			<td>jumlah</td>
			<td>:</td>
			<td><input type="text" name="jumlah"></td>
		</tr>
		<tr>
			<td>harga</td>
			<td>:</td>
			<td><input type="text" name="harga"></td>
		</tr>
		<tr>
			<td>masukkan gambar</td>
			<td>:</td>
			<td><input type="file" name="foto"> </td>
		</tr>
		<tr>
			<td colspan="3">
				
				<button class="tambah" type="submit"> tambah Data</button>
				
			</td>
		</tr>
	</table>
	</form>
	</center>
	
</div>