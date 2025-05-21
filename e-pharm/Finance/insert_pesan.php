<?php

$to = $_POST['nama'];
$from = $_POST['username'];
$pesan = $_POST['message'];

include '../config.php';

$nama1 = mysqli_fetch_array(mysqli_query("SELECT id_pegawai from pegawai WHERE nama='$to'"));
$nama2 = mysqli_fetch_array(mysqli_query("SELECT id_pegawai from authorization WHERE username='$from'"));
//echo $nama1[0].$nama2[0].$pesan;


if (isset($_POST['send'])) {
     $sql = "INSERT INTO pesan VALUES ('',$nama2[0],$nama1[0],'$pesan',NOW(),0,0)";
 }
else{
     $sql = "INSERT INTO pesan VALUES ('',$nama2[0],$nama1[0],'$pesan',NOW(),1,0)";
 }

$hasil = mysqli_query($sql);


if($hasil){
	print "<script>location = 'mailbox.php'; </script>";
}else{
	echo "Data gagal diubah.";
}



?>