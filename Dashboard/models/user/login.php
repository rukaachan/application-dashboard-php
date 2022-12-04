<?php
session_start();

require_once('function.php');

// cek cookie

if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // username berdarsarkan id
    $result = mysqli_query($koneksi, "SELECT username FROM user WHERE id=$id");
    $row = mysqli_fetch_assoc($result);


    // cek cookie dan username
    if ($key === hash("sha256", $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION["login"])) {
    header("Location: http://localhost/bew_xirplb_1920_35_Taufik_NurFauzi/index.php");
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

            // cek remember me
            if (isset($_POST['remember'])) {
                // buat cookie

                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['username']), time() + 60);
            }



            header("Location: ../index.php");
            exit;
        }
    }
    $error = true;
}



// if (isset($_SESSION["login"])) {
//     header("Location: http://localhost/bew_xirplb_1920_35_Taufik_NurFauzi/index.php");
//     exit;
// }


// if (isset($_POST["login"])) {
//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

//     // cek username
//     if (mysqli_num_rows($result) === 1) {

//         // cek password
//         $row = mysqli_fetch_assoc($result);
//         if (password_verify($password, $row["password"])) {
//             // set session 

//             $_SESSION["login"] = true;

//             header("Location: ../index.php");
//             exit;
//         }
//     }
//     $error = true;
// }


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
            <br>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember me</label>
            <p>Belum memiliki akun? <a href="http://localhost/bew_xirplb_1920_35_Taufik_NurFauzi/controller/c_siswa.php?aksi=register">Register</a></p>
            <!-- <br /> -->
            <button type="submit" name="login">Submit</button>
        </form>
    </div>
</body>

</html>