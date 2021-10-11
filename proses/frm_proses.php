<?php
include '../koneksi.php';


$judul = $_POST['judul'];
$kategori = $_POST['id_kat'];
$penulis = $_POST['penulis'];
$detail = $_POST['detail'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";




// if(move_uploaded_file($tmp, '../assets/img/buku/'.$foto)){
// 	$sql = "INSERT INTO buku(id_kat,judul,penulis,detail,jumlah,harga,foto) VALUES(?,?,?,?,?,?,?)";
// 	$row = $koneksi -> prepare($sql);
// 	$row -> execute(array($kategori,$judul,$penulis,$detail,$jumlah,$harga,$foto));

// 	if($row){
// 	echo	'<script>alert("Data Berhasil Disimpan");window.location="../frm.php"</script>';
// 	}else{
// 	echo	'<script>alert("Data Gagal Disimpan");window.location="../frm.php"</script>';
// 	}
// 	}
	
		


?>
