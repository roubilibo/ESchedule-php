<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id_keahlian = $_GET['id_keahlian'];


// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM tbl_keahlian WHERE id_keahlian = '$id_keahlian'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
