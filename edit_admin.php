<?php
include './koneksi.php';
session_start();

// Get the admin ID from the URL
$id = $_GET['id'];

// Fetch the admin data from the database
$query = "SELECT * FROM admin WHERE id='$id'";
$result = mysqli_query($koneksi, $query);
$admin = mysqli_fetch_assoc($result);
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
    .body-wrapper {
        background-image: url("./assets/images/backgrounds/10.png");
        background-size: cover;
        background-repeat: no-repeat;
    }

    .notif {
        font-size: 12px;
        margin-top: -15px;
        color: #6a0707;
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

    .form-control::placeholder {
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
    </style>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <!-- <div id="sidebar"></div> -->
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <!--  Header End -->
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
                        <h5 class="judul fw-semibold">Form Admin</h5>
                        <form action="edit_admin_aksi.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $admin['id']; ?>">
                            <div class="mb-3">
                                <label for="tanggal" class="sub-judul mb-2">Nama :</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Input Data"
                                    style="border: 1px solid #0a2443; color: #0a2443;"
                                    value="<?php echo $admin['nama']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="shift" class="sub-judul mb-2">Username : </label>
                                <input type="text" class="form-control" name="username" id="username"
                                    placeholder="Input Data" style="border: 1px solid #0a2443; color: #0a2443;"
                                    value="<?php echo $admin['username']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="grup" class="sub-judul mb-2">Password :</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Input Data" style="border: 1px solid #0a2443; color: #0a2443;">
                            </div>
                            <h5 class="notif"> Jika tidak ingin mengubah password, kosongkan saja!</h5>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                    onclick="togglePasswordVisibility()" style="border: 1px solid black;">
                                <label class=" form-check-label sub-judul" for="flexCheckDefault">
                                    Show Password
                                </label>

                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-custom-eye me-2">
                                    Submit
                                </button>
                                <button type="button" class="btn btn-custom-edit"
                                    onclick="window.location.href='admin.php'">Kembali</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const checkbox = document.getElementById('flexCheckDefault');
        passwordInput.type = checkbox.checked ? 'text' : 'password';
    }
    </script>
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/sidebarmenu.js"></script>
    <script src="./assets/js/app.min.js"></script>
    <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>