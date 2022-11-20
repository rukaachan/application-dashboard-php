<?php

require_once('koneksi.php');

function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM t_barang WHERE barang_kode = $id");
    return mysqli_affected_rows($koneksi);
}

function registrasi($data)
{
    global $koneksi;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);


    // cek username sudah ada atu belum 
    $result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");

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
    mysqli_query($koneksi, "INSERT INTO user VALUES('','$username','$password')");

    return mysqli_affected_rows($koneksi);

}


?>