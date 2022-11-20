<?php 

require_once('../models/functions.php');

$filter = $_GET['id'];

if(hapus($filter) > 0){
    echo "<script>alert('data berhasil dihapus')</script>";
    echo "<script>window.location='../views/dasboard_listdata_rplb_35.php'</script>";
} else {
    echo "<script>alert('data berhasil digagal')</script>";
    echo "<script>window.history.back()</script>";
}
