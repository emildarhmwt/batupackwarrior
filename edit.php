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
    <title>Report Application</title>
    <link rel="shortcut icon" type="image/png" href="./assets/images/logos/logo3.png" />
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
        color: white;
    }

    .sub-judul {
        font-family: "Varela Round", serif;
        color: white;
    }

    .form-select.text-white option {
        color: black;
    }

    .form-select.text-white {
        color: white;
    }
    </style>
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="body-wrapper">
            <div id="navbar"></div>
            <div class="container-fluid">
                <div class="card mt-5">
                    <div class="card-body">
                        <h5 class="judul fw-semibold">Form Peserta</h5>
                        <form action="update.php" method="POST">
                            <?php for ($i = 0; $i < count($teams); $i++): ?>
                            <hr style="color: white; margin-bottom: 30px; margin-top: 30px;">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="satuan_<?php echo $i; ?>" class="form-label text-white">Team</label>
                                        <input type="text" class="form-control text-white" id="team_<?php echo $i; ?>"
                                            name="team[]" value="<?php echo htmlspecialchars($teams[$i]); ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="satuan_<?php echo $i; ?>" class="form-label text-white">Satuan
                                            Kerja</label>
                                        <input type="text" class="form-control text-white" id="satuan_<?php echo $i; ?>"
                                            name="satuan[]" value="<?php echo htmlspecialchars($satuans[$i]); ?>"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="total_tonase_<?php echo $i; ?>" class="form-label text-white">Total
                                            Tonase</label>
                                        <input type="number" class="form-control text-white"
                                            id="total_tonase_<?php echo $i; ?>" name="total_tonase[]"
                                            value="<?php echo htmlspecialchars($total_tonases[$i]); ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="point_<?php echo $i; ?>" class="form-label text-white">Point</label>
                                        <input type="number" class="form-control text-white"
                                            id="point_<?php echo $i; ?>" name="point[]"
                                            value="<?php echo htmlspecialchars($points[$i]); ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="total_point_<?php echo $i; ?>" class="form-label text-white ">Total
                                            Point</label>
                                        <input type="number" class="form-control text-white"
                                            id="total_point_<?php echo $i; ?>" name="total_point[]"
                                            value="<?php echo htmlspecialchars($total_points[$i]); ?>" required>
                                    </div>
                                </div>
                            </div>

                            <?php endfor; ?>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="data_peserta.php" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    fetch('Navbar.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('navbar').innerHTML = data;
        });
    </script>
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/sidebarmenu.js"></script>
    <script src="./assets/js/app.min.js"></script>
    <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>