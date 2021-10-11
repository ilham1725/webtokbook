<?php
session_start();
include 'koneksi.php';

if (isset($_SESSION['akun'])) {

	$id_akun = $_SESSION['akun']['id_akun'];
	$nama = $_POST['nama'];
	$telepon = $_POST['telepon'];
	$username = $_POST['username'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];




	if (move_uploaded_file($tmp, 'assets/img/foto_akun/'.$foto)) {
		$sql = "UPDATE akun SET nama = '$nama', telepon = '$telepon', username = '$username', foto_akun = '$foto' WHERE id_akun = '$id_akun'";
		$row = $koneksi -> prepare($sql);
		$row -> execute();

			
			if($row){

				$sql2 = 'SELECT * FROM akun WHERE id_akun = ?';
				$row2 = $koneksi -> prepare($sql2);
				$row2 -> execute(array($id_akun));

				$jumRow = $row2 -> rowCount();

				if($jumRow > 0){
				$hasil = $row2 -> fetch();
				$_SESSION['newAkun'] = $hasil;
				unset($_SESSION['akun']);

				echo '<script>alert("berhasil");window.history.back();</script>';
				}	

				else{
				echo '<script>alert("Gagal");window.history.back();</script>';
				}
			}
	}
	
} else {
	$id_akun = $_SESSION['newAkun']['id_akun'];
	$nama = $_POST['nama'];
	$telepon = $_POST['telepon'];
	$username = $_POST['username'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];




	if (move_uploaded_file($tmp, 'assets/img/foto_akun/'.$foto)) {
		$sql = "UPDATE akun SET nama = '$nama', telepon = '$telepon', username = '$username', foto_akun = '$foto' WHERE id_akun = '$id_akun'";
		$row = $koneksi -> prepare($sql);
		$row -> execute();

			
			if($row){

				$sql2 = 'SELECT * FROM akun WHERE id_akun = ?';
				$row2 = $koneksi -> prepare($sql2);
				$row2 -> execute(array($id_akun));

				$jumRow = $row2 -> rowCount();

				if($jumRow > 0){
				$hasil = $row2 -> fetch();
				$_SESSION['newAkun'] = $hasil;
				unset($_SESSION['akun']);

				echo '<script>alert("berhasil");window.history.back();</script>';
				}	

				else{
				echo '<script>alert("Gagal");window.history.back();</script>';
				}
			}
	}
}



?>