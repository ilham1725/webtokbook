
<?php


if(isset($_GET['id'])){
$id_akun = $_GET['id'];
} else {
$id_akun = '';
}

 ?>

<body>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                    
                                    <h4 class="title">Edit Profile</h4>
                                
                            </div>
                            <div class="content">
                                <form method="post" enctype="multipart/form-data" action="modul/akun/proses.php">
                                    <div class="row">
                                        
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Password Lama</label>
                                                    <input type="text" class="form-control" name="ganti_pass" placeholder="Password Lama" >
                                                </div>
                                            </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Password Baru</label>
                                                <input type="password" class="form-control" placeholder="Password Baru" name="password" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Re-Type Password</label>
                                                <input type="password" class="form-control" placeholder="Re-Type Password" name="password2" required="required">
                                            </div>
                                        </div>
                                    </div>                
                                        <button type="submit" class="btn btn-danger btn-fill pull-left" name="proses" value="ganti">Ganti Password</button>
                                    

                                    <div class="clearfix"></div>
                                
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
