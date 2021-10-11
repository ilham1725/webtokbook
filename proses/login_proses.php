<?php 
	

	session_start();
	require '../koneksi.php';


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
      	echo '<script>window.location="../index.php";</script>';
      
      	} else if($hasil['akses'] === 'admin') {

        $_SESSION['admin'] = $hasil;
        $_SESSION['login_admin']= "masuk";
        echo '<script>window.location="../admin/BS3/index.php";</script>';

        }

  } else {
        echo '<script>alert("salah");window.history.back();</script>';
        }



 ?>