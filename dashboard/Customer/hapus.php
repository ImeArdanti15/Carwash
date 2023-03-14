<?php
    include("../../conectdb/koneksi.php");
    $customer=$_GET['customer'];

    // var_dump($customer);die();

    $sql = "DELETE FROM tblcustomer WHERE customer='" . $customer . "'";
    if($conn->query($sql) === TRUE) {
?>
        <script>
            window.location.replace('../index.php?hal=customer')
            alert('customer = <?= $_GET["customer"] ?> Telah Berhasil Dihapus !')
        </script>

        <?php
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        $conn->close();
        ?>
