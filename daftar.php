<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/index.css">
 <style> 
#myDIV {
  background-color: #e5e5e5;
  animation: mymove 5s infinite;
}

@keyframes mymove {
  50% {box-shadow: 10px 20px 30px #721278;}
}

.col-md-12{
  border-radius: 10px;
}
</style>
<body>
  <form method="post">
  	<div style="background-color:  white;
  				margin-top: 10%;
  				border-radius: 8px 8px 8px 8px;
  			
  				" class="container">
  		<div class="row">
  			
  		<div class="col-md-12" id="myDIV">
  			<h5 style="border-bottom: 0.01px dotted black;
  					   margin-top: 2%;" class="text-black">REGISTER!</h5>
  			<div class="form-row">
  				<div class="col-md-4">
  					<h5 class="text-black">Full Name</h5>
 						<div class="form.group">
 							<input type="text" name="nama" class="form-control"  placeholder="e.g. Young Lex">
 						</div>
  				</div>
  				<div class="col-md-4">
  					<h5 class="text-black">Phone Number <i style="font-size: 70%; color: red;">(Max 12 Digit)</i></h5>
 						<div class="form.group">
 							<input type="text" pattern="^\d{12}$" name="telepon" class="form-control"  placeholder="e.g. 08233411566">
 						</div>
  				</div>
  				<div class="col-md-4">
  					<h5 class="text-black">Username</h5>
 						<div class="form.group">
 							<input type="text" name="username" class="form-control"  placeholder="e.g. Young123">
 						</div>
  				</div>
  				
  			</div>
  			<div class="form-row">
  			<div class="col-md-6">
  					<h5 class="text-black">Password</h5>
 						<div class="form.group">
 							<input type="password" name="password" class="form-control"  placeholder="Password">
 						</div>
  				</div>
  				<div class="col-md-6">
  					<h5 class="text-black">Re-Type Password</h5>
 						<div class="form.group">
 							<input type="password" name="password2" class="form-control"  placeholder="Re-Type Password">
 						</div>
  				</div>

  			</div>
  			<button style="margin-bottom: 1%;" name="submit" class="btn btn-info mt-2">Create Account</button> <h6>Already Have Account?, <a href="login.php">Login</a></h6>
  			</div>

  			
  		</div>
  	</div>
  </form>
  <div class="container">
  	<div class="row">
  		<div class="col-md-12"> <h9><center>Copyrights © 2021 Ilham Gadang Murakabi. All Rights Reserved </h9></div>
  	</div>
  </div>
	
</body>
      <?php
  if (isset($_POST['submit'])) {

        require 'koneksi.php';


          $nama = $_POST['nama'];
          $telepon = $_POST['telepon'];
          $username = $_POST['username'];
          $password = $_POST['password'];
          $password2 = $_POST['password2'];

          if($password === $password2){

          $sql = "INSERT INTO akun (nama,telepon,username,password,foto_akun,akses) VALUES(?,?,?,MD5(?),'0','pelanggan')";
          $row = $koneksi -> prepare($sql);
          $row -> execute(array($nama,$telepon,$username,$password));

          echo '<script>alert("Akun Berhasil Di Buat");window.location="login.php"</script>';
          }else{
            echo '<script>alert("Password Tidak Sinkron");window.location="daftar.php"</script>';
          }






}
?>