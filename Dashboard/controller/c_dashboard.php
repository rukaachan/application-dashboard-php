<?php
// define = definisi
define("BASE", "http://localhost/bew_xirplb_1920_35_Taufik_NurFauzi/controllers/c_dashboard.php?aksi=");

$aksi = $_GET["aksi"];
require_once("../models/functions.php");
require_once("../app/helpers/form_helper.php");

// perintah jika memilih aksi list
if ($aksi == "list") {
    $data = getAllData();
    require_once("../views/dasboard_listdata_rplb_35.php");
}

// perintah jika memilih aksi detail
elseif ($aksi == "detail") {
    $id = $_GET["id"];
    $data = getData($id);
    require_once("../views/dasboard_detaildata_rplb_35.php");
}

// perintah jika memilih aksi tambah
elseif ($aksi == "tambah") {
    require_once("../views/dashboard_form_rplb_35.php");
}

// aksi prosestambah
elseif ($aksi == "prosestambah") {
    $proses = tambahData($_POST);
    if ($proses) {
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        echo "<script>window.location='c_buku.php?aksi=list'</script>";
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
    echo "<script>window.location='c_dashboard.php?aksi=list'</script>";
}

// perintah jika memilih aksi edit
elseif ($aksi == "edit") {
    $id = $_GET["id"];
    $data = getData($id);
    require_once("../views/buku/dashboard_formedit_rplb_35.php");
}

// aksi prosesedit
elseif ($aksi == "prosesedit") {
    $proses = editData($_POST);
    if ($proses) {
        echo "<script>alert('Data berhasil diedit')</script>";
        echo "<script>window.location='c_dashboard.php?aksi=list'</script>";
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
