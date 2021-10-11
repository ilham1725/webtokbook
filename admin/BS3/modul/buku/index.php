
<?php 
 unset($_SESSION['cari']);
?>
<body>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                              <div class="row justify-content-between">
                                    <div class="col-md-10">
                                        <form class="form-inline " method="post" action="index.php?page=buku&item=search">
                                        <input class="form-control" type="search" placeholder="Cari Akun" aria-label="Search" name="search" style="margin-top: 10px;">
                                        <button class="btn btn-info tombol btn-fill" type="submit" style="margin-top: 10px;">Search</button>
                                     </form>
                                       
                                    </div>
                                    <div class="col-md-2">
                                         <h4 class="title text-left" style=""><a href="index.php?page=buku&item=frm" class="btn btn-info btn-fill" style="margin-top: 7px; margin-bottom: 5px;">Tambah Buku</a></h4>
                                     
                                    </div>
                                </div>
                                  
                                    
                                
                                <div class="row">
                                <div class="col-md-12 ">
                                <h4 class="title">Table Buku</h4>
                                <p class="category">Daftar Buku dan Stok</p>
                                </div>
                                </div>


                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>NO</th>
                                    	<th>JUDUL</th>
                                        <th>KATEGORI</th>
                                    	<th>PENULIS</th>
                                        <th>HARGA</th>
                                    	<th>STOK</th>
                                        <th>FOTO</th>
                                        <th>STATUS</th>
                                        <th>AKSI</th>
                                    </thead>
                                    <tbody>


                        <?php
                            $halaman = 5;
                            $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                            $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                            $result = mysqli_query($kon, "SELECT * FROM buku");
                            $total = mysqli_num_rows($result);
                            $pages = ceil($total/$halaman);            
                            $no =$mulai+1;
                            $sql = "SELECT * FROM buku INNER JOIN kategori ON buku.id_kat = kategori.id_kat LIMIT $mulai, $halaman";
                            $row = $koneksi -> prepare($sql);
                            $row -> execute();

                            $hasil = $row -> fetchAll();
                            foreach ($hasil as $isi) {
                                
                            

                         ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                        	<td><?php echo $isi['judul']; ?></td>
                                            <td><?php echo $isi['nm_kat']; ?></td>
                                        	<td><?php echo $isi['penulis']; ?></td>
                                            <td>Rp. <?php echo number_format($isi['harga']); ?></td>
                                        	<td><?php echo $isi['jumlah']; ?></td>                                       	
                                            <td><img src="../../assets/img/buku/<?php echo $isi['foto']; ?>" style="max-width: 30px;"></td>
                                        <?php if ($isi['jumlah'] < 10 && $isi['jumlah'] >= 1) {
                                            echo "<td style='color:orange;'>Stok Hampir Habis</td>";
                                        } else if($isi['jumlah'] >= 10) { ?> 
                                               <td style="color: green;">Stok Banyak</td>  

                                        <?php }else if($isi['jumlah'] == 0 ){
                                            echo '<td style="color : red;">Habis</td>';
                                        } 


                                        ?>
                                        <td width="15%">
                                            <a href="index.php?page=buku&item=frm&id=<?php echo $isi['id_buku']; ?>" class="btn btn-primary" ><i class="fa fa-pencil"></i></a>
                                            <a href="index.php?page=buku&item=proses&id=<?php echo $isi['id_buku']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
                                                echo "<li class='page-item'><a class='page-link' href='?page=buku&halaman=$i'>$i</a></li>";
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
