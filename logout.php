<?php

session_start();
session_destroy();

echo '<script>alert("TERIMAKASIH TELAH BERKUNJUNG ");window.location="index.php";</script>';

?>