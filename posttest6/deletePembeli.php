<?php

include_once 'Controller/pelanggan.php';

$id = $_GET['id'];
$pembeli = new pembeli;

$deletePembeli = $pembeli->deletePembeli($id);
if ($deletePembeli){
    echo "<script>alert('Data pembeli dihapus!');window.location = 'index1.php';</script>";

}



?>