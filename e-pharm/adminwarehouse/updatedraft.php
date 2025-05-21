<?php
session_start();
$idpegawai=$_SESSION['idpegawai'];
if(!isset($_SESSION['username'])){
	header("location:../index.php?status=please login first");
	exit();
	}
?>
<?php
include('../konekdb.php');
session_start();

// Check authorization
$username = $_SESSION['username'];
$cekuser = mysqli_query($mysqli, "SELECT count(username) as jmluser FROM authorization WHERE username = '$username' AND modul = 'Adminwarehouse'");
$user = mysqli_fetch_array($cekuser);
if($user['jmluser'] == "0") {
    header("location:../index.php");
    exit();
}

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