<?php 
require '../koneksi.php';





$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if($password === $password2){

$sql = 'INSERT INTO akun (nama,telepon,username,password,foto_akun,akses) VALUES(?,?,?,MD5(?),"0","pelanggan")';
$row = $koneksi -> prepare($sql);
$row -> execute(array($nama,$telepon,$username,$password));

echo '<script>alert("Akun Berhasil Di Buat");window.location="../login.php"</script>';
}else{
	echo '<script>alert("Password Tidak Sinkron");window.location="../daftar.php"</script>';
}





 ?>