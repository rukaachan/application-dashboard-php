<?php

session_start();
$_SESSION = [];
session_unset();
session_destroy();

header("Location: ../controller/c_siswa.php?aksi=login");
exit;

?>




