<?php 
include './koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

// Menggunakan prepared statement untuk keamanan
$stmt = $koneksi->prepare("SELECT * FROM admin WHERE username=? AND password=?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();
$cek = $result->num_rows;

if($cek > 0){
    session_start();
    $data = $result->fetch_assoc();
    $_SESSION['id'] = $data['id'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['username'] = $data['username'];

    header("location:./data_peserta.php");
}else{
    header("location:login.php?alert=gagal");
}
$stmt->close();
$koneksi->close();