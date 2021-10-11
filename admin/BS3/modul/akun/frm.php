
<?php


if(isset($_GET['id'])){
$id_akun = $_GET['id'];
} else {
$id_akun = '';
}

$sql = "SELECT * FROM akun WHERE id_akun = $id_akun";
$row = $koneksi -> prepare($sql);
$row -> execute();
$hasil = $row -> fetch();

// echo "<pre>";
//     print_r($hasil);
// echo "</pre>";

 ?>

<body>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <?php if(isset($_GET['id'])){ ?>
                                    
                                    <h4 class="title">Edit Profile</h4>

                                <?php } else {?>
                                
                                    <h4 class="title">Tambah Akun</h4>

                                <?php } ?>
                                
                            </div>
                            <div class="content">
                                <form method="post" enctype="multipart/form-data" action="modul/akun/proses.php">
                                    <div class="row">
                                        
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Id Akun (disabled)</label>
                                                    <input type="text" class="form-control" disabled value="<?php echo $hasil['id_akun']; ?>" name="id_akun" >
                                                </div>
                                            </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="text" class="form-control" placeholder="Nama Lengkap" value="<?php echo $hasil['nama']; ?>" name="nama" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Telepon</label>
                                                <input type="text" class="form-control" placeholder="Telepon" value="<?php echo $hasil['telepon']; ?>" name="telepon" required="required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="Username" value="<?php echo $hasil['username']; ?>" name="username" required="required">
                                            </div>
                                        </div>
                                        <?php if (isset($_GET['id'])){ ?>
                                            
                                        
                                            
                                       <?php } else { ?>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control" placeholder="Password" name="password" required="required">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Re-Type Password</label>
                                                        <input type="password" class="form-control" placeholder="Re-Type Password"  name="password2" required="required">
                                                    </div>
                                                </div>
                                       <?php } ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Foto akun</label>
                                                <input type="file" name="foto" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>AKSES</label>
                                                <input type="text" name="akses" class="form-control" value="<?php echo $hasil['akses']; ?>"> 
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <?php if(isset($_GET['id'])){ ?>
                                        <input type="hidden" name="id_akun" value="<?php echo $hasil['id_akun']; ?>" />
                                        <button type="submit" class="btn btn-info btn-fill pull-right" name="proses" value="update">Update Data</button>
                                        <a href="index.php?page=akun&item=ganti&id=<?php echo $hasil['id_akun']; ?>" class="btn btn-danger btn-fill">Ganti Password</a>
                                    <?php } else { ?>
                                        <button type="submit" class="btn btn-info btn-fill pull-right" name="proses" value="tambah">Tambah Data</button>
                                    <?php } ?>

                                    <div class="clearfix"></div>
                                
                            </div>
                        </div>
                    </div>

                    <!-- IMAGE -->
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                
                            </div>
                            <div class="content">
                                <?php if(isset($_GET['id'])){ ?>
                                    <div class="author">
                                         <img src="../../assets/img/foto_akun/<?php echo $hasil['foto_akun'] ?>" style="max-width: 150px;">
                                    </div>
                                <?php } else {?>
                                    <div class="author">
                                         <img src="../../assets/img/foto_akun/upload.png" style="max-width: 200px;">
                                    </div>
                                <?php }?>
    
                            </div>
                            <hr>
                            </form>
                            <div class="text-center">
                                <p>AHAYYYY</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php 

        // if (isset($_POST['proses'])) {
        //     echo "<pre>";
        //         print_r($_POST);
        //         print_r($_FILES['foto']);   
        //     echo "</pre>";
        // }

        ?>


        <footer class="footer">
            <div class="container-fluid">
                
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="">Ilham Gadang M</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
