<?php 
include "sess_check.php";
include 'koneksi.php';
include 'function/format_tanggal.php';
include 'function/format_rupiah.php';
 ?>
 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <?php 
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $query = "SELECT * FROM suplier WHERE id_sup ='$id'";
        $exec = mysqli_query($conn,$query);
        $res =mysqli_fetch_assoc($exec);
         ?>
         <form action="datasuplier.php" method="POST">
        <input autocomplete='off' type="hidden" name="id_sup" value="<?= $res['id_sup'] ?>">
        <input autocomplete='off' type="text" class="form-control mb-2" name="nama" value="<?= $res['nama_sup'] ?>">
        <input autocomplete='off' type="text" class="form-control mb-2" name="telp" value="<?= $res['telp'] ?>">
        <input autocomplete='off' type="text" class="form-control mb-2" name="jenis" value="<?= $res['jenis'] ?>">
        <textarea name="alamat" class="form-control"><?= $res['alamat'] ?></textarea>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" name="edit" class="btn btn-primary">Save</button>
        </form>
     <?php }
        if(isset($_POST['id_brg'])){
        $id = $_POST['id_brg'];
        $query = "SELECT * FROM product WHERE id_brg ='$id'";
        $exec = mysqli_query($conn,$query);
        $res =mysqli_fetch_assoc($exec);
         ?>
         <form action="barang.php" method="POST">
        <input autocomplete='off' type="hidden" name="id_brg" value="<?= $res['id_brg'] ?>">
        <input autocomplete='off' type="text" class="form-control mb-2" name="nama" value="<?= $res['nama'] ?>">
        <input autocomplete='off' type="hidden" class="form-control mb-2" name="jenis" value="<?= $res['jenis'] ?>">
        <input autocomplete='off' type="text" class="form-control mb-2" name="harga_modal" value="<?= $res['harga_modal'] ?>">
         <input autocomplete='off' type="text" class="form-control mb-2" name="harga_jual" value="<?= $res['harga_jual'] ?>">
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" name="edit" class="btn btn-primary">Save</button>
        </form>
     <?php }

      if(isset($_POST['id_disc'])){
        $id = $_POST['id_disc'];
        $query = "SELECT * FROM disc WHERE id_disc ='$id'";
        $exec = mysqli_query($conn,$query);
        $res =mysqli_fetch_assoc($exec);
         ?>
         <form action="discount.php" method="POST">
        <input autocomplete='off' type="hidden" name="id_disc" value="<?= $res['id_disc'] ?>">
        <input autocomplete='off' type="text" class="form-control mb-2" name="discount" value="<?= $res['discount'] ?>">
        
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" name="edit" class="btn btn-primary">Save</button>
        </form>
     <?php }
     if(isset($_POST['id_kon'])){
        $id = $_POST['id_kon'];
        $query = "SELECT * FROM konsumen WHERE id_kon ='$id'";
        $exec = mysqli_query($conn,$query);
        $res =mysqli_fetch_assoc($exec);
         ?>
         <form action="datakonsumen.php" method="POST">
        <input autocomplete='off' type="hidden" name="id_kon" value="<?= $res['id_kon'] ?>">
        <input autocomplete='off' type="text" class="form-control mb-2" name="nama" value="<?= $res['nama_kon'] ?>">
        <input autocomplete='off' type="text" class="form-control mb-2" name="no_telp" value="<?= $res['telp'] ?>">
        <input autocomplete='off' type="text" class="form-control mb-2" name="username" value="<?= $res['user_kon'] ?>">
        <input autocomplete='off' type="text" class="form-control mb-2" name="password" value="<?= $res['password'] ?>">
        <textarea name="alamat" class="form-control"><?= $res['alamat'] ?></textarea>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" name="edit" class="btn btn-primary">Save</button>
        </form>
    <?php } 

     if(isset($_POST['id_feed'])){
      $id = $_POST['id_feed'];
      $query = "SELECT * FROM feedback WHERE id_feed ='$id'";
      $exec = mysqli_query($conn,$query);
      $res =mysqli_fetch_assoc($exec);
       ?>
       <form action="feedback.php" method="POST">
       <input autocomplete='off' type="hidden" name="id_feed" value="<?= $res['id_feed'] ?>">
      <textarea name="reply" class="form-control"><?= $res['reply'] ?></textarea>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="Submit" name="edit" class="btn btn-primary">Save</button>
      </form>
  <?php } 


    if(isset($_POST['id_ksr'])){
        $id = $_POST['id_ksr'];
        $query = "SELECT * FROM kasir WHERE id_kasir ='$id'";
        $exec = mysqli_query($conn,$query);
        $res =mysqli_fetch_assoc($exec);
         ?>
         <form action="kasir.php" method="POST">
          <input autocomplete='off' class="form-control mb-2" type="hidden" name="id_kasir" value="<?=$res['id_kasir']?>" >
          <input autocomplete='off' class="form-control mb-2" type="text" name="nama" value="<?=$res['nama_ksr']?>" >
          <input autocomplete='off' class="form-control mb-2" type="text" name="telp" value="<?=$res['no_telp']?>">
          <input autocomplete='off' class="form-control mb-2" type="text" name="user_kasir" value="<?=$res['user_kasir']?>" >
          <input autocomplete='off' class="form-control mb-2" type="text" name="pass_kasir" value="<?=$res['pass_kasir']?>" >
          <textarea class="form-control" name="alamat"><?= $res['alamat'] ?></textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="Submit" name="edit" class="btn btn-primary">Save</button>
      </div></form>

    <?php } ?>
   

 
    <?php 
     if(isset($_POST['id_trx'])){
        $id = $_POST['id_trx'];
        $sql = "SELECT trx.*, tmp_trx.*, product.*, konsumen.*, kasir.*,disc.*,status_transaksi.* FROM trx, tmp_trx, product, konsumen, kasir, disc, status_transaksi  WHERE trx.id_trx=tmp_trx.id_trx AND trx.id_kon=konsumen.id_kon AND trx.status_transaksi=status_transaksi.id_transaksi and trx.id_discount=disc.id_disc and tmp_trx.id_brg=product.id_brg
        AND trx.id_kasir = kasir.id_kasir AND trx.id_trx='". $id ."'";
        $query = mysqli_query($conn,$sql);
        $res = mysqli_fetch_array($query);
    ?>
        <div id="section-to-print">
          <section id="header-kop">
            <div class="container-fluid">
              <table class="table table-borderless">
                <tbody>
                  <tr>
                    <td class="text-left" width="20%">
                      <img src="foto/book.png" alt="logo-dkm" width="80" />
                    </td>
                    <td class="text-center" width="60%">
                    <?php $exec = mysqli_query($conn,"SELECT * FROM info");
                        $info = mysqli_fetch_assoc($exec);
                       ?>
                    <b><?= $info['nama_toko'] ?></b> <br>
                    <?= $info['alamat'] ?><br>
                    <?= $info['no_telp'] ?><br>
                    <td class="text-right" width="20%">
                    </td>
                  </tr>
                </tbody>
              </table>
              <hr class="line-top" />
            </div>
          </section>

  <section id="body-of-report">
    <div class="container-fluid">
      <h4 class="text-center">Detail Transaksi</h4>
      <br />
<table width="100%">
  <tr>
    <td width="20%"><b>ID. Transaksi</b></td>
    <td width="2%"><b>:</b></td>
    <td width="78%"><?php echo $res['id_trx'];?></td>
  </tr>
  <tr>
    <td width="20%"><b>Tanggal</b></td>
    <td width="2%"><b>:</b></td>
    <td width="78%"><?php echo format_tanggal($res['tgl_trx']);?></td>
  </tr>

  <tr>
    <td width="20%"><b>Konsumen</b></td>
    <td width="2%"><b>:</b></td>
    <td width="78%"><?php echo $res['nama_kon'];?></td>
  </tr>
  <tr>
    <td width="20%"><b>Kasir</b></td>
    <td width="2%"><b>:</b></td>
    <td width="78%"><?php echo $res['nama_ksr'];?></td>
  </tr>
 
</table>
</br>
<?php
  $dis=($res['discount']);
  $total=($res['total']);
  $discount=(($total*$dis)/100);
  $total_bayar=($total-$discount);
  ?>
  <table class="table table-bordered table-keuangan">
        <thead>
          <tr>
            <th width="1%">No</th>
            <th width="10%">Nama Barang/Jasa</th>
            <th width="5%">Jumlah</th>
            <th width="10%">Harga Satuan</th>
            <th width="10%">Total</th>
            <th width="10%">Diskon</th>
             <th width="10%">Total Bayar</th>
             <th width="10%">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $i=1;
            $grand=0;
            $sqltmp = "SELECT tmp_trx.*, product.* FROM tmp_trx, product WHERE tmp_trx.id_brg=product.id_brg
                AND tmp_trx.id_trx='$id' ORDER BY product.nama ASC";
            $querytmp = mysqli_query($conn,$sqltmp);
            
            while($data = mysqli_fetch_array($querytmp)) {
              $ttl = $data['jml']*$data['harga_jual'];
              echo '<tr>';
              echo '<td class="text-center">'. $i .'</td>';
              echo '<td>'. $data['nama'] .'</td>';
              echo '<td>'. $data['jml'] .'</td>';
              echo '<td>'. format_rupiah($data['harga_jual']) .'</td>';
              echo '<td>'. format_rupiah($ttl) .'</td>';
              echo '<td>'. $res['discount'] .' %</td>';
              echo '<td>'. format_rupiah($total_bayar) .' </td>';
              echo '<td>'. $res['status'] .' </td>';
              echo '</tr>';
              $i++;
              $grand+=$ttl;
            }
          ?>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="4" class="text-center">Total </th>
            <th class="text-right"><?php echo format_rupiah($total_bayar);?></th>
          </tr>
        </tfoot>
  </table>
  <br />
    </div><!-- /.container -->
  </section>
  <div class="modal-footer">
    <a href="trx_cetak.php?id=<?php echo $id;?>" target="_blank" class="btn btn-warning">Print</a>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  </div>
</div>
     <?php }
    

          

         ?>
