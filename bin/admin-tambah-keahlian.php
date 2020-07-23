<?php
// koneksi database
include 'fungsi/config.php';

// menangkap data yang di kirim dari form
$id_keahlian = $_POST['$id_keahlian'];
$nama_keahlian = $_POST['nama_keahlian'];

// menginput data ke database
$query = "INSERT INTO tbl_keahlian(id_keahlian, nama_keahlian) VALUES ('$id_keahlian', '$nama_keahlian')";
$query_data = mysqli_query($koneksi, $query);

// mengalihkan halaman kembali ke index.php
header("location:admin-keahlian.php");
