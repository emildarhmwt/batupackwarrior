<?php
include './koneksi.php';
session_start();
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.23/jspdf.plugin.autotable.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Acme&family=Coiny&family=Concert+One&family=Fredoka:wght@300..700&family=Outfit:wght@100..900&family=Pacifico&family=Playpen+Sans:wght@100..800&family=Playwrite+DE+Grund:wght@100..400&family=Righteous&family=Sacramento&family=Varela+Round&family=Yatra+One&display=swap"
        rel="stylesheet">
    <style>
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
        color: black;
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

    .card-preview {
        background-color: #b37219 !important;
    }

    .produksi {
        color: white;
        font-family: "Varela Round", serif;
        font-size: 17px;
    }

    .produksi:hover {
        color: black;
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

    .body-wrapper {
        background-image: url("./assets/images/backgrounds/10.png");
        background-size: cover;
        background-repeat: no-repeat;
    }

    .batu {
        font-family: "Righteous", serif;
        color: #dee7e6ab;
        font-size: 40px;
        margin-bottom: -70px;
        margin-top: 10px;
    }

    .form-control::placeholder {
        color: black;
    }

    #searchInput::placeholder {
        color: black;
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

    .btn-custom-delete {
        background-color: #3d0606 !important;
        color: white !important;
    }

    .btn-custom-delete:hover {
        background-color: #3d06068a !important;
        color: white !important;
    }

    .btn-custom-add {
        background-color: #25a0ab !important;
        color: black !important;
    }

    .btn-custom-add:hover {
        background-color: #25a0ab9e !important;
        color: black !important;
    }

    .bi-plus {
        font-size: 15px;
    }

    .bi-arrow-left-short {
        font-size: 15px;
    }

    .search {
        max-width: 200px;
        height: 40px;
        font-size: .95rem;
        border: 1px solid black;
    }

    @media (max-width: 767.98px) {
        .batu {
            font-size: 15px;
            margin-bottom: -70px;
            margin-top: 31px;
        }

        .btn-custom-eye {
            width: 10px;
            height: 40px;
            padding: 10px 15px;
        }

        .btn-custom-edit {
            width: 10px;
            height: 40px;
            padding: 10px 15px;
        }

        .search {
            max-width: 150px;
            height: 40px;
            font-size: .95rem;
            border: 1px solid black;
        }

        .form-select {
            padding: 8px 30px 8px 10px;
        }
    }
    </style>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
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
                        <div class="row mb-3">
                            <div class="col-md-4 col-4">
                                <!-- <label for="rowsPerPageSelect" class="sub-judul">Tampilkan:</label> -->
                                <select id="rowsPerPageSelect" class="form-select text-black"
                                    style="width: auto; display: inline-block; border: 1px solid black;">
                                    <option value="5">5</option>
                                    <option value="10" selected>10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                </select>
                                <!-- <span class="sub-judul"> data per halaman</span> -->
                            </div>
                            <div class="col-md-8 col-8 d-flex justify-content-end">
                                <button type="button"
                                    class="btn btn-custom-eye me-2 d-flex align-items-center justify-content-center"
                                    onclick="window.location.href='tambah_admin.php'"><i
                                        class="bi bi-plus-circle"></i></button>
                                <button type="button"
                                    class="btn btn-custom-edit me-2 d-flex align-items-center justify-content-center"
                                    onclick="window.location.href='data_peserta.php'"><i
                                        class="bi bi-arrow-left-short"></i>
                                </button>
                                <input type=" text" class="form-control text-black search" id="searchInput"
                                    placeholder="Cari...">
                            </div>
                        </div>
                        <div class="table-responsive products-table" data-simplebar>
                            <table class="table table-bordered text-nowrap mb-0 align-middle table-hover">
                                <thead class="fs-4">
                                    <tr class="text-center">
                                        <th class="fs-3" style="width: 5%">No</th>
                                        <th class="fs-3" style="width: 45%">Nama</th>
                                        <th class="fs-3" style="width: 45%">Username</th>
                                        <th class="fs-3" style="width: 5%">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                            $no = 1;
                                            $kategori = mysqli_query($koneksi, "SELECT * FROM admin ORDER BY id");
                                            while ($p = mysqli_fetch_array($kategori)) {
                                            ?>
                                    <tr class="text-center">
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td><?php echo $p['nama'] ?></td>
                                        <td><?php echo $p['username'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-custom-add me-2"
                                                onclick="window.location.href='edit_admin.php?id=<?php echo $p['id']; ?>'">
                                                <i class="bi bi-pen"></i>
                                            </button>
                                            <button type="button" class="btn btn-custom-delete me-2"
                                                onclick="deleteAdmin(<?php echo $p['id']; ?>)">
                                                <i class="bi bi-trash2"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php
                                            }
                                            ?>
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center mt-3" id="Pagination">
                                    <!-- Pagination items will be added here by JavaScript -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function deleteAdmin(id) {
        if (confirm("Are you sure you want to delete this admin?")) {
            window.location.href = 'delete_admin.php?id=' + id;
        }
    }
    </script>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>