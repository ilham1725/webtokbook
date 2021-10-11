<?php
session_start();
unset($_SESSION['keranjang']);
unset($_SESSION['alamat']);

echo	'<script>alert("Terimakasih Telah Berbelanja");window.location="index.php"</script>';
?>