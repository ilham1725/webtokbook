<?php
error_reporting(0);
include '../../../../koneksi.php';



$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$username = $_POST['username'];

$akses = $_POST['akses'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$proses =$_POST['proses'];
$password = $_POST['password'];
$password2 = $_POST['password2'];




if ($proses === 'tambah') {
	
	if($password === $password2){
		if(move_uploaded_file($tmp, '../../../../assets/img/foto_akun/'.$foto)){

			$sql = "INSERT INTO akun (nama,telepon,username,password,akses,foto_akun) VALUES ('$nama','$telepon','$username',md5('$password'),'$akses','$foto')";
			$row = $koneksi -> prepare($sql);
			$row -> execute(array($nama,$telepon,$username,$password,$akses,$foto));

			echo '<script>alert("Berhasil Tambah Data");window.location="../../index.php?page=akun"</script>';


		}
	} else {
		echo "<script>alert('Password Tidak Sinkron');window.history.back();</script>";
	}

} else if ($proses === 'update') {
	$id_akun = $_POST['id_akun'];

	if(move_uploaded_file($tmp, '../../../../assets/img/foto_akun/'.$foto)){
		

		
		$sql = "UPDATE akun SET nama = '$nama', telepon = '$telepon', username = '$username', password = md5('$password'), akses = '$akses', foto_akun = '$foto' WHERE id_akun = '$id_akun'";
		

		$row = $koneksi -> prepare($sql);
		$row -> execute(array($nama,$telepon,$username,$password,$akses,$foto));

		echo '<script>alert("Berhasil Edit Data");window.location="../../index.php?page=akun"</script>';
	} else {

		$sql = "UPDATE akun SET nama = '$nama', telepon = '$telepon', username = '$username', password = md5('$password'), akses = '$akses' WHERE id_akun = '$id_akun'";
		

		$row = $koneksi -> prepare($sql);
		$row -> execute(array($nama,$telepon,$username,$password,$akses));

		echo '<script>alert("Berhasil Edit Data");window.location="../../index.php?page=akun"</script>';
	}

} else if($proses === 'ganti'){

	if($password === $password2){

		$id_akun = $_GET['id'];
		$ganti_pass = $_POST['ganti_pass'];

		$sql = "SELECT * FROM akun WHERE id_akun = $id_akun AND password = md5($ganti_pass)";
		$row = $koneksi -> prepare($sql);
		$row -> execute(array($id_akun,$ganti_pass));

		$jumrow = $row -> rowCount();

		if ($jumrow > 0) {

			$sql = "UPDATE akun SET password = md5($password) WHERE id_akun = $id_akun";
			$row = $koneksi -> prepare($sql);
			$row -> execute(array($password,$id_akun));

			echo "<script>alert('Password Berhasil Diubah');window.location='../../index.php?page=akun'</script>";
			
		}

	} else {
		echo "<script>alert('Password Gagal Diubah');window.history.back();</script>";
	}




} else {

		$id_akun = $_GET['id'];

		$sql = "DELETE FROM akun WHERE id_akun = '$id_akun'";
		$row = $koneksi -> prepare($sql);
		$row -> execute(array($id_akun));

		echo '<script>alert("Berhasil hapus");window.location="index.php?page=akun"</script>';
} 








// echo "<pre>";
// 		print_r($_POST);
// echo "</pre>";

?>