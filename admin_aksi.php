<?php 
include './koneksi.php';
$nama  = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);

mysqli_query($koneksi, "INSERT INTO admin (nama, username, password) VALUES ('$nama', '$username', '$password')");
header("location:admin.php");