
<?php


if(isset($_GET['id'])){
$id_buku = $_GET['id'];
} else {
$id_buku = '';
}

$sql = "SELECT * FROM buku INNER JOIN kategori ON buku.id_kat = kategori.id_kat WHERE id_buku = $id_buku";
$row = $koneksi -> prepare($sql);
$row -> execute();
$hasil = $row -> fetch();

 ?>

<body>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <?php if(isset($_GET['id'])){ ?>
                                    
                                    <h4 class="title">Edit Buku</h4>

                                <?php } else {?>
                                
                                    <h4 class="title">Tambah Buku</h4>

                                <?php } ?>
                                
                            </div>
                            <div class="content">
                                <form method="post" enctype="multipart/form-data" action="modul/buku/proses.php">
                                    <div class="row">
                                        
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Id Buku (disabled)</label>
                                                    <input type="text" class="form-control" disabled value="<?php echo $hasil['id_buku']; ?>" name="id_buku" >
                                                </div>
                                            </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Judul</label>
                                                <input type="text" class="form-control" placeholder="judul" value="<?php echo $hasil['judul']; ?>" name="judul" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Penulis</label>
                                                <input type="text" class="form-control" placeholder="Penulis" value="<?php echo $hasil['penulis']; ?>" name="penulis" required="required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Harga</label>
                                                <input type="text" class="form-control" placeholder="Harga" value="<?php echo $hasil['harga']; ?>" name="harga" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Stok</label>
                                                <input type="number" class="form-control" placeholder="" min="<?php echo $hasil['jumlah']; ?>" value="<?php echo $hasil['jumlah']; ?>" name="jumlah" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select name="id_kat" class="form-control" value="">

                                                  <?php if(!isset($_GET['id'])){ ?>
                                                  <option>Pilih Kategori</option>
                                                  <?php } ?>

                                                  <option value="<?php echo $hasil['id_kat']; ?>"><?php echo $hasil['nm_kat']; ?></option>
                                                  

                                                     <?php
                                                       $sql = 'SELECT * FROM kategori';
                                                       $row = $koneksi -> prepare($sql);
                                                       $row -> execute();
                                                       $hasil1 = $row -> fetchAll();
                                                       foreach ($hasil1 as $isi ) {
                                                      
                                                       ?>
                                                      
                                                            <option value="<?php echo $isi['id_kat'];?>">
                                                                <?php echo $isi['nm_kat'];?>        
                                                            </option>
                                                     <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <?php if(isset($_GET['id'])){ ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Foto Buku</label>
                                                    <input type="file" class="form-control" name="foto">
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Foto Buku</label>
                                                    <input type="file" class="form-control" name="foto" required="required">
                                                </div>
                                            </div>
                                        <?php } ?>
                                            
                                        
                                    </div>

                                   

                                    

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Sinopsis</label>
                                                <textarea rows="5" class="form-control" placeholder="Sinopsis"  name="detail" required="required"><?php echo $hasil['detail']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <?php if(isset($_GET['id'])){ ?>
                                        <input type="hidden" name="id_buku" value="<?php echo $hasil['id_buku']; ?>" />
                                        <button type="submit" class="btn btn-info btn-fill pull-right" name="proses" value="update">Update Data</button>
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
                                         <img src="../../assets/img/buku/<?php echo $hasil['foto'] ?>">
                                    </div>
                                <?php } else {?>
                                    <div class="author">
                                         <img src="../../assets/img/foto_akun/upload.png">
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
