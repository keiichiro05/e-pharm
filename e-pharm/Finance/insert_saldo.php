<?php

$saldo = $_POST['saldo'];

include '../config.php';

$bulan = mysqli_fetch_array(mysqli_query($conn, "SELECT DATE_FORMAT(NOW(),'%m') from DUAL"));
$b = str_pad($bulan[0] + 1, 2, "0", STR_PAD_LEFT);
$sql = "UPDATE saldo SET Jumlah = $saldo WHERE DATE_FORMAT(Tanggal,'%m') = '$b'";

//echo $nama1[0].$nama2[0].$pesan;
/*
INSERT INTO saldo (id_saldo, Tanggal, Jumlah) VALUES (NULL, '2014-07-01', '5000000');

if (isset($_POST['send'])) {
     $sql = "INSERT INTO pesan VALUES ('',$nama2[0],$nama1[0],'$pesan',NOW(),0,0)";
 }
else{
     $sql = "INSERT INTO pesan VALUES ('',$nama2[0],$nama1[0],'$pesan',NOW(),1,0)";
 }
*/
$hasil = mysqli_query($conn, $sql);


if($hasil){
	print "<script>location = 'general.php'; </script>";
}else{
	echo "Data gagal diubah.";
}



?>