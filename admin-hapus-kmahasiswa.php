<?php

include 'fungsi/config.php';
hapusKmahasiswa($_GET['id_keahlianmahasiswa']);
echo "<meta http-equiv='refresh' content='1.5;url=admin-kmahasiswa.php'>";