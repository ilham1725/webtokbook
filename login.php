<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<html>
<head>
  <title>TOKBOOK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/homepage.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <style> 
#myDIV {
  background-color: #e5e5e5;
  animation: mymove 5s infinite;
}

@keyframes mymove {
  50% {box-shadow: 10px 20px 30px #721278;}
}

.col-lg-6{
  border-radius: 10px;
}
</style>
</head>
<body style="
            background-image: url('assets/img/bglog2.jpg');
            background-repeat: no-repeat;">



<form method="POST">
 <div class="container">
 					<div style="margin-top: 10%;" class="row justify-content-center">	

 						
   							<div class="col-lg-6 col-centered" id="myDIV">
   								<h2 class="text-black">WELCOME! </h2>
   								<h6 style="border-bottom: 0.01px dotted black;" class="text-black">Please Login to Your Account</h6>
   								<h5 class="text-black">Username </h5>
   								<div class="form.group">
   									<input type="text" name="username" class="form-control"  placeholder="Username" required="required">
   								</div>
   								<h5 class="text-black mt-1">Password </h5>
   								<div class="form.group">
   									<input type="password" name="password" class="form-control"  placeholder="Password" required="required">
   								</div>
   								 <button name="submit" class="btn btn-info mt-2">Login</button>	
   								 <h6 class="text-black mt-1">Dont Have Account?, <a style="text-decoration: none; color: #69bae0;" href="daftar.php">Click Here</a></h6>
   							</div>
 						  
          </div>
 </div>
  <div class="container mt-5">
  	<div class="row">
  		<div class="col-md-12"> <h9><center>Copyrights © 2021 Ilham Gadang Murakabi. All Rights Reserved </h9></div>
  	</div>
  </div>
</form>

<?php
	if (isset($_POST['submit'])) {

		session_start();
	require 'koneksi.php';


	$username = $_POST['username'];
	$password = $_POST['password'];


	$sql = 'SELECT * FROM akun
		WHERE username=? AND password=MD5(?)';
	$row = $koneksi -> prepare($sql);
	$row -> execute(array($username,$password));

	$jumRow = $row -> rowCount();

	if($jumRow > 0){
	$hasil = $row -> fetch();
        
        if ($hasil['akses'] === 'pelanggan') {
      

        $_SESSION['akun'] = $hasil;
        $_SESSION['login'] = $hasil['id_akun'];
        echo '<script>window.location="index.php";</script>';
      
        } else if($hasil['akses'] === 'admin') {

        $_SESSION['admin'] = $hasil;
        $_SESSION['login_admin']= "masuk";
        echo '<script>window.location="admin/BS3/index.php";</script>';

        }

  } else {
        echo '<script>alert("Please Correct Your Username and Password");window.location="login.php";</script>';
        }

	}

?>
</body>