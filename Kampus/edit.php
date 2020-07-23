<!DOCTYPE html>
<html>

<head>
    <title>PENJADWALAN MAGANG</title>
</head>

<body>

    <h2>DATA KAMPUS</h2>
    <br />
    <a href="index.php">KEMBALI</a>
    <br />
    <br />
    <h3>EDIT DATA KAMPUS</h3>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from tbl_kampus where id='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="update.php">
            <table>
                <tr>
                    <td>ID</td>
                    <td>
                        <input type="number" name="id" value="<?php echo $d['id']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Id Mahasiswa</td>
                    <td><input type="text" name="id_mhs" value="<?php echo $d['id_mahasiswa']; ?>"></td>
                </tr>
                <tr>
                    <td>Id Keahlian</td>
                    <td><input type="text" name="id_keahlian" value="<?php echo $d['id_keahlian']; ?>"></td>
                </tr>
                <tr>
                    <td>Nilai</td>
                    <td><input type="text" name="nilai" value="<?php echo $d['nilai']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>

</body>

</html>