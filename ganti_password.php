<?php
	include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container mt-3">
		<h2 class="text-center" style="border-bottom: 2px solid #cecece">Ganti Password</h2>
		<form method="post" action="proses/ganti_proses.php">
			<div class="row justify-content-center">
				<div class="col-lg-6 mt-3">
					<h5>Password Lama</h5>
					<input class="form-control" type="password" name="pass_lama" required="required">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<h2 class="text-center mt-3 mb-3" style="border-bottom: 2px solid #cecece"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<h5>Password Baru</h5>
					<input class="form-control" type="password" name="pass_baru" required="required">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<h5>Re-Type Password Baru</h5>
					<input class="form-control" type="password" name="pass_baru2" required="required">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<button class="btn btn-primary mt-2"> Ganti </button>
				</div>
			</div>
		</form>
	</div>

</body>
</html>