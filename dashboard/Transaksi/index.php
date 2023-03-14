<?php
  include("../conectdb/koneksi.php");
  $sql = "SELECT * FROM tbltransaksi";
  $result = $conn->query($sql);

?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Transaksi</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <!-- <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div> -->
          <form action="index.php">
            <input type="hidden" name="hal" value="jabatan-create">
          <button type="submit" class="btn btn-sm btn-outline-secondary">
            <span data-feather="save" class="align-text-bottom"></span>
            Tambah Transaksi
          </button>
          </form>
        </div>
      </div>

      <div class="card">
  <div class="card-body">
  <table class="table table-hover table-bordered">
  <thead>
    <tr class="text-center">
      <th scope="col" width="15">No.</th>
      <th scope="col">Id Transaksi</th>
      <th scope="col">Id Paket</th>
      <th scope="col">Id Customer</th>
      <th scope="col">Id Admin</th>
      <th scope="col">Kode Transaksi</th>
      <th scope="col">Customer</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jenis</th>
      <th scope="col">No Plat</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          $nmr=1;
        
          while($row = $result->fetch_assoc()) {
      ?>
      <th scope="row" class="text-center"><?= $nmr; ?></th>
      <td><?= $row['id_transaksi']; ?></td>
      <td><?= $row['id_paket']; ?></td>
      <td><?= $row['id_customer']; ?></td>
      <td><?= $row['id_admin']; ?></td>
      <td><?= $row['kode_transaksi']; ?></td>
      <td><?= $row['nama_customer']; ?></td>
      <td><?= $row['tanggal']; ?></td>
      <td><?= $row['jenis_kendaraan']; ?></td>
      <td><?= $row['no_plat']; ?></td>
      <td><?= $row['harga']; ?></td>
      <td>
      <div class="btn-group me-2">
            <a href="index.php?hal=transaksi-edit&id=<?=$row ["id_transaksi"];?> &id_transaksi=<?=$row ["id_transaksi"];?>" class="btn btn-sm btn-outline-secondary">Ubah</a>
            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="(hapus('<?= $row["id_transaksi"]; ?>'))">Hapus</button>
          </div> 
      </td>
    </tr>
    <?php
      $nmr++;
        }
      } else {
       echo "";
      }

      $conn->close();
    ?>
   
  </tbody>
</table>
  </div>
</div>

<script>
  function hapus(data){
    if(confirm('Apakah Anda Yakin Akan Menghapus Data Transaksi ' + data + ' ?')){
      window.location.replace('Transaksi/hapus.php?transaksi=' + data)
    } 
  }
</script>