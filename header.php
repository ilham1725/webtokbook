<?php
session_start();
include 'koneksi.php';
error_reporting(0);
?>
<!--  <pre> 
	 <?php //print_r($_SESSION); ?>
</pre> -->
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="assets/img/logo/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Tokbook</title>

		      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			  
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
			  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			  
			  <link rel="stylesheet" type="text/css" href="assets/css/homepage.css">
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
			  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

			 <link rel="preconnect" href="https://fonts.gstatic.com">
			 <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Balsamiq+Sans&family=Lobster&display=swap" rel="stylesheet">
			 
			 <link rel="stylesheet" type="text/css" href="assets/css/style.css">

			 <!-- css -->
			 <link rel="stylesheet" type="text/css" href="assets/css/slider/lightslider.css"/>
			<!--Jquery-->
			<script type="text/javascript" src="js/marvel/JQuery3.3.1.js"></script>
			<script type="text/javascript" src="js/marvel/lightslider.js"></script>

			 <style type="text/css">

			 </style>



</head>
<body>

	<!-- Navbar -->
	<nav class="navbar nav-atas navbar-expand-lg navbar-light">
		<div class="container">
		  <a class="navbar-brand" href="index.php">Tokbook</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #fff;">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav ml-auto ">
		    	  <li class="nav-item mr-3">

		    	  	<!-- kategori -->
		    	  	<!-- Button trigger modal -->
					<button type="button" class="btn nav-item nav-link navi" data-toggle="modal" data-target="#exampleModal">
					  Kategori
					</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Kategori</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        <div class="row">
					        	<div class="col-xs-2 col-md-4">
					        		<a href="kategori/pendidikan.php">Pendidikan</a><br>
					        		<a href="kategori/novel.php">Novel</a><br>
					        		<a href="kategori/sains.php">Sains</a><br>
					        		<a href="kategori/komik.php">Komik</a>
					        	</div>
					        	<div class="col-xs-2 col-md-4">
					        		<a href="kategori/persiapan_ujian.php">Persiapan Ujian</a><br>
					        		<a href="kategori/makanan.php">Masakan</a><br>
					        		<a href="kategori/finansial.php">Finansial</a><br>
					        		<a href="kategori/matematika.php">Matematika</a>

					        	</div>
					        	<div class="col-xs-2 col-md-4">
					        		<a href="kategori/psikologi.php">Psikologi</a><br>
					        		<a href="kategori/kamus.php">Kamus</a><br>
					        		<a href="kategori/keluarga.php">Keluarga</a><br>
					        		<a href="kategori/hiburan.php">Hiburan</a>
					        	</div>
					        	
					        </div>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>
		    	  </li>
		    	  <!-- Akhir Kategori -->

		    	  <!-- search -->
			    	<li class="nav-item mt-2" >
			    		  <form class="form-inline" method="post" action="search.php">
						    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Cari Buku Dan Penulis" aria-label="Search" required="">
						    <button class="btn btn-outline-success my-2 my-sm-0" name="cari" type="submit">Search</button>
						  </form>
			    	</li>
		    	  <!-- Akhir Search -->
		    	

		    	<!-- modal account -->
		      		<li class="nav-item">
		      		 <?php 
		      			if(empty($_SESSION['login'])) { ?>

		      		<!-- login -->

		        <!-- Button trigger modal -->
				<button type="button" class="btn nav-link navi nav-item" data-toggle="modal" data-target="#exampleModalLong">
				  Masuk
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLongTitle">Log in Your Account!</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form method="POST" action="proses/login_proses.php">
				        	<div class="row">
				        		<div class="col-lg-12">
				        			<h5>Username</h5>
				        			<div class="form.group">
				        				<input type="text" name="username" class="form-control"  placeholder="Username">
				        			</div>
				        		</div>
				        		<div class="col-lg-12">
				        			<h5>Password</h5>
				        			<div class="form.group">
				        				<input type="password" name="password" class="form-control"  placeholder="Password">
				        			</div>
				        		</div>
				        		<div class="col-lg-12 mt-2">
				        			<div class="form.group">
				        				<button class="btn btn-primary btn-block" name="proses" value="Log In">Log In</button>
				        			</div>
				        		</div>
				        		</form>
				        		<div class="col-lg-8" style="margin: auto;">
				        			<hr>
				        		</div>
				        		<div class="col-lg-8" style="margin: auto;">
				        			<center>Dont Have Account?, <a href="daftar.php">Click Here</a></center>
				        		</div>
				        		<div class="col-lg-12">
				        			<hr>
				        		</div>
				        		<div class="col-lg-12 mt-2">
				        			<a href="" class="btn btn-light btn-block"><img src="assets/img/logo/google1.png" style="width: 40px; margin-right: 3px;" > Sign In With Google</a>
				        		</div>
				        		<div class="col-lg-12 mt-3">
				        			<a href="" class="btn btn-light btn-block"><img src="assets/img/logo/facebook.png" style="width: 30px; margin-right: 3px;"> Sign In With Facebook</a>
				        		</div>
				        		
				        	</div>
				        
				      </div>
				    </div>
				  </div>
				</div>
			<?php } else if($_SESSION['login'] && $_SESSION['login'] === $_SESSION['akun']['id_akun'] || $_SESSION['login'] === $_SESSION['newAkun']['id_akun'] ) {?>
		      </li>

		      <!-- Akhir Login -->

		     

		      <!-- Account -->

		        <!-- Button trigger modal -->
		        <li class="nav-item">
				<button type="button" class="btn nav-link navi nav-item" data-toggle="modal" data-target="#exampleModalAccount">
				  Account
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModalAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				    	<div class="row mt-4 ml-2 mr-2 justify-content-between">
					    	<div class="col-4">
						    	<a href="profile.php" style="font-size: 15px;">
						    		Edit Profile
						    	</a>
						    </div>
						    <div class="col-4" style="margin-right: 30px;">
						          <i class="fa fa-times" aria-hidden="true" data-dismiss="modal" aria-label="Close" ></i>
					    	</div>
				    	</div>
				      <div class="modal-header">
				      	<?php if(!isset($_SESSION['akun']['foto_akun']) && !isset($_SESSION['newAkun']['foto_akun']) || $_SESSION['akun']['foto_akun'] === 0 ){ ?>
				      	
				      	<div class="col-lg-12 text-center foto-akun">
				        	<form method="post" action="profile.php">
						      	<div class="container container-akun">
								  <img src="assets/img/foto_akun/img_avatar.png" alt="Avatar" class="image img-akun" >
								  <div class="middle">
								  	
								    	<button class="btni mt-2"> Upload </button>
								    
								  </div>
								</div>
							</form>
				      	</div>
				      <?php } else if (isset($_SESSION['akun']['foto_akun']) OR empty($_SESSION['newAkun']['foto_akun'])) { ?>
				      		<div class="col-lg-12 text-center foto-akun">
				        	<form method="post" action="profile.php">
						      	<div class="container container-akun">
								  <img src="assets/img/foto_akun/<?php echo $_SESSION['akun']['foto_akun'];?>" alt="Avatar" class="img-akun  materialboxed">
								</div>
							</form>
				      	</div>
				      		
				      	<?php } else if (isset($_SESSION['newAkun']['foto_akun']) OR empty($_SESSION['akun']['foto_akun'])) { ?>
				      		<div class="col-lg-12 text-center foto-akun">
				        	<form method="post" action="profile.php">
						      	<div class="container container-akun">
								  <img src="assets/img/foto_akun/<?php echo $_SESSION['newAkun']['foto_akun'];?>" alt="Avatar" class="materialboxed img-akun" style="">
								</div>
							</form>
				      	</div> 
				      <?php } ?>

				        
				      </div>
				      <?php if(isset($_SESSION['akun'])){  ?>
				      <div class="modal-body">
				      	<form method="post">
				        	<div class="row">
				        		<div class="col-lg-12">
				        			<div class="alert alert-light" role="alert">
									  <?php echo $_SESSION['akun']['nama']; ?>
				        			</div>
				        		</div>
				        	</div>
				        	<div class="row">
				        		<div class="col-lg-12">
				        			<div class="alert alert-light" role="alert">
									  <?php echo $_SESSION['akun']['telepon']; ?>
				        			</div>
				        		</div>
				        	</div>
				        	<div class="row">
				        		<div class="col-lg-12">
				        			<div class="alert alert-light" role="alert">
									  <?php echo $_SESSION['akun']['username']; ?>
				        			</div>
				        		</div>
				        	</div>

				        <?php } else{ ?>

					      <div class="modal-body">
					      	<form method="post">
					        	<div class="row">
					        		<div class="col-lg-12">
					        			<div class="alert alert-light" role="alert">
										  <?php echo $_SESSION['newAkun']['nama']; ?>
					        			</div>
					        		</div>
					        	</div>
					        	<div class="row">
					        		<div class="col-lg-12">
					        			<div class="alert alert-light" role="alert">
										  <?php echo $_SESSION['newAkun']['telepon']; ?>
					        			</div>
					        		</div>
					        	</div>
					        	<div class="row">
					        		<div class="col-lg-12">
					        			<div class="alert alert-light" role="alert">
										  <?php echo $_SESSION['newAkun']['username']; ?>
					        			</div>
					        		</div>
					        	</div>

					        <?php } ?>
				        	<div class="row">
				        		<div class="col-lg-12">
				        			<div class="alert alert-light" role="alert">
									  <a href="ganti_password.php">Ganti Password</a>
				        			</div>
				        		</div>
				        	</div>
				        	<div class="row">
				        		<div class="col-lg-12">
				        			<div class="alert alert-light" role="alert">
									  <a href="transaksi.php">Riwayat Belanja</a>
				        			</div>
				        		</div>
				        	</div>
				        	<div class="row">
				        		<div class="col-lg-12">
				        			<a href="logout.php" class="btn btn-danger btn-block">Logout</a>
				        		</div>
				        	</div>
				        </form>
				    </div>
				  </div>
				</div>
		      		

		      	<?php }?> 


		      <!-- Keranjang -->
		      <li class="nav-item">
		      	<a class="nav-link navi" href="keranjang.php"><i class="fa fa-shopping-bag fa-1x" aria-hidden="true"></i></a>
		        
		      </li>
		      <!-- Akhir Keranjang -->
		    </ul>
		  </div>
		</div>
	</nav>
	<!-- akhir navbar -->


	<!-- java -->
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script>
		const materialbox = document.querySelectorAll('.materialboxed');
 	     M.Materialbox.init(materialbox);
		
	</script>

</body>
</html>