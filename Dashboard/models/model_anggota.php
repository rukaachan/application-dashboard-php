<?php

require_once("../models/koneksi.php");

// untuk melakukan getalldata yang akan di perlihatkan
function getAllData()
{
    global $koneksi;
    $sql = "SELECT * FROM anggota order by id_kelas ASC";
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
    $sql = "SELECT * FROM anggota WHERE id_anggota='$id';";
    $query = mysqli_query($koneksi, $sql);
    $ambilData = mysqli_fetch_assoc($query);
    return $ambilData;
}

// untuk melakukan penambahan pada sebuah data
function tambahData($data)
{
    $kode = $data["int_anggota"];
    $kelas = $data["int_kelas"];
    $nisn =  $data["char_nisn"];
    global $koneksi;
    $sql = "INSERT INTO anggota(id_anggota, id_kelas, nisn)
    VALUES ('$kode','$kelas','$nisn');";
    $proses = mysqli_query($koneksi, $sql);
    return $proses;
}

// untuk melakukan hapus data
function hapusData($id)
{
    global $koneksi;
    $sql = "DELETE FROM anggota WHERE id_anggota='$id';";
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
    $kode = $data["int_anggota"];
    $kelas = $data["int_kelas"];
    $nisn =  $data["char_nisn"];
    global $koneksi;
    $sql = "UPDATE anggota SET id_kelas='$kelas', nisn='$nisn' WHERE id_anggota = '$kode';";

    $proses = mysqli_query($koneksi, $sql);
    return $proses;
}
