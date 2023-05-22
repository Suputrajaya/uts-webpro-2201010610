<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dashboard</title>
  </head>
  
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="dashboard.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="mhs/datamhs.php">DataMahasiswa</a>
        <li class="nav-item">
          <a class="nav-link" href="user/datauser.php">DataUser</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container text-center">
        <div class="row">
          <div class="col-3">
            <div class="pg-3">
              <div class="card" style="width: 15rem;">
                <img src="gambar/user.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Data Mahasiswa</h5>
                  <p class="card-text">Dihalaman ini anda bisa menambahkan, mengubah, dan menghapus data mahasiswa.</p>
                  <a href="mhs/datamhs.php" class="btn btn-primary">Klik Disini</a>
              </div>
            </div>
          </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 15rem;">
              <img src="gambar/mhs.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Data User</h5>
                <p class="card-text">Dihalaman ini anda bisa menambahkan, mengubah, dan menghapus data matakuliah.</p>
                <a href="user/datauser.php" class="btn btn-primary">Klik Disini</a>
              </div>
            </div>
          </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>