<?php 
session_start();
include 'koneksi.php';


if(isset($_SESSION['akun'])){
	$id_akun2 = $_SESSION['akun']['id_akun'];
	$foto2 = $_SESSION['akun']['foto_akun'];

	$sql = "UPDATE akun SET foto_akun = 0 WHERE id_akun = $id_akun2 ";
	$row = $koneksi -> prepare($sql);
	$row -> execute();
	unset($_SESSION['akun']['foto_akun']);

	echo 	"<script>window.history.back('berhasil');</script>";

} else if(isset($_SESSION['newAkun'])){
	$id_akun = $_SESSION['newAkun']['id_akun'];
	$foto = $_SESSION['newAkun']['foto_akun'];

	$sql = "UPDATE akun SET foto_akun = 0 WHERE id_akun = $id_akun ";
	$row = $koneksi -> prepare($sql);
	$row -> execute();
	unset($_SESSION['newAkun']['foto_akun']);

	echo 	"<script>window.history.back('berhasil');</script>";
}


?>