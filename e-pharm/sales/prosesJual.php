<?php
include "konekdb.php";
session_start();
$idmasuk1=$_GET['idmasuk'];
$iduser=$_SESSION['idpegawai'];

$sql = mysqli_query($mysqli, "select sum(total) as jumlah from penjualan where id_pemasukan='$idmasuk1' group by id_pemasukan");
$tm=mysqli_fetch_array($sql);
$jml=$tm['jumlah'];
$hari=date('Y-m-d', mktime(0,0,0, date('m'), date('d'), date('Y')));
$sql1=mysqli_query($mysqli, "insert into pemasukan values ('DB-','','$iduser','Penjualan Obat','$hari','Lunas','$jml')");
if($sql1){
header("location:jualbarang.php?idpesan=0&&pesan=Transaksi berhasil disimpan");
}



?>