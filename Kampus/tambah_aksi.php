<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_kampus = $_POST['id_kampus'];
$nama_kampus = $_POST['nama_kampus'];
$kota_kampus = $_POST['kota_kampus'];


// menginput data ke database
$query = "INSERT INTO tbl_kampus(id_kampus, nama_kampus, kota_kampus) VALUES ('$id_kampus', '$nama_kampus', '$kota_kampus')";
$query_data = mysqli_query($koneksi, $query);

// mengalihkan halaman kembali ke index.php
header("location:index.php");
