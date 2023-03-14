<?php
    include("../../conectdb/koneksi.php");
    $daftarpaket=$_POST['daftarpaket'];
    $sql = "SELECT * FROM tbldaftarpaket where daftarpaket='" . $daftarpaket . "'";
    $result = $conn->query($sql);
    // var_dump( $result);
    // die();

    if ($result->num_rows > 0) {
        // output data of each row
        ?> 

    <script>
        window.location=' ../index.php?hal=daftarpaket-create'
        alert("Data Daftar Paket Baru Yang Anda Masukkan Sudah Ada")
    </script>

    <?php
    } else {
        $sql = "INSERT INTO tbldaftarpaket (iddaftarpaket, daftarpaket)
        VALUES ('', '$daftarpaket')";
        
        if ($conn->query($sql) === TRUE) {
            header("location: ../index.php?hal=daftarpaket");
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
    $conn->close();
    exit();
       

?>