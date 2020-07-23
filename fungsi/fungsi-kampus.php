<?php
function tampilKampus()
{
    global $conn;
    $query = "SELECT * FROM tbl_kampus";
    $res   = mysqli_query($conn, $query);

    $row   = [];

    while ($rows = mysqli_fetch_assoc($res)) {
        $row[] = $rows;
    }
    return $row;
}
function postKampus($data)
{
    global $conn;
    // menangkap data yang di kirim dari form
    // $id_keahlian = $data['$id_keahlian'];
    $nama_kampus = $data['nama_kampus'];
    $kota_kampus = $data['kota_kampus'];

    // menginput data ke database
    $query = "INSERT INTO tbl_kampus(id_kampus, nama_kampus, kota_kampus) VALUES ('', '$nama_kampus','$kota_kampus')";
    if (mysqli_query($conn, $query)) {
        echo "<div class='alert alert-success'>data berhasil diunggah</div>";
    }
}
function hapusKampus($id_kampus)
{
    global $conn;

    $query = "DELETE FROM tbl_kampus WHERE id_kampus = '$id_kampus'";
    // menghapus data dari database
    if (mysqli_query($conn, $query)) {
        echo "<div class='alert alert-success'>Data Berhasil dihapus</div>";
    }
    // mengalihkan halaman kembali ke index.php
    // header("location:admin-keahlian.php");
}
