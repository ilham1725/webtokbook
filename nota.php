<?php 

include 'header.php';

  $id_transaksi = $_GET['id'];


  if ($_SESSION['id_transaksi'] != $id_transaksi) {
    echo "<script>alert('eitss tidak boleh');window.location='index.php';</script>";
    unset($_SESSION['keranjang']);
    unset($_SESSION['alamat']);
    unset($_SESSION['id_transaksi']);
    die();
  }

  echo "<pre>";
          print_r($_SESSION);
          print_r($id_transaksi);
  echo "</pre>";






?>

        <!-- End Sidebar -->
<div class="col mt-5">
	<section class="konten">
		<div class="container">
 			<h2 class="text-center font-weight-bold m-4">NOTA</h2>
 			<hr>
      <div class="row">
       
        <div class="col-md-4"><h3>Pembelian</h3>
           <?php
      

        $sql = "SELECT transaksi.id_transaksi,transaksi.id_akun,transaksi.id_ongkir,transaksi.tanggal_transaksi,transaksi.biaya,transaksi.alamat, ongkir.biaya_ongkir FROM transaksi INNER JOIN ongkir ON transaksi.id_ongkir=ongkir.id_ongkir WHERE id_transaksi = '$id_transaksi'";
        $row = $koneksi -> prepare($sql);
        $row -> execute();
        $hasil = $row -> fetchAll();
  foreach ($hasil as $isi ) {
    ?>
          <p>
          <strong>Nomor Pembelian: <?php echo $isi['id_transaksi']; ?><br></strong>
          Tanggal Pembelian : <?php echo $isi['tanggal_transaksi'];?><br>
          

        </p>
        <?php }?>
        </div>
      
        <div class="col-md-4"><h3>Pelanggan</h3>
          <p>
          <?php if(isset($_SESSION['akun'])){ ?>

            <strong><?php echo $_SESSION['akun']['nama']; ?></strong><br>
            <?php echo $_SESSION['akun']['telepon']; ?><br>

          <?php } else { ?>

            <strong><?php echo $_SESSION['newAkun']['nama']; ?></strong><br>
            <?php echo $_SESSION['newAkun']['telepon']; ?><br>

          <?php } ?>
          </p>
        </div>
        <div class="col-md-4"><h3>Pengiriman</h3>
          <p>
           <strong> <?php echo $isi['alamat']; ?></strong><br>
           
             Ongkir : Rp. <?php echo number_format($isi['biaya_ongkir']); ?>
          </p>
        </div>
      </div>
 			      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subharga</th>
          </tr>
        </thead>
        <tbody>
    
          
          <?php $no = 1;?>
          <?php $total_akhir = 0 ;?>
          <?php foreach ($_SESSION['keranjang'] as $id_buku => $jumlah) {
            $sql = "SELECT * FROM buku WHERE id_buku = '$id_buku'";
             $row = $koneksi -> prepare($sql);
               $row -> execute();
               $hasil = $row -> fetchAll();
               foreach ($hasil as $pecah) {
               
            $subharga = $pecah['harga']*$jumlah;
            

           ?>
          <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $pecah['judul'];?></td>
            <td>Rp. <?php echo number_format($pecah['harga']);?></td>
            <td><?php echo $jumlah;?></td>
            <td>Rp. <?php echo number_format($subharga);?></td>
          </tr>
        <?php $no++; 
        $total_akhir += $subharga;    }}?>

        </tbody>
        <tfoot> 
            <th colspan="4">  Total</th>
            <td>Rp. <?php echo number_format($isi['biaya']); ?></td>
        </tfoot>
        <tfoot> 
            <th colspan="4">  Ongkir</th>
            <td>Rp. <?php echo number_format($isi['biaya_ongkir']); ?></td>
        </tfoot>

      </table>


      <div class="row">
        <div class="col-md-7">
          <div class="alert alert-info">
            <p>
              Silahkan Melakukan Pembayaran Sebesar Rp. <?php echo number_format($isi['biaya']); ?>
              Ke<br>
              <strong>BANK BCA 118-229-339-00 A/N ILHAM GADANG Dan <br> 
              Konfirmasi Pembayaran By Wa 082113254137 Atau Upload Bukti Pembayaran</strong>
            </p>
          </div>
        </div>
      </div>
       <a href="selesai.php" class="btn btn-primary">Halaman Awal</a>
       <a href="upload.php?id=<?php echo $_SESSION['id_transaksi']; ?>" class="btn btn-light">Upload Bukti</a>
     </section>
</div>
<!-- ini footer -->
<footer class="container-fluid mt-4 mb-4 " style="margin-top: 10%; margin-bottom: 5%;" >
<div class="row">

  <div class="col-md-12"> <h9 style="color: black;"><center>Copyrights © 2021 Ilham Gadang Murakabi. All Rights Reserved </h9></div>  

</div>
</div>
</footer>

</body>
</html>