<?php

// dsini session yang sudah start, akan dihancurkan
// begitu juga dengan cookie (remember me)
// dalam waktu yang telah di tentukan
// lalu akan kembali ke halaman login lagi

session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

header("Location: http://localhost/bew_xirplb_1920_35_Taufik_NurFauzi/controller/c_siswa.php?aksi=login");
exit;

?>




