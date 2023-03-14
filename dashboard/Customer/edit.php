<form action="customer/ubah.php" method="post">
    <div class="card mt-5" >
    <div class="card-body">
        <h5 class="card-title">Tambah Customer</h5>
        <div class=" mt-5 mb-3">
            <label for="customer" class="form-label">Customer</label>
            <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
            <input type="text" class="form-control" name="customer" id="customer" placeholder="Masukkan Customer" value="<?= $_GET['customer']; ?>" required>
        </div>
        <div class="card-footer mt-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="index.php?hal=customer" class="btn btn-secondary">Batal</a>
        </div>
    </div>
    </div>
</form>