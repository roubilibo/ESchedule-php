<?php
include 'fungsi/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Jekyll v4.0.1" />
    <title>Index Mahasiswa</title>

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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span><strong>Semua Mahasiswa Terdaftar </strong></span>
                    <a href="admin-mahasiswa-form.php" class="btn btn-sm btn-secondary">Tambah</a>
                    <span class="float-right">
                        Urutkan Waktu <a href="#" class="badge badge-primary">Terbaru</a> | <a href="#" class="badge badge-primary">Terlama</a>
                    </span>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>ID Magang</th>
                                <th>Nama Mahasiswa</th>
                                <th>Kampus</th>
                                <th>Keahlian</th>
                                <th>Kelompok</th>
                                <th>Masuk</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <?php
                        $no = 1;
                        $data = tampilMahasiswa();
                        ksort($data);
                        foreach ($data as $row) : ?>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href=""><strong><?= $no++; ?></strong></a>
                                    </td>
                                    <td><?= $row['id_mahasiswa']; ?></td>
                                    <td><?= $row['nama_lengkapmahasiswa']; ?></td>
                                    <td><?= $row['nama_kampus']; ?></td>
                                    <td><?= $row['nama_keahlian']; ?></td>
                                    <td><?= $row['nama_kelompok']; ?></td>
                                    <td><?= $row['tgl_mulai']; ?></td>
                                    <td><?= $row['nilai']; ?></td>
                                    <td>
                                        <form action="#">
                                            <a href="#">
                                                <button class="btn btn-sm" type="submit" onclick="return confirm('Are You Sure?')">
                                                    <i class="fas fa-trash text-danger"></i>
                                                </button>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <div class="row">
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
        </div>
    </main>
    <script src="assets/libs/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>