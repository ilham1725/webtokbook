<?php
//echo'sukses' -> Koneksi Database;
	$u_mysql='root';
	$p_mysql='';
	$koneksi= new PDO('mysql:host=localhost;dbname=tokbuk',$u_mysql,$p_mysql);
//echo 'sukses';
	$koneksii = new mysqli("localhost","root","","tokbuk");

	$host="localhost";
	$user="root";
	$password="";
	$db="tokbuk";

	$kon = mysqli_connect($host,$user,$password,$db);

	
?>