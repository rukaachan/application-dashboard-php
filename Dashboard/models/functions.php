<?php

require_once('koneksi.php');

function getAllData() {
    global $koneksi;
    $sql = "SELECT * FROM t_barang";
    $query = mysqli_query($koneksi,$sql);
    while ($row = mysqli_fetch_assoc($query)) :
        $list[] = $row;
    endwhile;
    return $list;
}

function getData($id) {
    global $koneksi;
    $sql = "SELECT * FROM t_barang WHERE barang_kode = $id";
    $query = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($query);
    
    return $row;
}


// function hapus($id)
// {
//     global $koneksi;
//     mysqli_query($koneksi, "DELETE FROM t_barang WHERE barang_kode = $id");
//     return mysqli_affected_rows($koneksi);
// }

// $filter = $_GET['id'];

// if (hapus($filter) > 0) {
//     echo "<script>alert('data berhasil dihapus')</script>";
//     echo "<script>window.location='../views/dasboard_listdata_rplb_35.php'</script>";
// } else {
//     echo "<script>alert('data berhasil digagal')</script>";
//     echo "<script>window.history.back()</script>";
// }

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
