
<?php

if(isset($_POST['search'])){
    
    $_SESSION['cari'] = $_POST['search'];

    $cari = $_SESSION['cari'];
} else {

    $cari = $_SESSION['cari'];
    
}
?>
<body>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <div class="col-md-8">
                                     <h4 class="title text-left" style=""><a href="index.php?page=akun&item=frm" class="btn btn-primary">Tambah akun</a></h4>
                                </div>
                                <div class="col-md-4">
                                     <form class="form-inline" method="post" action="index.php?page=akun&item=search">
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                    
                                </div>
                                <div class="row">
                                <div class="col-md-12 ">
                                <h4 class="title">Table akun</h4>
                                <p class="category">Daftar akun dan Stok</p>
                                </div>
                                </div>


                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>NO</th>
                                    	<th>NAMA</th>
                                        <th>TELEPON</th>
                                    	<th>USERNAME</th>
                                        <th>AKSES</th>
                                        <th>AKSI</th>
                                    </thead>
                                    <tbody>


                        <?php
                            $halaman = 6;
                            $page = isset($_GET["halaman_cari"]) ? (int)$_GET["halaman_cari"] : 1;
                            $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                            $result = mysqli_query($kon, "SELECT * FROM akun");
                            $total = mysqli_num_rows($result);
                            $pages = ceil($total/$halaman);            
                            $no =$mulai+1;
                            $sql = "SELECT * FROM akun WHERE nama LIKE '%".$cari."%' OR username LIKE '%".$cari."%' OR akses LIKE '%".$cari."%' LIMIT $mulai, $halaman";
                            $row = $koneksi -> prepare($sql);
                            $row -> execute();

                            $hasil = $row -> fetchAll();
                            foreach ($hasil as $isi) {
                                
                            

                         ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $isi['nama']; ?></td>
                                            <td><?php echo $isi['telepon']; ?></td>
                                            <td><?php echo $isi['username']; ?></td>
                                            <td><?php echo $isi['akses']; ?></td>                                          
                                            <td width="15%">
                                                <a href="index.php?page=akun&item=frm&id=<?php echo $isi['id_akun']; ?>" class="btn btn-primary" ><i class="fa fa-pencil"></i></a>
                                                <a href="index.php?page=akun&item=proses&id=<?php echo $isi['id_akun']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>

                        <?php } ?>
                                    </tbody>
                                </table>
                                
                                   <div class="text-center">
                                    <ul class="pagination">
                                        <?php
                                        for($i=1;$i<=$pages;$i++) {
                                            if ($i != $page) {
                                                echo "<li class='page-item'><a class='page-link' href='?page=akun&item=search&halaman_cari=$i'>$i</a></li>";
                                            } else {
                                                echo "<li class='page-item active'><a class='page-link' href='#'>$i</a></li>";
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> Creative Tim, made with love for a better web
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
