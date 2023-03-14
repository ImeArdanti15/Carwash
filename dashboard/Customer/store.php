<?php
    include("../../conectdb/koneksi.php");
    $customer=$_POST['customer'];
    $sql = "SELECT * FROM tblcustomer where customer='" . $customer . "'";
    $result = $conn->query($sql);
    // var_dump( $result);
    // die();

    if ($result->num_rows > 0) {
        // output data of each row
        ?> 

    <script>
        window.location=' ../index.php?hal=customer-create'
        alert("Data Customer Baru Yang Anda Masukkan Sudah Ada")
    </script>

    <?php
    } else {
        $sql = "INSERT INTO tblcustomer (idcustomer, customer)
        VALUES ('', '$customer')";
        
        if ($conn->query($sql) === TRUE) {
            header("location: ../index.php?hal=customer");
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
    $conn->close();
    exit();
       

?>