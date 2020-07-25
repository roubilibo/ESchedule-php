<?php
include 'fungsi/config.php';
cekKeahlian($_GET['id_mahasiswa']);
echo "<meta http-equiv='refresh' content='1.5;url=index.php'>";
