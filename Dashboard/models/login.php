<?php
session_start();

require '../controllers/functions.php';

if (isset($_SESSION["login"])) {
    header("Location: ../views/dashboard_rplb_35.php");
    exit;
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session 

            $_SESSION["login"] = true;

            header("Location: dashboard_rplb_35.php");
            exit;
        }
    }
    $error = true;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="../assets/css/logregis.css">
</head>

<body>

    <div class="text-register">
        <h3>Halaman Login</h3>
    </div>

    <div class="data-form">
        <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic; text-align:center;">Username / password salah</p>
        <?php endif; ?>
        <form action="" method="post" autocomplete="off">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <br />
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <p>Belum memiliki akun? <a href="register.php">Register</a></p>
            <br />
            <button type="submit" name="login">Submit</button>
        </form>
    </div>
</body>

</html>