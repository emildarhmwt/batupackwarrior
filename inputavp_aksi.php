<?php 
include './koneksi.php';
$team  = $_POST['team'];
$satuan = $_POST['satuan'];
$total_tonase = $_POST['total_tonase'];
$point_complain = $_POST['point_complain'];
$total_point = $_POST['total_point'];

mysqli_query($koneksi, "INSERT INTO batu_avp (team, satuan, total_tonase, point_complain, total_point) VALUES ('$team', '$satuan', '$total_tonase', '$point_complain', '$total_point')");
header("location:data_peserta_avp.php");