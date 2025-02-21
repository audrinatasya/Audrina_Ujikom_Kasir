<?php
include 'config.php';

$search = isset($_GET['search']) ? $_GET['search'] : '';

$query = "SELECT * FROM pelanggan WHERE nama_pelanggan LIKE ?";
$stmt = $conn->prepare($query);
$searchTerm = '%' . $search . '%';
$stmt->bind_param('s', $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

$pelanggan = [];
while ($row = $result->fetch_assoc()) {
    $pelanggan[] = $row;
}

echo json_encode($pelanggan);
?>