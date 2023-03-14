<?php
include("../../conectdb/koneksi.php");
$id=$_POST['id'];
$daftarpaket=$_POST['daftarpaket'];
$sql = "UPDATE tbldaftarpaket SET daftarpaket='$daftarpaket' WHERE id_daftarpaket=$id";

if ($conn->query($sql) === TRUE) {
  header("location: ../index.php?hal=daftarpaket");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>