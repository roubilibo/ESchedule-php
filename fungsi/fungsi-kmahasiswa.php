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

// SELECT kmh.id_keahlianmahasiswa,kmh.id_mahasiswa,kmh.id_keahlian,kmh.nilai,kh.nama_keahlian, mhs.nama_lengkapmahasiswa FROM (tbl_keahlianmahasiswa kmh LEFT JOIN tbl_keahlian kh ON kmh.id_keahlianmahasiswa = kh.id_keahlianmahasiswa) LEFT JOIN tbl_mahasiswa mhs ON kmh.id_mahasiswa = mhs.id_mahasiswa;