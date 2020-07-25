<?php
function tampilKmahasiswa()
{
    global $conn;
    $query = "SELECT kmh.id_keahlianmahasiswa,kmh.id_mahasiswa,kmh.id_keahlian,kmh.nilai,kh.nama_keahlian, mhs.nama_lengkapmahasiswa FROM (tbl_keahlianmahasiswa kmh LEFT JOIN tbl_keahlian kh ON kmh.id_keahlian = kh.id_keahlian) LEFT JOIN tbl_mahasiswa mhs ON kmh.id_mahasiswa = mhs.id_mahasiswa";
    $res   = mysqli_query($conn, $query);

    $row   = [];

    while ($rows = mysqli_fetch_assoc($res)) {
        $row[] = $rows;
    }
    return $row;
}

function postKmahasiswa($data)
{
    global $conn;
    // menangkap data yang di kirim dari form
    // $id_keahlian = $data['$id_keahlian'];
    $id_mahasiswa = $data['id_mahasiswa'];
    $id_keahlian = $data['id_keahlian'];
    $nilai = $data['nilai'];

    // menginput data ke database
    $query = "INSERT INTO tbl_keahlianmahasiswa(id_keahlianmahasiswa, id_mahasiswa, id_keahlian, nilai) VALUES ('', '$id_mahasiswa','$id_keahlian','$nilai')";
    if (mysqli_query($conn, $query)) {
        echo "<div class='alert alert-success'>data berhasil diunggah</div>";
    }
    // mengalihkan halaman kembali ke index.php
    // header("location:admin-keahlian.php");
}
function hapusKmahasiswa($id_keahlianmahasiswa)
{
    global $conn;

    $query = "DELETE FROM tbl_keahlianmahasiswa WHERE id_keahlianmahasiswa = '$id_keahlianmahasiswa'";
    // menghapus data dari database
    if (mysqli_query($conn, $query)) {
        echo "<div class='alert alert-success'>Data Berhasil dihapus</div>";
    }
    // mengalihkan halaman kembali ke index.php
    // header("location:admin-keahlian.php");
}

// SELECT kmh.id_keahlianmahasiswa,kmh.id_mahasiswa,kmh.id_keahlian,kmh.nilai,kh.nama_keahlian, mhs.nama_lengkapmahasiswa FROM (tbl_keahlianmahasiswa kmh LEFT JOIN tbl_keahlian kh ON kmh.id_keahlianmahasiswa = kh.id_keahlianmahasiswa) LEFT JOIN tbl_mahasiswa mhs ON kmh.id_mahasiswa = mhs.id_mahasiswa;