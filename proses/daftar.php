<?php



$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if($password2 == $password){
	echo $nama,$telepon,$username,$password;
}

?>