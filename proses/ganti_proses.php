<?php
include '../koneksi.php';
session_start();


if (!isset($_SESSION['akun']['id_akun'])) {
	die("Error");
}


$id_akun = $_SESSION['akun']['id_akun'];
$pass_lama = $_POST['pass_lama'];
$pass_baru = $_POST['pass_baru'];
$pass_baru2 = $_POST['pass_baru2'];

$sql = "SELECT * FROM akun WHERE id_akun = $id_akun AND password = md5($pass_lama)";
$row = $koneksi -> prepare($sql);
$row -> execute(array($id_akun,$pass_lama));

$jumrow = $row -> rowCount();

if ($jumrow > 0) {

	if ($pass_baru === $pass_baru2) {
		$sql = "UPDATE akun SET password = md5($pass_baru) WHERE id_akun = $id_akun";
		$row = $koneksi -> prepare($sql);
		$row -> execute();

		echo "<script>alert('Berhasil Diubah');window.location='../index.php'</script>";
	}
	else {
		echo "<script>alert('Password Tidak Sinkron');window.history.back();</script>";
	}
	
} else {
	echo "<script>alert('Password Lama Salah');window.history.back();</script>";
}








?>