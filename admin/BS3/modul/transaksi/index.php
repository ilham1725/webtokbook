
<?php 
 unset($_SESSION['c_awal']);
 unset($_SESSION['c_akhir']);
 // echo "<pre>";
 // print_r($_SESSION);
 // echo "</pre>";
   // $sql = "SELECT * FROM transaksi WHERE id_transaksi = 1";
   // $row = $koneksi -> prepare($sql);
   // $row -> execute();
   // $hasil = $row -> fetch();
?>
<style>
body {
  font-family: 'Lato', sans-serif;
}

.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 4;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
.page-item1 {
    position: relative;
    z-index: 0;
}
}
</style>
<body>
     

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                              <form method="post" action="index.php?page=transaksi&item=search">
                                <div class="row" style="margin: auto;">
                                  <div class="col-md-5">
                                    <div class="form-group">
                                      <input type="date" class="form-control" name="t_awal" />
                                    </div>
                                  </div>
                                  <div class="col-md-1">
                                    <div class="form-group">
                                      <p class="category" style="margin-left: 10px; margin-top: 10px;"> Sampai</p>
                                    </div>
                                  </div>
                                  <div class="col-md-5">
                                    <div class="form-group">
                                      <input type="date" class="form-control" name="t_akhir" />
                                    </div>
                                  </div>
                                  <div class="col-md-1">
                                    <div class="form-group">
                                      <button class="btn btn-fill btn-info" name="search">search</button>
                                    </div>
                                  </div>
                                </div>
                              </form>
                              
                             
                                <div class="row" style="margin: auto;">
                                <div class="col-md-12 ">
                                <h4 class="title">Table Transaksi</h4>
                                <p class="category">Daftar Transaksi Proses</p>
                                </div>
                                </div>


                            </div>
                            <div class="content table-responsive table-full-width" style="margin: auto;">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>NO</th>
                                        <th>ID TRANSAKSI</th>
                                        <th>NAMA PEMBELI</th>
                                        <th>TANGGAL TRANSAKSI</th>
                                        <th>TOTAL BELANJA</th>
                                        <th>ALAMAT TUJUAN</th>
                                        <th>PILIHAN</th>
                                        <th>STATUS</th>
                                        <th>AKSI</th>
                                    </thead>
                                    <tbody>


                        <?php
                            $halaman = 4;
                            $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                            $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                            $result = mysqli_query($kon, "SELECT * FROM transaksi INNER JOIN akun ON akun.id_akun = transaksi.id_akun");
                            $total = mysqli_num_rows($result);
                            $pages = ceil($total/$halaman);            
                            $no =$mulai+1;
                            $sql = "SELECT * FROM transaksi INNER JOIN akun ON akun.id_akun = transaksi.id_akun LIMIT $mulai, $halaman";
                            $row = $koneksi -> prepare($sql);
                            $row -> execute();

                            $hasil = $row -> fetchAll();
                            foreach ($hasil as $isi) {
                                
                            

                         ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $isi['id_transaksi']; ?></td>
                                            <td><?php echo $isi['nama']; ?></td>
                                            <td><?php echo $isi['tanggal_transaksi']; ?></td>
                                            <td>Rp. <?php echo number_format($isi['biaya']); ?></td>
                                            <td><?php echo $isi['alamat']; ?></td>
                                            <td width="23%">
                                                  <select id="status" onchange="keterangan()" class="form-control">
                                                    <option>Silahkan Pilih</option>
                                                    <option value="Sedang Di Kirim"> Sedang Di Kirim</option>
                                                    <option value="Selesai">Selesai</option>
                                                    <option value="Menunggu Acc Admin">Menunggu Acc Admin</option>
                                                    <option value="Ditolak">Ditolak</option>
                                                  </select>
                                            </td> 
                                            <form method="post">
                                            <td width="25%">
                                                
                                                  <input type="text" id="hasil" class="form-control" value="<?php echo $isi['status']; ?>" name="hasil1" readonly />
                                              
                                                  
                                                
                                            </td>                                         
                                            <td width="35%">

                                                 <button name="proses" class="btn btn-fill btn-success" value="<?php echo $isi['id_transaksi']; ?>"><i class="fa fa-check-square"></i></button>
                                            </form>
                                               

                                                

                                                <?php if(empty($isi['foto_upload'])){ ?>

                                                <button onclick="openNavBelum()" class="btn btn-info btn-fill"><i class="fa fa-search-plus"></i></button>
                                                   <div id="myNavBelum" class="overlay">
                                                     <a href="javascript:void(0)" class="closebtn" onclick="closeNavBelum()">&times;</a>
                                                    <div class="overlay-content">

                                                         <h1>FOTO BELUM DI UPLOAD</h1>
                                                                                
                                                    </div>
                                                 </div>
                                                 <?php } else  { ?>   
                                                   
                                                <button onclick="openNav()" class="btn btn-info btn-fill"><i class="fa fa-search-plus"></i></button>
                                                <div id="myNav" class="overlay">
                                                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                                    <div class="overlay-content">
                                                          <img style="max-width: 350px; margin: auto;" src="../../assets/img/foto_upload/<?php echo $isi['foto_upload']; ?>">
                                                                                
                                                    </div>
                                                 </div>
                                             <?php }?>
                                                
                                                <a href="index.php?page=transaksi&item=print&id=<?php echo $isi['id_transaksi']; ?>" class="btn btn-primary btn-fill"><i class="fa fa-print"></i></a>
                                               
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
                                                echo "<li class='page-item'><a class='page-link' href='?page=transaksi&halaman=$i'>$i</a></li>";
                                            } else {
                                                echo "<li class='page-item active'><a class='page-link' href='#'>$i</a></li>";
                                            }
                                        }
                                        ?>
                                    </ul>
                                    <?php 
                                        if (isset($_POST['proses'])) {

                                            $id_transaksi = $_POST['proses'];
                                            $hasil = $_POST['hasil1'];

                                            $sql = "UPDATE transaksi SET status = '$hasil' WHERE id_transaksi = '$id_transaksi'";
                                            $row = $koneksi -> prepare($sql);
                                            $row -> execute();

                                            if ($hasil == 'Ditolak') {
                                              $sql = "SELECT id_buku,jumlah FROM pembelian WHERE id_transaksi = 7";
                                              $row = $koneksi -> prepare($sql);
                                              $row -> execute();
                                              $hasil = $row -> fetchAll();

                                              


                                              foreach ($hasil as $isi ) {
                                                $tanggal = date("Y-m-d"); 
                                                $id_buku1 = $isi['id_buku'];
                                                $_SESSION['keranjang_admin'][$id_buku1] = $isi['jumlah'];
                                                
                                                foreach ($_SESSION['keranjang_admin'] as $id_buku1 => $jumlah) {

                                                  $sql2 = "UPDATE buku SET jumlah = jumlah + $jumlah WHERE id_buku = '$id_buku1'";
                                                  $row2 = $koneksi -> prepare($sql2);
                                                  $row2 -> execute();
                                                  
                                                  unset($_SESSION['keranjang_admin']);
                                                  

                                                
                                                

                                                }     
                                            

                                           
                                        }
                                        echo "<script>alert('Berhasil Tolak');window.location='index.php?page=transaksi';</script>";
                                      }
                                        echo "<script>alert('Berhasil Update');window.location='index.php?page=transaksi';</script>";

                                    }


                                    ?>
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



<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}
function openNavBelum() {
  document.getElementById("myNavBelum").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
function closeNavBelum() {
  document.getElementById("myNavBelum").style.width = "0%";
}
function keterangan() {
  var tes = document.getElementById("status").value;
        document.getElementById("hasil").value=tes;
};


</script>


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
