<?php 
include "konekdb.php";
$idjual=$_GET['idjual'];
$jmlbarang=$_GET['jml'];
$idbrg=$_GET['idbarang'];
$st=mysqli_query("SELECT * FROM warehouse where id_barang=$idbrg"); 

$hslstok=mysqli_fetch_array($st);
$hsl1=$hslstok['Stok'];
$sisa=$hsl1+$jmlbarang;

mysqli_query("DELETE FROM penjualan where id_penjualan=$idjual"); 
mysqli_query("UPDATE warehouse set Stok=$sisa where id_barang=$idbrg");
header("location:jualbarang.php");
?>