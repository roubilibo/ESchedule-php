<?php

include 'fungsi/config.php';
hapusKeahlian($_GET['id_keahlian']);
echo "<meta http-equiv='refresh' content='1.5;url=admin-keahlian.php'>";