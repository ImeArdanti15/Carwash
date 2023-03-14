<?php
    include("../../conectdb/koneksi.php");
    $daftarpaket=$_GET['daftarpaket'];

    // var_dump($daftarpaket);die();

    $sql = "DELETE FROM tbldaftarpaket WHERE daftarpaket='" . $daftarpaket . "'";
    if($conn->query($sql) === TRUE) {
?>
        <script>
            window.location.replace('../index.php?hal=daftarpaket')
            alert('daftarpaket = <?= $_GET["daftarpaket"] ?> Telah Berhasil Dihapus !')
        </script>

        <?php
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        $conn->close();
        ?>
