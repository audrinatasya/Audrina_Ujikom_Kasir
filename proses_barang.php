<?php
include 'config.php';

if (isset($_GET['id'])) {
    $audri_Id_produk = $_GET['id'];

    if (!isset($_POST['hapus'])) {
        echo "<script>
                if (confirm('Apakah Anda yakin ingin menghapus barang ini?')) {
                    window.location.href = 'hapus_barang.php?id=$audri_Id_produk&hapus=true';
                } else {
                    window.location.href = 'master_barang.php';
                }
              </script>";
    }

}
?>
