<?php
include '../../../../koneksi.php';

$id_kat = $_POST['id_kat'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$detail = $_POST['detail'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$proses =$_POST['proses'];

$id_buku = $_POST['id_buku'];


if ($proses === 'tambah') {
	
	if(move_uploaded_file($tmp, '../../../../assets/img/buku/'.$foto)){

		$sql = "INSERT INTO buku (id_buku,id_kat,judul,penulis,detail,jumlah,harga,foto) VALUES ('$id_buku','$id_kat','$judul','$penulis','$detail','$jumlah','$harga','$foto')";
		$row = $koneksi -> prepare($sql);
		$row -> execute(array($id_buku,$id_kat,$judul,$penulis,$detail,$jumlah,$harga,$foto));

		echo '<script>alert("Berhasil");window.location="../../index.php?page=buku"</script>';


	}

} else if ($proses === 'update') {

	if(move_uploaded_file($tmp, '../../../../assets/img/coba/'.$foto)){

		
		$sql = "UPDATE buku SET id_kat = '$id_kat', judul = '$judul', penulis = '$penulis', detail = '$detail', jumlah = '$jumlah', harga = '$harga', foto = '$foto' WHERE id_buku = '$id_buku'";
		

		$row = $koneksi -> prepare($sql);
		$row -> execute(array($id_buku,$id_kat,$judul,$penulis,$detail,$jumlah,$harga,$foto));

		echo '<script>alert("Berhasil Edit Data");window.location="../../index.php?page=buku"</script>';
	} else {

		$sql = "UPDATE buku SET id_kat = '$id_kat', judul = '$judul', penulis = '$penulis', detail = '$detail', jumlah = '$jumlah', harga = '$harga' WHERE id_buku = '$id_buku'";
		

		$row = $koneksi -> prepare($sql);
		$row -> execute(array($id_buku,$id_kat,$judul,$penulis,$detail,$jumlah,$harga));

		echo '<script>alert("Berhasil Edit Data");window.location="../../index.php?page=buku"</script>';
	}

} else {
		error_reporting(0);
		$id_buku = $_GET['id'];

		$sql = "DELETE FROM buku WHERE id_buku = $id_buku";
		$row = $koneksi -> prepare($sql);
		$row -> execute(array($id_buku));

		echo '<script>alert("Berhasil");window.location="index.php?page=buku"</script>';
} 








// echo "<pre>";
// 		print_r($_POST);
// echo "</pre>";

?>