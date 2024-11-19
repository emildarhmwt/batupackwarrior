<?php
// edit.php
include './koneksi.php';
session_start();

// Ambil data dari query string
$teams = isset($_GET['team']) ? $_GET['team'] : [];
$satuans = isset($_GET['satuan']) ? $_GET['satuan'] : [];
$total_tonases = isset($_GET['total_tonase']) ? $_GET['total_tonase'] : [];
$points = isset($_GET['point']) ? $_GET['point'] : [];
$total_points = isset($_GET['total_point']) ? $_GET['total_point'] : [];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BatuPACKWARrior</title>
    <link rel="shortcut icon" type="image/png" href="./assets/images/logos/batu.png" />
    <link rel="stylesheet" href="./assets/css/styles.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Acme&family=Coiny&family=Concert+One&family=Fredoka:wght@300..700&family=Outfit:wght@100..900&family=Pacifico&family=Playpen+Sans:wght@100..800&family=Playwrite+DE+Grund:wght@100..400&family=Righteous&family=Sacramento&family=Varela+Round&family=Yatra+One&display=swap"
        rel="stylesheet">
    <style>
    .wajib_isi {
        color: #8b0707;
        font-size: 15px;
    }

    .varela-round-regular {
        font-family: "Varela Round", serif;
        font-weight: 400;
        font-style: normal;
    }

    .judul {
        font-family: "Varela Round", serif;
        text-align: center;
        font-size: 30px;
        margin-bottom: 50px;
        margin-top: 10px;
        color: #0a2443;
    }

    .sub-judul {
        font-family: "Varela Round", serif;
        color: #0a2443;
        font-weight: bold;
        font-size: 15px;
    }

    .form-select.text-white option {
        color: black;
    }

    .form-select.text-white {
        color: white;
    }

    .body-wrapper {
        background-image: url("./assets/images/backgrounds/10.png");
        background-size: cover;
        background-repeat: no-repeat;
    }

    .logo {
        width: 20%;
        height: auto;
        margin-left: 20px;
        margin-top: 20px;
        margin-bottom: -70px;
    }

    .logo-ptba {
        width: 20%;
        height: auto;
        margin-right: 20px;
        margin-top: 20px;
        margin-bottom: -70px;
    }

    .batu {
        font-family: "Righteous", serif;
        color: #dee7e6ab;
        font-size: 40px;
        margin-bottom: -70px;
        margin-top: 10px;
    }

    .form-control::placeholder {
        font-family: "Varela Round", serif;
        color: #0a2443;
        font-size: 15px;
    }

    #searchInput::placeholder {
        font-family: "Varela Round", serif;
        color: #0a2443;
        font-size: 15px;
    }

    .btn-custom-eye {
        background-color: #1d2730 !important;
        color: white !important;
    }

    .btn-custom-eye:hover {
        background-color: #1d27309e !important;
        color: white !important;
    }

    .btn-custom-edit {
        background-color: #dfb58f !important;
        color: black !important;
    }

    .btn-custom-edit:hover {
        background-color: #dfb58f82 !important;
        color: black !important;
    }

    .card {
        background-color: rgb(255 255 255 / 65%) !important;
    }
    </style>
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="body-wrapper">
            <div class="logo-cover d-flex justify-content-between">
                <img src="./assets/images/logos/bumn.svg" class="logo">
                <div class="batu">
                    <a href="logout.php" class="batu" style="color: inherit; cursor: pointer;">
                        BatuPACKWARrior
                    </a>
                </div>
                <img src="./assets/images/logos/ptba.svg" class="logo-ptba">
            </div>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h5 class="judul fw-semibold">Form Edit Peserta</h5>
                        <form action="update.php" method="POST">
                            <?php for ($i = 0; $i < count($teams); $i++): ?>
                            <hr style="color: white; margin-bottom: 30px; margin-top: 30px;">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="satuan_<?php echo $i; ?>" class="sub-judul">Team</label>
                                        <input type="text" class="form-control" id="team_<?php echo $i; ?>"
                                            style="border: 1px solid #0a2443; color: black;" name="team[]"
                                            value="<?php echo htmlspecialchars($teams[$i]); ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="satuan_<?php echo $i; ?>" class="sub-judul">Satuan
                                            Kerja</label>
                                        <input type="text" class="form-control" id="satuan_<?php echo $i; ?>"
                                            style="border: 1px solid #0a2443; color: #0a2443;" name="satuan[]"
                                            value="<?php echo htmlspecialchars($satuans[$i]); ?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="total_tonase_<?php echo $i; ?>" class="sub-judul">Total
                                            Tonase</label>
                                        <input type="number" class="form-control" id="total_tonase_<?php echo $i; ?>"
                                            name="total_tonase[]" style="border: 1px solid #0a2443; color: #0a2443;"
                                            value="<?php echo htmlspecialchars($total_tonases[$i]); ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="point_<?php echo $i; ?>" class="sub-judul">Point</label>
                                        <input type="number" class="form-control" id="point_<?php echo $i; ?>"
                                            name="point[]" style="border: 1px solid #0a2443; color: #0a2443;"
                                            value="<?php echo htmlspecialchars($points[$i]); ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="total_point_<?php echo $i; ?>" class="sub-judul">Total
                                            Point</label>
                                        <input type="number" class="form-control" id="total_point_<?php echo $i; ?>"
                                            name="total_point[]" style="border: 1px solid #0a2443; color: #0a2443;"
                                            value="<?php echo htmlspecialchars($total_points[$i]); ?>" required>
                                    </div>
                                </div>
                            </div>

                            <?php endfor; ?>
                            <button type="submit" class="btn btn-custom-eye me-2">Simpan</button>
                            <a href="data_peserta.php" class="btn btn-custom-edit">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/sidebarmenu.js"></script>
    <script src="./assets/js/app.min.js"></script>
    <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>