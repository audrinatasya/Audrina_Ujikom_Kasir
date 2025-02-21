<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_produk = $_POST['id_produk'];
    $jumlah_stock = $_POST['jumlah_stock'];

    $sql = "UPDATE produk SET stok = stok + ? WHERE Id_produk = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $jumlah_stock, $id_produk);

    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Stock berhasil ditambahkan!";
    } else {
        $_SESSION['error_message'] = "Gagal menambahkan stock.";
    }

    $stmt->close();
    $conn->close();

    header("Location: master_barang.php");
    exit();
}
?>