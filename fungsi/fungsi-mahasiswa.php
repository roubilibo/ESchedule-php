<?php
function tampilMahasiswa()
{
    global $conn;
    $query = "SELECT mhs.id_mahasiswa,mhs.id_kampus,mhs.nama_lengkapmahasiswa,mhs.NIM,mhs.nama_kelompok,mhs.tgl_mulai,mhs.tgl_selesai,kmh.id_keahlian,kmh.nilai,kh.nama_keahlian,kps.nama_kampus FROM ((tbl_mahasiswa mhs LEFT JOIN tbl_keahlianmahasiswa kmh ON mhs.id_mahasiswa = kmh.id_mahasiswa) LEFT JOIN tbl_keahlian kh ON kmh.id_keahlian = kh.id_keahlian) LEFT JOIN tbl_kampus kps ON mhs.id_kampus = kps.id_kampus
    ";
    $res   = mysqli_query($conn, $query);

    $row   = [];

    while ($rows = mysqli_fetch_assoc($res)) {
        $row[] = $rows;
    }
    return $row;
}
function hapusMahasiswa($id_mahasiswa)
{
    global $conn;

    $query = "DELETE FROM tbl_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'";
    // menghapus data dari database
    if (mysqli_query($conn, $query)) {
        echo "<div class='alert alert-success'>Data Berhasil dihapus</div>";
    }
    // mengalihkan halaman kembali ke index.php
    // header("location:admin-keahlian.php");
}
function hapusMahasiswaKeahlian($id_mahasiswa)
{
    global $conn;

    $query = "DELETE FROM tbl_keahlianmahasiswa WHERE id_mahasiswa = '$id_mahasiswa'";

    if (mysqli_query($conn, $query)) {
        echo "--------------------------------------------------------------";
    }
}
function cekKeahlian($id_mahasiswa)
{
    global $conn;

    $query = "SELECT * FROM tbl_keahlianmahasiswa WHERE id_mahasiswa = '$id_mahasiswa'";
    $res   = mysqli_query($conn, $query);

    $cek   = mysqli_num_rows($res);

    if ($cek > 0) {
        hapusMahasiswaKeahlian($id_mahasiswa);
        hapusMahasiswa($id_mahasiswa);
    } else {
        hapusMahasiswa($id_mahasiswa);
    }
}
// SELECT mhs.id_mahasiswa,mhs.id_kampus,mhs.nama_lengkapmahasiswa,mhs.nama_lengkapmahasiswa,mhs.nama_kelompok,mhs.tgl_mulai,mhs.tgl_selesai,kmh.id_keahlian,kmh.nilai,kh.nama_keahlian,kps.nama_kampus FROM ((tbl_mahasiswa mhs LEFT JOIN tbl_keahlianmahasiswa kmh ON mhs.id_mahasiswa = kmh.id_mahasiswa) LEFT JOIN tbl_keahlian kh ON kmh.id_keahlian = kh.id_keahlian) LEFT JOIN tbl_kampus kps ON mhs.id_kampus = kps.id_kampus
