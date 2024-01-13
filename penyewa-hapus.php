<?php
include_once("../functions.php");



$nik = $_GET['nik'];

$query = "DELETE FROM penyewa WHERE nik='$nik'";

$execute = bisa($con, $query);

if($execute == 1){
    header('location: penyewa.php');
}
else
echo "Gagal menghapus data";
?>