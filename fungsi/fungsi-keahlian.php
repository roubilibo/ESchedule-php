<?php

function tampilKeahlian()
{
    global $conn;
    $query = "SELECT * FROM tbl_keahlian";
    $res   = mysqli_query($conn, $query);

    $row   = [];

    while ($rows = mysqli_fetch_assoc($res)) {
        $row[] = $rows;
    }
    return $row;
}
function postKeahlian($data)
{
    global $conn;
    // menangkap data yang di kirim dari form
    // $id_keahlian = $data['$id_keahlian'];
    $nama_keahlian = $data['nama_keahlian'];

    // menginput data ke database
    $query = "INSERT INTO tbl_keahlian(id_keahlian, nama_keahlian) VALUES ('', '$nama_keahlian')";
    if (mysqli_query($conn, $query)) {
        echo "<div class='alert alert-success'>data berhasil diunggah</div>";
    }
    // mengalihkan halaman kembali ke index.php
    // header("location:admin-keahlian.php");
}
function hapusKeahlian($id_keahlian)
{
    global $conn;

    $query = "DELETE FROM tbl_keahlian WHERE id_keahlian = '$id_keahlian'";
    // menghapus data dari database
    if (mysqli_query($conn, $query)) {
        echo "<div class='alert alert-success'>Data Berhasil dihapus</div>";
    }
    // mengalihkan halaman kembali ke index.php
    // header("location:admin-keahlian.php");
}
function tampilNamakeahlian()
{
    global $conn;
    $query = "SELECT * FROM tbl_keahlian";
    $res   = mysqli_query($conn, $query);

    $row   = mysqli_fetch_assoc($res);

    return $row;
}
