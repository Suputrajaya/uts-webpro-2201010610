<h3>Tambah Data Mahasiswa</h3>
<form method="POST" action="datamhs.php">
    <input type="hidden" name="act" value="store">
    <div class="form-floating mb-3">

        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Lengkap">
        <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="number" name="txNIM" class="form-control" id="floatingInput" placeholder="Nim">
        <label for="floatingInput">Nim</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txPRODI" class="form-control" id="floatingInput" placeholder="Prodi">
        <label for="floatingInput">Prodi</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" name="txPASS1" class="form-control" id="floatingInput" placeholder="Password" required>
        <label for="floatingInput">Password</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" name="txPASS2" class="form-control" id="floatingInput" placeholder="Verifikasi Password" required>
        <label for="floatingInput">Verifikasi Password</label>
    </div>
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary"> Submit </button>
    <a href="datamhs.php" class="btn btn-secondary"> Batal </a>
</form>