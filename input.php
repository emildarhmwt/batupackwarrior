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
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="body-wrapper">
            <div id="navbar"></div>
            <div class="container-fluid">
                <div class="card mt-5">
                    <div class="card-body">
                        <h5 class="judul fw-semibold">Form Peserta</h5>
                        <form id="form-operation" method="POST" action="input_aksi.php">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="shift" class="sub-judul mb-2"> <span class="wajib_isi">*</span> TEAM
                                        :</label>
                                    <input type="text" class="form-control text-white" id="team" name="team"
                                        placeholder="Input Team" required>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="shift" class="sub-judul mb-2"> <span class="wajib_isi">*</span> SATUAN
                                        KERJA
                                        :</label>
                                    <input type="text" class="form-control text-white" id="satuan" name="satuan"
                                        placeholder="Input Satuan Kerja" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 mb-3">
                                    <label for="grup" class="sub-judul mb-2">TOTAL TONASE: </label>
                                    <input type="number" class="form-control text-white" id="total_tonase"
                                        name="total_tonase">
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <label for="pic" class="sub-judul mb-2">POINT :</label>
                                    <input type="number" class="form-control text-white" id="point" name="point">
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <label for="pengawas" class="sub-judul mb-2"> TOTAL POINT :</label>
                                    <input type="number" class="form-control text-white" id="total_point"
                                        name="total_point">
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <button type="button" class="btn btn-primary"
                                    onclick="window.location.href='data_peserta.php'">Kembali</button>
                            </div>
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