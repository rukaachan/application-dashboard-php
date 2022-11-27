<?php

session_start();
$_SESSION = [];
session_unset();
session_destroy();

header("Location: ../controller/c_dashboard.php?aksi=login");
exit;

?>




