<?php
session_start();

$id_buku = $_GET['id'];	

	if(isset($_SESSION['keranjang'][$id_buku]))
	{
		$_SESSION['keranjang'][$id_buku]+=1;
	}
	else
	{
		$_SESSION['keranjang'][$id_buku] = 1;
	}
	echo "<script>alert('New Item Added');window.history.back();</script>";

//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";


?>