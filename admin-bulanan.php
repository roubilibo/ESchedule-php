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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Index <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown--1" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Manage </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown--1">
                            <a href="admin-kampus.php" class="dropdown-item">Kampus</a>
                            <a href="admin-keahlian.php" class="dropdown-item">Keahlian</a>
                            <a href="admin-kmahasiswa.php" class="dropdown-item">Keahlian Mahasiswa</a>
                            <a href="admin-mahasiswa.php" class="dropdown-item">Mahasiswa</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="dropdown--2" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i class="fas fa-clipboard-list"></i>Laporan</a>
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
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown--3" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Admin</a>
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
                    <span><strong>Bulan apa ini </strong></span>
                    <span class="float-right">
                        <form action="#">
                            <div class="input-group">
                                <input type="month" name="keyword" class="form-control form-control-sm text-center"
                                    placeholder="Cari">
                                <div class="input-group-append">
                                    <button class="btn btn-info btn-sm" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <a href="#" class="btn btn-info btn-sm">
                                        <i class="fas fa-eraser"></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </span>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Senin</th>
                                <th scope="col">Selasa</th>
                                <th scope="col">Rabu</th>
                                <th scope="col">Kamis</th>
                                <th scope="col">Jum'at</th>
                                <th scope="col">Sabtu</th>
                                <th scope="col" class="bg-danger">Minggu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>30</td>
                                <td>31</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
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