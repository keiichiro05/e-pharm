<?php

$to = $_POST['nama'];
$from = $_POST['username'];
$pesan = $_POST['message'];

include '../config.php'; // Ensure $conn is defined as the mysqli connection

$nama1_result = mysqli_query($conn, "SELECT id_pegawai FROM pegawai WHERE nama='$to'");
$nama1 = mysqli_fetch_array($nama1_result);

$nama2_result = mysqli_query($conn, "SELECT id_pegawai FROM authorization WHERE username='$from'");
$nama2 = mysqli_fetch_array($nama2_result);
//echo $nama1[0].$nama2[0].$pesan;


if (isset($_POST['send'])) {
     $sql = "INSERT INTO pesan VALUES ('',$nama2[0],$nama1[0],'$pesan',NOW(),0,0)";
 }
else{
$hasil = mysqli_query($conn, $sql);
 }

$hasil = mysqli_query($conn, $sql);


if($hasil){
	print "<script>location = 'mailbox.php'; </script>";
}else{
	echo "Data gagal diubah.";
}



?>