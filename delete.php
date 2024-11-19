<?php
include './koneksi.php';

$data = json_decode(file_get_contents('php://input'), true);
$ids = $data['ids'];

if (!empty($ids)) {
    $idList = implode(',', array_map('intval', $ids));
    $query = "DELETE FROM batu WHERE id IN ($idList)";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}
?>