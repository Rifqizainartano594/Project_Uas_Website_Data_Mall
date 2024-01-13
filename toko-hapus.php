<?php
include_once("../functions.php");

$nik = $_GET['nik'];

$query = "DELETE FROM data_lapk WHERE nik='$nik'";

$execute = bisa($con, $query);

if($execute == 1){
    header('location: toko.php');
}
else
echo "Gagal menghapus data";
?>