<?php
include './koneksi.php';
session_start();

// Ambil data dari form
$teams = isset($_POST['team']) ? $_POST['team'] : [];
$satuans = isset($_POST['satuan']) ? $_POST['satuan'] : [];
$total_tonases = isset($_POST['total_tonase']) ? $_POST['total_tonase'] : [];
$points = isset($_POST['point']) ? $_POST['point'] : [];
$complains = isset($_POST['complain']) ? $_POST['complain'] : [];
$point_complains = isset($_POST['point_complain']) ? $_POST['point_complain'] : [];
$total_points = isset($_POST['total_point']) ? $_POST['total_point'] : [];

// Loop melalui data dan update setiap baris
for ($i = 0; $i < count($teams); $i++) {
    $team = mysqli_real_escape_string($koneksi, $teams[$i]);
    $satuan = mysqli_real_escape_string($koneksi, $satuans[$i]);
    $total_tonase = (double)$total_tonases[$i];
    $point = (double)$points[$i];
    $complain = (double)$complains[$i];
    $point_complain = (double)$point_complains[$i];
    $total_point = (double)$total_points[$i];

    // Update query
    $query = "UPDATE batu SET satuan='$satuan', total_tonase=$total_tonase, point=$point, complain=$complain, point_complain=$point_complain, total_point=$total_point WHERE team='$team'";
    mysqli_query($koneksi, $query);
}

// Redirect kembali ke halaman data_peserta.php
header("Location: data_peserta.php");
exit();
?>