<?php
include './koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM admin WHERE id = $id";
    mysqli_query($koneksi, $query);
    header("Location: admin.php"); // Redirect back to the admin page
    exit();
}
?>