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
    .body-wrapper {
        background-image: url("./assets/images/backgrounds/10.png");
        background-size: cover;
        background-repeat: no-repeat;
    }

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

    .card {
        background-color: rgb(255 255 255 / 65%) !important;
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

    @media (max-width: 767.98px) {
        .batu {
            font-size: 15px;
            margin-bottom: -70px;
            margin-top: 31px;
        }
    }
    </style>
</head>

<body>
    <!--  Body Wrapper -->
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
                        <h5 class="judul fw-semibold">Form Peserta</h5>
                        <form id="form-operation" method="POST" action="input_aksi.php">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="shift" class="sub-judul mb-2"> <span class="wajib_isi">*</span>
                                        TEAM :</label>
                                    <input type="text" class="form-control" id="team" name="team" placeholder="Team"
                                        required style="border: 1px solid #0a2443; color: #0a2443;">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="shift" class="sub-judul mb-2"> <span class="wajib_isi">*</span> SATUAN
                                        KERJA :</label>
                                    <input type="text" class="form-control" id="satuan" name="satuan"
                                        placeholder="Satuan Kerja" required
                                        style="border: 1px solid #0a2443; color: #0a2443;">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="grup" class="sub-judul mb-2">TOTAL TONASE : </label>
                                    <input type="number" class="form-control" id="total_tonase" name="total_tonase"
                                        style="border: 1px solid #0a2443; color: #0a2443;"
                                        placeholder="Total Tonase (gunakan titik untuk koma)" step="0.01">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="pic" class="sub-judul mb-2">POINT TONASE :</label>
                                    <input type="number" class="form-control" id="point" name="point"
                                        style="border: 1px solid #0a2443; color: #0a2443;"
                                        placeholder="Point (gunakan titik untuk koma)" step="0.01">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 mb-3">
                                    <label for="grup" class="sub-judul mb-2">COMPLAIN : </label>
                                    <input type="number" class="form-control" id="complain" name="complain"
                                        style="border: 1px solid #0a2443; color: #0a2443;"
                                        placeholder="Complain (gunakan titik untuk koma)" step="0.01">
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <label for="pic" class="sub-judul mb-2">POINT COMPLAIN :</label>
                                    <input type="number" class="form-control" id="point_complain" name="point_complain"
                                        style="border: 1px solid #0a2443; color: #0a2443;"
                                        placeholder="Point Complain (gunakan titik untuk koma)" step="0.01">
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <label for="pengawas" class="sub-judul mb-2"> TOTAL POINT :</label>
                                    <input type="number" class="form-control" id="total_point" name="total_point"
                                        style="border: 1px solid #0a2443; color: #0a2443;"
                                        placeholder="Total Point (gunakan titik untuk koma)" step="0.01">
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-custom-eye me-2">
                                    Submit
                                </button>
                                <button type="button" class="btn btn-custom-edit"
                                    onclick="window.location.href='data_peserta.php'">Kembali</button>
                            </div>
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