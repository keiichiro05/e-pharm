<?php

$id = $_GET['id'];
$status = $_GET['status'];

include '../config.php';

// Sanitize input
$id = mysqli_real_escape_string($conn, $id);
$status = mysqli_real_escape_string($conn, $status);

// Use prepared statements
$sql = "UPDATE transaksi SET status=? WHERE id_transaksi=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $status, $id);

if ($stmt->execute()) {
	print "<script>alert('Data berhasil diubah.'); location = 'pemesanan.php'; </script>";
} else {
	echo "Data gagal diubah.";
}

$stmt->close();
$conn->close();

?>