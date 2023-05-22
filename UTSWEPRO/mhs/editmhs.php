<?php
    $idmhs = $_GET["p1"];
    $sql = "SELECT tu.nama, tu.nim, tu.prodi FROM tb_mahasiswa tu WHERE tu.idmhs='$idmhs';";
    $hasil = mysqli_query($koneksi, $sql);
    if(mysqli_num_rows($hasil) > 0){
        $h = mysqli_fetch_assoc($hasil);
?>
<h3>Ubah Data Mahasiswa <?=$h["nama"]?></h3>
<form method="POST" action="datamhs.php">
    <input type="hidden" name="act" value="update">
    <input type="hidden" name="idmhs" value="<?=$idmhs?>">

    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Lengkap" value="<?=$h["nama"]?>">
        <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="number" name="txNIM" class="form-control" id="floatingInput" placeholder="Nim" value="<?=$h["nim"]?>">
        <label for="floatingInput">Nim</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txPRODI" class="form-control" id="floatingInput" placeholder="User Name" value="<?=$h["prodi"]?>">
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
    <button type="submit" class="btn btn-primary"> Ubah Data Mahasiswa </button>
    <a href="datamhs.php" class="btn btn-secondary"> Batal </a>
</form>
<?php
    }else{
        echo "<script>window.location.href='datamhs.php';</script>";
    }
?>