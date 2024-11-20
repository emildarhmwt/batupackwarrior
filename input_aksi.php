<?php 
include './koneksi.php';
$team  = $_POST['team'];
$satuan = $_POST['satuan'];
$total_tonase = $_POST['total_tonase'];
$point = $_POST['point'];
$complain = $_POST['complain'];
$point_complain = $_POST['point_complain'];
$total_point = $_POST['total_point'];

mysqli_query($koneksi, "INSERT INTO batu (team, satuan, total_tonase, point, complain, point_complain, total_point) VALUES ('$team', '$satuan', '$total_tonase', '$point', '$complain', '$point_complain', '$total_point')");
header("location:data_peserta.php");