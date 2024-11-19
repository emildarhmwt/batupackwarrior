<?php
include './koneksi.php';
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password']; // This will be empty if the user doesn't want to change it

    // Assuming you have an 'id' field to identify which admin to update
    $id = $_POST['id']; // Use the ID from the form submission

    // Fetch the current password from the database
    $currentQuery = "SELECT password FROM admin WHERE id='$id'";
    $currentResult = mysqli_query($koneksi, $currentQuery);
    $currentAdmin = mysqli_fetch_assoc($currentResult);
    $currentPassword = $currentAdmin['password'];

    // Prepare the update query
    if (empty($password)) {
        // If password is empty, use the current password
        $query = "UPDATE admin SET nama='$nama', username='$username', password='$currentPassword' WHERE id='$id'";
    } else {
        // If a new password is provided, hash it before updating
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "UPDATE admin SET nama='$nama', username='$username', password='$hashedPassword' WHERE id='$id'";
    }

    // Execute the update query
    if (mysqli_query($koneksi, $query)) {
        // Redirect to admin page after successful update
        header("Location: admin.php?message=Admin updated successfully");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($koneksi);
    }
}
?>