<?php
include 'fungsi/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Jekyll v4.0.1" />
    <title>Index-Kampus</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/navbar-fixed/" />

    <!-- Bootstrap core CSS -->
    <link href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/app.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/libs/fontawesome/css/all.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">ESchedule</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Index <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown--1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown--1">
                            <a href="admin-kampus.php" class="dropdown-item">Kampus</a>
                            <a href="admin-keahlian.php" class="dropdown-item">Keahlian</a>
                            <a href="admin-kmahasiswa.php" class="dropdown-item">Keahlian Mahasiswa</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="dropdown--2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-clipboard-list"></i>Laporan</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown--2">
                            <a href="admin-harian.php" class="dropdown-item">Harian</a>
                            <a href="admin-bulanan.php" class="dropdown-item">Bulanan</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="register.php" class="nav-link">Register</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown--3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown--3">
                            <a href="profile.php" class="dropdown-item">Profile</a>
                            <a href="#" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Register
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control" required autofocus>
                                <small class="form-text text-danger">Nama Harus Diisi.</small>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Panggilan</label>
                                <input type="text" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="">NIM</label>
                                <input type="text" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Kampus</label>
                                <select name="idkampus" id="" class="form-control">
                                    <?php
                                    $no = 1;
                                    $data = tampilKampus();
                                    ksort($data);
                                    foreach ($data as $row) : ?>
                                        <option value="<?= $row['id_kampus']; ?>"><?= $row['nama_kampus']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label><br>
                                <input type="file" name="photo" required>
                                <small class="form-text text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label for="">No. HP</label>
                                <input type="text" class="form-control" required autofocus>
                                <small class="form-text text-danger">No. HP Harus Diisi.</small>
                            </div>
                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input type="email" class="form-control" required>
                                <small class="form-text text-danger">E-mail Harus Diisi.</small>
                            </div>
                            <div class="form-group">
                                <label for="">Instagram</label>
                                <input type="text" class="form-control" required>
                                <small class="form-text text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label for="">Jurusan</label>
                                <input type="text" class="form-control" required>
                                <small class="form-text text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Kelompok</label>
                                <input type="text" class="form-control" required>
                                <small class="form-text text-danger">Nama Kelompok Tidak Boleh Sama Dengan Kelompok
                                    Lain</small>
                            </div>
                            <div class="form-group">
                                <label for="">tanggal Mulai Magang</label>
                                <input type="date" class="form-control" required>
                                <small class="form-text text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label for="">tanggal Selesai Magang</label>
                                <input type="date" class="form-control" required>
                                <small class="form-text text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label for="">File CV</label><br>
                                <input type="file" name="cv" required>
                                <small class="form-text text-danger"></small>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="assets/libs/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>