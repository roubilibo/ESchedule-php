<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id_kampus = $_GET['id_kampus'];


// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM tbl_kampus WHERE id_kampus = '$id_kampus'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
