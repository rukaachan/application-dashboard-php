<?php
require_once("../core/koneksi.php");

// SELECT DATABASE
$filter = $_GET["id"];
$sql = "SELECT * FROM t_barang WHERE barang_kode = '$filter'";
$query = mysqli_query($koneksi, $sql);

//! ambil data
$row = mysqli_fetch_assoc($query);

?>

