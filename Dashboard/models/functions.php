<?php

require_once("../models/koneksi.php");

// untuk melakukan getalldata yang akan di perlihatkan
function getAllData()
{
    global $koneksi;
    $sql = "SELECT * FROM siswa;";
    $query = mysqli_query($koneksi, $sql);
    while($ambilData = mysqli_fetch_assoc($query))
    {
        $list[] = $ambilData;
    }
    return $list;
}

// untuk melakukan data yang detail
function getData($id)
{
    global $koneksi;
    $sql = "SELECT * FROM siswa WHERE nisn='$id';";
    $query = mysqli_query($koneksi, $sql);
    $ambilData = mysqli_fetch_assoc($query);
    return $ambilData;
}

// untuk melakukan penambahan pada sebuah data
function tambahData($data)
{
    $kode = $data["txt_kode"];
    $nama = $data["txt_nama"];
    $agama =  $data["select_agama"];
    $jenis = $data["rd_jenkel"]; 
    $alamat = $data["txt_alamat"];
    $gambar = $data["file_gambar"];
    global $koneksi;
    $sql = "INSERT INTO siswa(nisn, nama, agama, jenkel, gambar, alamat)
    VALUES ('$kode','$nama','$agama','$jenis','$gambar','$alamat');";
    $proses = mysqli_query($koneksi, $sql);
    return $proses;
}

// untuk melakukan hapus data
function hapusData($id)
{
    global $koneksi;
    $sql = "DELETE FROM siswa WHERE nisn='$id';";
    $query = mysqli_query($koneksi, $sql);
}

// untuk melakukan mesin pencari
function cariData($keyword)
{
    global $koneksi;
    $sql = "SELECT * FROM t_buku WHERE buku_judul LIKE '%$keyword%';";
    $query = mysqli_query($koneksi, $sql);
    while ($ambilData = mysqli_fetch_assoc($query)) {
        $list[] = $ambilData;
    }
    return $list;
}

// untuk melakukan edit pada sebuah data
function editData($data)
{
    $kode = $data["txt_kode"];
    $nama = $data["txt_nama"];
    $agama =  $data["select_agama"];
    $jenis = $data["rd_jenkel"];
    $gambar = $data["file_gambar"];
    $alamat = $data["txt_alamat"];
    global $koneksi;
    $sql = "UPDATE siswa SET nisn='$kode', nama='$nama', agama='$agama', jenkel='$jenis', gambar='$gambar', alamat='$alamat' WHERE nisn = '$kode';";

    $proses = mysqli_query($koneksi, $sql);
    return $proses;
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
    mysqli_query($koneksi, "INSERT INTO user (username, password) VALUES('$username','$password')");

    return mysqli_affected_rows($koneksi);
}
