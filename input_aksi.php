<?php 
include './koneksi.php';
$team  = $_POST['team'];
$satuan = $_POST['satuan'];
$total_tonase = $_POST['total_tonase'];
$point = $_POST['point'];
$total_point = $_POST['total_point'];

mysqli_query($koneksi, "INSERT INTO batu (team, satuan, total_tonase, point, total_point) VALUES ('$team', '$satuan', '$total_tonase', '$point', '$total_point')");
header("location:data_peserta.php");