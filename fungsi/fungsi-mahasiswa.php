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
function detailMahasiswa($id_mahasiswa)
{
    global $conn;
    $query = "SELECT mhs.id_mahasiswa,mhs.id_kampus,mhs.nama_lengkapmahasiswa,mhs.nama_panggilanmahasiswa,mhs.NIM,mhs.nama_kelompok,mhs.tgl_mulai,mhs.tgl_selesai,mhs.file_fotomahasiswa,mhs.jurusan_mahasiswa,mhs.no_hp,mhs.email,mhs.instagram,mhs.file_cv,kmh.id_keahlian,kmh.nilai,kh.nama_keahlian,kps.nama_kampus FROM ((tbl_mahasiswa mhs LEFT JOIN tbl_keahlianmahasiswa kmh ON mhs.id_mahasiswa = kmh.id_mahasiswa) LEFT JOIN tbl_keahlian kh ON kmh.id_keahlian = kh.id_keahlian) LEFT JOIN tbl_kampus kps ON mhs.id_kampus = kps.id_kampus WHERE mhs.id_mahasiswa = '$id_mahasiswa'";
    $res   = mysqli_query($conn, $query);

    $row   = mysqli_fetch_assoc($res);

    return $row;
}
function postMahasiswa($data)
{
    global $conn;

    $id_kampus = $data['id_kampus'];
    $nama_lengkapmahasiswa = $data['nama_lengkapmahasiswa'];
    $nama_panggilanmahasiswa = $data['nama_panggilanmahasiswa'];
    $NIM = $data['NIM'];
    $org_mulai = $data['tgl_mulai'];
    $format_mulai = date_create($org_mulai);
    $new_mulai = date_format($format_mulai, "Y-m-d");
    $org_selesai = $data['tgl_selesai'];
    $format_selesai = date_create($org_selesai);
    $new_selesai = date_format($format_selesai, "Y-m-d");
    $jurusan_mahasiswa = $data['jurusan_mahasiswa'];
    $file_fotomahasiswa = $_FILES['file_fotomahasiswa']['name'];
    $tmp_profpic = $_FILES['file_fotomahasiswa']['tmp_name'];
    $dir_profpic = "upload/profpic/";
    $nama_kelompok = $data['nama_kelompok'];
    $no_hp = $data['no_hp'];
    $email = $data['email'];
    $instagram = $data['instagram'];
    $file_cv = $_FILES['file_cv']['name'];
    $tmp_cv = $_FILES['file_cv']['tmp_name'];
    $dir_cv = "upload/cv/";

    $query = "INSERT INTO tbl_mahasiswa (id_mahasiswa, id_kampus, nama_lengkapmahasiswa, nama_panggilanmahasiswa, NIM, tgl_mulai, tgl_selesai,jurusan_mahasiswa, file_fotomahasiswa, nama_kelompok, no_hp, email, instagram, file_cv) VALUES ('','$id_kampus','$nama_lengkapmahasiswa','$nama_panggilanmahasiswa','$NIM','$new_mulai','$new_selesai','$jurusan_mahasiswa','$file_fotomahasiswa','$nama_kelompok','$no_hp','$email','$instagram','$file_cv' )";
    move_uploaded_file($tmp_profpic, $dir_profpic . $file_fotomahasiswa);
    move_uploaded_file($tmp_cv, $dir_cv . $file_cv);
    if (mysqli_query($conn, $query)) {
        echo "<div class='alert alert-success'>hore berhasil unggah </div>";
    }
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
