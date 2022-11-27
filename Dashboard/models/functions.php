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
    $judul = $data["txt_judul"];
    $penerbit =  $data["select_penerbit"];
    $stok =  $data["num_stok"];
    $jenis = $data["radio_jenis"]; 
    $genre = $data["cek_genre_ilmu"].",".$data["cek_genre_roman"].",".$data["cek_genre_komedi"].",".$data["cek_genre_horor"].",".$data["cek_genre_action"];
    $sinopsis = $data["txt_sinopsis"];
    global $koneksi;
    $sql = "INSERT INTO t_buku(buku_kode, buku_judul, buku_penerbit, buku_jenis, buku_genre, buku_stok, buku_sinopsis) VALUES ('$kode', '$judul', '$penerbit', '$jenis', '$genre', '$stok', '$sinopsis');";
    $proses = mysqli_query($koneksi, $sql);
    return $proses;
}

// untuk melakukan hapus data
function hapusData($id)
{
    global $koneksi;
    $sql = "DELETE FROM t_buku WHERE buku_kode='$id';";
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
    $judul = $data["txt_judul"];
    $penerbit =  $data["select_penerbit"];
    $stok =  $data["num_stok"];
    $jenis = $data["radio_jenis"]; 
    $genre = $data["cek_genre_ilmu"].",".$data["cek_genre_roman"].",".$data["cek_genre_komedi"].",".$data["cek_genre_horor"].",".$data["cek_genre_action"];
    $sinopsis = $data["txt_sinopsis"];
    global $koneksi;
    $sql = "UPDATE t_buku SET buku_judul='$judul',buku_penerbit='$penerbit',buku_stok='$stok',buku_jenis='$jenis',buku_genre='$genre',buku_sinopsis = '$sinopsis' WHERE buku_kode = '$kode';";
    $proses = mysqli_query($koneksi,$sql);
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
    mysqli_query($koneksi, "INSERT INTO user VALUES('','$username','$password')");

    return mysqli_affected_rows($koneksi);
}