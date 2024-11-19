<?php
include './koneksi.php';
session_start();

// Ambil data dari form
$teams = isset($_POST['team']) ? $_POST['team'] : [];
$satuans = isset($_POST['satuan']) ? $_POST['satuan'] : [];
$total_tonases = isset($_POST['total_tonase']) ? $_POST['total_tonase'] : [];
$points = isset($_POST['point']) ? $_POST['point'] : [];
$total_points = isset($_POST['total_point']) ? $_POST['total_point'] : [];

// Loop melalui data dan update setiap baris
for ($i = 0; $i < count($teams); $i++) {
    $team = mysqli_real_escape_string($koneksi, $teams[$i]);
    $satuan = mysqli_real_escape_string($koneksi, $satuans[$i]);
    $total_tonase = (int)$total_tonases[$i];
    $point = (int)$points[$i];
    $total_point = (int)$total_points[$i];

    // Update query
    $query = "UPDATE batu SET satuan='$satuan', total_tonase=$total_tonase, point=$point, total_point=$total_point WHERE team='$team'";
    mysqli_query($koneksi, $query);
}

// Redirect kembali ke halaman data_peserta.php
header("Location: data_peserta.php");
exit();
?>