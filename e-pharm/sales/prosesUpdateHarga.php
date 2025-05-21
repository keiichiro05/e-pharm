<?php
include "konekdb.php";
session_start();
$idBarang = $_POST['idbarang'];
$hrgjual = $_POST['hargajual'];
$sql = mysqli_query("update warehouse set Harga='$hrgjual' where id_barang='$idBarang'");
if($sql){
header("location:updateBarang.php");
}else{
header("location:updateBarang1.php?idBrg=$idBarang");
}



?>