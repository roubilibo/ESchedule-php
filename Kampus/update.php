<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_keahlian = $_POST['nama_keahlian'];

 
// update data ke database
mysqli_query($koneksi,"update mahasiswa set id='$id', nama_keahlian='$nama_keahlian', where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
