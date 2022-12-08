<?php


// membuat function setsession untuk semua web page
// function ini akan di taruh di controller
function setsession()
{

    session_start();

    // Jika belom login, maka akan di arahkan ke halaman login

    if (!isset($_SESSION["login"])) {
        header("Location: http://localhost/bew_xirplb_1920_35_Taufik_NurFauzi/controller/c_siswa.php?aksi=login");
        exit;
    }
}

function registrasi($data)
{
    global $koneksi;

    // mempersiapkan variabel untuk menampung nya
    // strtolower: merubah string menjadi huruf kecil
    // mysqli_real_escape_string untuk lolos dari karakter khusus dalam string

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);


    // cek username sudah ada atu belum 
    $result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");

    // dsini akan merespon
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar ');
            </script>";

        return false;
    }

    // cek konfirmasi password
    if ($password != $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }

    // merubah password menjaid hash 
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database 
    mysqli_query($koneksi, "INSERT INTO user (username, password) VALUES('$username','$password')");

    // lalu mengembalikkan hasilnya
    return mysqli_affected_rows($koneksi);
} 


?>