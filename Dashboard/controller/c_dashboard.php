<?php 
require_once("../models/functions.php");
$aksi = $_GET["aksi"];

//SELECT
if ($aksi == "list") {
    $data = getAllData();
    require_once("../views/dasboard_listdata_rplb_35.php");

}elseif ($aksi == "detail"){
    $id = $_GET["id"];
    $row = getData($id);
    require_once("../views/dasboard_detaildata_rplb_35.php");

// INSERT
}elseif ($aksi == "") {
    # code...

// UPDATE
}elseif ($aski == "") {
    # code...
}

// DELETE

// UPLOAD FILE










?>
