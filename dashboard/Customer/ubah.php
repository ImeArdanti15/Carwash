<?php
include("../../conectdb/koneksi.php");
$id=$_POST['id'];
$customer=$_POST['customer'];
$sql = "UPDATE tblcustomer SET customer='$customer' WHERE id_customer=$id";

if ($conn->query($sql) === TRUE) {
  header("location: ../index.php?hal=customer");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>