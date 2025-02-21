<?php
include 'config.php';

$search = isset($_GET['search']) ? $_GET['search'] : '';

$searchTerm = '%' . $search . '%';
$searchTerm = mysqli_real_escape_string($conn, $search);

$query = "SELECT * FROM pelanggan WHERE nama_pelanggan LIKE '%$searchTerm%'";
$result = mysqli_query($conn, $query);

$pelanggan = [];
while ($row = mysqli_fetch_assoc($result)) {
    $pelanggan[] = $row;
}

echo json_encode($pelanggan);
?>
