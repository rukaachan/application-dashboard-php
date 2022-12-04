<?php

require_once("../models/koneksi.php");

// untuk melakukan getalldata yang akan di perlihatkan
function getAllData()
{
    global $koneksi;
    $sql = "SELECT * FROM kelas order by id_kelas ASC";
    $query = mysqli_query($koneksi, $sql);
    while ($ambilData = mysqli_fetch_assoc($query)) {
        $list[] = $ambilData;
    }
    return $list;
}

// untuk melakukan data yang detail
function getData($id)
{
    global $koneksi;
    $sql = "SELECT * FROM kelas WHERE id_kelas='$id';";
    $query = mysqli_query($koneksi, $sql);
    $ambilData = mysqli_fetch_assoc($query);
    return $ambilData;
}

// untuk melakukan penambahan pada sebuah data
function tambahData($data)
{
    $kode = $data["int_kode"];
    $nama = $data["txt_nama"];
    $kelas =  $data["int_kelas"];
    global $koneksi;
    $sql = "INSERT INTO kelas(id_kelas, nama_kelas, id_tahun_ajaran)
    VALUES ('$kode','$nama','$kelas');";
    $proses = mysqli_query($koneksi, $sql);
    return $proses;
}

// untuk melakukan hapus data
function hapusData($id)
{
    global $koneksi;
    $sql = "DELETE FROM kelas WHERE id_kelas='$id';";
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
    $kode = $data["int_kode"];
    $nama = $data["txt_nama"];
    $kelas = $data["int_kelas"];
    global $koneksi;
    $sql = "UPDATE kelas SET nama_kelas='$nama', id_tahun_ajaran='$kelas' WHERE id_kelas = '$kode';";
    $proses = mysqli_query($koneksi, $sql);
    return $proses;
}
