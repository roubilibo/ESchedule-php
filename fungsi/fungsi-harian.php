<?php
if (isset($_POST["from_date"], $_POST["to_date"])) {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "penjadwalanpkl";

    $conn = mysqli_connect($host, $user, $pass, $db);

    $output = '';
    $query = "SELECT mhs.id_mahasiswa,mhs.id_kampus,mhs.nama_lengkapmahasiswa,mhs.nama_panggilanmahasiswa,mhs.NIM,mhs.nama_kelompok,mhs.tgl_mulai,mhs.tgl_selesai,mhs.file_fotomahasiswa,mhs.jurusan_mahasiswa,mhs.no_hp,mhs.email,mhs.instagram,mhs.file_cv,kmh.id_keahlian,kmh.nilai,kh.nama_keahlian,kps.nama_kampus FROM ((tbl_mahasiswa mhs LEFT JOIN tbl_keahlianmahasiswa kmh ON mhs.id_mahasiswa = kmh.id_mahasiswa) LEFT JOIN tbl_keahlian kh ON kmh.id_keahlian = kh.id_keahlian) LEFT JOIN tbl_kampus kps ON mhs.id_kampus = kps.id_kampus WHERE mhs.tgl_mulai BETWEEN '" . $_POST["from_date"] . "' AND '" . $_POST["to_date"] . "'";
    $result = mysqli_query($conn, $query);
    $output .= ' 
        <table class="table">  
            <thead>
                <tr>
                <th>#</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Kampus</th>
                <th>Keahlian</th>
                <th>Kelompok</th>
                <th>Masuk</th>
                <th>Nilai</th>
                </tr>
            </thead>  
                ';
    $no = 1;
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $output .= '  
            <tbody>
                <tr>
                    <td>
                        <a href="admin-detail-mahasiswa.php?id=' . $row['id_mahasiswa'] . '"><strong>' . $no++ . '</strong></a>
                    </td>
                    <td class="capitalized">' . $row['nama_lengkapmahasiswa'] . '</td>
                    <td>' . $row['NIM'] . '</td>
                    <td>' . $row['nama_kampus'] . '</td>
                    <td>' . $row['nama_keahlian'] . '</td>
                    <td>' . $row['nama_kelompok'] . '</td>
                    <td>' . $row['tgl_mulai'] . '</td>
                    <td>' . $row['nilai'] . '</td>
                </tr>
            </tbody>
                ';
        }
    } else {
        $output .= '  
                    <tr>  
                        <td colspan="5">No Order Found</td>  
                    </tr>  
                    ';
    }
    $output .= '</table>';
    echo $output;
}
