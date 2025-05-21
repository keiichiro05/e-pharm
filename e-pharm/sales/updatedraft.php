<?php

$id = $_POST['id'];
$from = $_POST['username'];
$pesan = $_POST['message'];

include '../config.php';

$sql = "UPDATE pesan set isi='$pesan', draft=0 WHERE id_pesan=$id";

$hasil = mysqli_query($sql);


if($hasil){
	print "<script>location = 'mailbox.php'; </script>";
}else{
	echo "Data gagal diubah.";
}



?>