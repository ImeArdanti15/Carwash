<form action="daftarpaket/ubah.php" method="post">
    <div class="card mt-5" >
    <div class="card-body">
        <h5 class="card-title">Ubah Daftar Paket</h5>
        <div class=" mt-5 mb-3">
            <label for="daftarpaket" class="form-label">daftarpaket</label>
            <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
            <input type="text" class="form-control" name="daftarpaket" id="daftarpaket" placeholder="Masukkan Daftar Paket" value="<?= $_GET['Daftarpaket']; ?>" required>
        </div>
        <div class="card-footer mt-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="#" class="btn btn-secondary">Batal</a>
        </div>
    </div>
    </div>
</form>