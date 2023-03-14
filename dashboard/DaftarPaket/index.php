<?php
  include("../conectdb/koneksi.php");
  $sql = "SELECT * FROM tbldaftarpaket";
  $result = $conn->query($sql);

?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Paket</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <!-- <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div> -->
          <a href="index.php?hal=daftarpaket-create" class="btn btn-sm btn-outline-secondary">
            <span data-feather="save" class="align-text-bottom"></span>
            Tambah Paket
          </a>
        </div>
      </div>

      <div class="card">
  <div class="card-body">
  <table class="table table-hover table-bordered">
  <thead>
    <tr class="text-center">
      <th scope="col" width="15" class="">No.</th>
      <th scope="col">Id Paket</th>
      <th scope="col">Id Customer</th>
      <th scope="col">Jenis Kendaraan</th>
      <th scope="col">Nama Paket</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if ($result->num_rows > 0) {
      //output data of each row
      $nmr=1;

    while($row = $result->fetch_assoc()) {
      ?>
      <tr>
        <th scope="row" class="text-center"><?= $nmr; ?></th>
        <td><?= $row["id_paket"]; ?></td>
        <td><?= $row["id_customer"]; ?></td>
        <td><?= $row["jenis_kendaraan"];?></td>
        <td><?= $row["nama_paket"];?></td>
        <td><?= $row["harga"];?></td>
          </td>
        <td><div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Ubah</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Hapus</button>
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
