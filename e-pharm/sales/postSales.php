<?php
include "konekdb.php";

$idmasuk=$_GET['idpemasukan'];
$nmobat=$_GET['namaobat'];
$jmlobat=$_GET['jumlahobat'];

$sql = "SELECT * FROM warehouse where nama='$nmobat'";
$obat = mysqli_query($mysqli, $sql);
$hasil = mysqli_fetch_array($obat);
$idbrg=$hasil['id_barang'];
$hrg = $hasil['Harga'];
$hrg1=$hrg * $jmlobat;
$stok=$hasil['Stok'];
if($stok>=$jmlobat){
$sisa=$stok-$jmlobat;
 mysqli_query($mysqli, "INSERT INTO penjualan VALUES ('','$idmasuk','$idbrg','$jmlobat', '$hrg1')");
 mysqli_query($mysqli, "UPDATE warehouse set Stok=$sisa where id_barang=$idbrg");
 header("location:jualbarang.php?idpesan=0&&pesan=Transaksi sukses");
}else{
header("location:jualbarang.php?idpesan=1&&pesan=Maaf, Jumlah barang tidak mencukupi");
}





?>