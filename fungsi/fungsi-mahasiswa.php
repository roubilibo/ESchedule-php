<?php
function tampilMahasiswa()
{
    global $conn;
    $query = "SELECT mhs.id_mahasiswa,mhs.id_kampus,mhs.nama_lengkapmahasiswa,mhs.nama_lengkapmahasiswa,mhs.nama_kelompok,mhs.tgl_mulai,mhs.tgl_selesai,kmh.id_keahlian,kmh.nilai,kh.nama_keahlian,kps.nama_kampus FROM ((tbl_mahasiswa mhs LEFT JOIN tbl_keahlianmahasiswa kmh ON mhs.id_mahasiswa = kmh.id_mahasiswa) LEFT JOIN tbl_keahlian kh ON kmh.id_keahlian = kh.id_keahlian) LEFT JOIN tbl_kampus kps ON mhs.id_kampus = kps.id_kampus
    ";
    $res   = mysqli_query($conn, $query);

    $row   = [];

    while ($rows = mysqli_fetch_assoc($res)) {
        $row[] = $rows;
    }
    return $row;
}
// SELECT mhs.id_mahasiswa,mhs.id_kampus,mhs.nama_lengkapmahasiswa,mhs.nama_lengkapmahasiswa,mhs.nama_kelompok,mhs.tgl_mulai,mhs.tgl_selesai,kmh.id_keahlian,kmh.nilai,kh.nama_keahlian,kps.nama_kampus FROM ((tbl_mahasiswa mhs LEFT JOIN tbl_keahlianmahasiswa kmh ON mhs.id_mahasiswa = kmh.id_mahasiswa) LEFT JOIN tbl_keahlian kh ON kmh.id_keahlian = kh.id_keahlian) LEFT JOIN tbl_kampus kps ON mhs.id_kampus = kps.id_kampus
