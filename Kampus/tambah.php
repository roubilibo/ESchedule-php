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
    <h3>TAMBAH DATA KAMPUS</h3>
    <form method="POST" action="tambah_aksi.php">
        <table>
            <tr>
                <td>Nama Kampus</td>
                <td><input type="text" name="nama_kampus"></td>
            </tr>
			
			<tr>
                <td>Kota Kampus</td>
                <td><input type="text" name="kota_kampus"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>

</html>