<?php
require_once("function.php");

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('user berhasil di tambahkan!');
              </script>";
    } else {
        echo mysqli_error($koneksi);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/css/logregis.css">
</head>

<div class="text-register">
    <h3>Register</h3>
</div>
<div class="data-form">
    <form action="" method="post" autocomplete="off">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <br />
        <label for="password">Password</label>
        <input type="text" name="password" id="password">
        <br />
        <label for="password2">Konfirmasi password</label>
        <input type="password" name="password2" id="password2">
        <br />
        <p>Sudah memiliki akun? <a href="http://localhost/bew_xirplb_1920_35_Taufik_NurFauzi/controller/c_siswa.php?aksi=login">Login</a></p>
        <br />
        <button type="submit" name="register" class="register">Register</button>
    </form>
</div>

</body>

</html>