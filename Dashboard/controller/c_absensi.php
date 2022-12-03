<?php
// define = definisi
define("BASE", "http://localhost/bew_xirplb_1920_35_Taufik_NurFauzi/controller/c_absensi.php?aksi=");

$aksi = $_GET["aksi"];
require_once("../models/model_absensi.php");
require_once("../app/helper/form_helpers.php");

// perintah jika memilih aksi list
if ($aksi == "list") {
    $data = getAllData();
    require_once("../views/transaksi_absensi/list_data.php");
}

// perintah jika memilih aksi detail
elseif ($aksi == "detail") {
    $id = $_GET["id"];
    $data = getData($id);
    require_once("../views/transaksi_absensi/detail_data.php");
}

// perintah jika memilih aksi tambah
elseif ($aksi == "form") {
    require_once("../views/transaksi_absensi/tambah_data.php");
}

// aksi prosestambah
elseif ($aksi == "prosestambah") {
    $proses = tambahData($_POST);
    if ($proses) {
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        echo "<script>window.location='c_siswa.php?aksi=list'</script>";
    } else {
        echo "<script>alert('Data tidak berhasil ditambahkan')</script>";
        echo "<script>window.history.back()</script>";
    }
}

// perintah jika memilih aksi hapus
elseif ($aksi == "hapus") {
    $id = $_GET["id"];
    hapusData($id);
    echo "<script>alert('Data berhasil dihapus')</script>";
    echo "<script>window.location='c_siswa.php?aksi=list'</script>";
}

// perintah jika memilih aksi edit
elseif ($aksi == "edit") {
    $id = $_GET["id"];
    $data = getData($id);
    require_once("../views/transaksi_absensi/edit_data.php");
    require_once("../app/helper/form_helper.php");
}

// aksi prosesedit
elseif ($aksi == "prosesedit") {
    $proses = editData($_POST);
    if ($proses) {
        echo "<script>alert('Data berhasil diedit')</script>";
        echo "<script>window.location='c_siswa.php?aksi=list'</script>";
    } else {
        echo "<script>alert('Data tidak berhasil diedit')</script>";
        echo "<script>window.history.back()</script>";
    }
}

// perintah jika memilih aksi cari
elseif ($aksi == "cari") {
    $keyword = $_GET["keyword"];
    $data = cariData($keyword);
    require_once("../views/dashboard_listdata_rplb_35.php");
}

// perintah jika memilih aksi login
elseif ($aksi == "login") {
    require_once("../models/user/login.php");
}

// perintah jika memilih logout
elseif ($aksi == "logout") {
    require_once("../models/user/logout.php");
}

// perintah jika memilih register
elseif ($aksi == "register") {
    require_once("../models/user/register.php");
}
