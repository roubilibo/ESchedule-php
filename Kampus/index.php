<!DOCTYPE html>
<html>

<head>
    <title>PENJADWALAN MAGANG</title>
</head>

<body>

    <h2>DATA KAMPUS</h2>
    <br />
    <a href="tambah.php">+ TAMBAH DATA KAMPUS</a>
    <br />
    <br />
    <table border="1">
        <tr>

            <th>No</th>
            <th>id kampus</th>
            <th>Nama Kampus</th>
            <th>Kota Kampus</th>
            <th>Opsi</th>

        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $sql2 = "SELECT * from tbl_kampus";
        $result = $koneksi->query($sql2);
        while ($dt_data = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $dt_data['id_kampus'] ?></td>
                <td><?php echo $dt_data['nama_kampus'] ?></td>
                <td><?php echo $dt_data['kota_kampus'] ?></td>
                <td>
                    <a href="hapus.php?id_kampus=<?php echo $dt_data['id_kampus']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>