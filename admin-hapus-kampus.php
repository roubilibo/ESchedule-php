<?php
include 'fungsi/config.php';
hapusKampus($_GET['id_kampus']);
echo "<meta http-equiv='refresh' content='1.5;url=admin-kampus.php'>";
