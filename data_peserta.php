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
    <link rel="shortcut icon" type="image/png" href="./assets/images/logos/logo3.png" />
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
        color: white;
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
            <div id="navbar"></div>
            <!--  Header End -->
            <div class="container-fluid">
                <div class="card mt-5">
                    <div class="card-body">
                        <h5 class="judul fw-semibold">List Peserta</h5>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="rowsPerPageSelect" class="sub-judul">Tampilkan:</label>
                                <select id="rowsPerPageSelect" class="form-select text-white"
                                    style="width: auto; display: inline-block;">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30" selected>30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                                <span class="sub-judul"> data per halaman</span>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <button type="button" class="btn btn-primary"
                                    onclick="window.location.href='input.php'"> Tambah</button>
                                <button type="button" class="btn btn-primary mx-3" onclick="editSelected()"> Edit
                                </button>
                                <input type="text" class="form-control text-white me-2" id="searchInput"
                                    placeholder="Cari..." style="max-width: 200px; height: 40px; font-size: .95rem;">
                            </div>
                        </div>
                        <div class="table-responsive products-table" data-simplebar>
                            <table class="table table-bordered text-nowrap mb-0 align-middle table-hover">
                                <thead class="fs-4">
                                    <tr class="text-center">
                                        <th class="fs-3" style="width: 5%">PERINGKAT</th>
                                        <th class="fs-3">TEAM</th>
                                        <th class="fs-3">SATUAN KERJA</th>
                                        <th class="fs-3">TOTAL <br> TONASE</th>
                                        <th class="fs-3">POINT</th>
                                        <th class="fs-3">TOTAL <br> POINT</th>
                                        <th class="fs-3" style="width: 2%">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" onclick="toggleCheckboxes(this)">
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                            $no = 1;
                                            $kategori = mysqli_query($koneksi, "SELECT * FROM batu ORDER BY total_point DESC");
                                            while ($p = mysqli_fetch_array($kategori)) {
                                            ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td><?php echo $p['team'] ?></td>
                                        <td><?php echo $p['satuan'] ?></td>
                                        <td class="text-center"><?php echo $p['total_tonase'] ?></td>
                                        <td class="text-center"><?php echo $p['point'] ?></td>
                                        <td class="text-center"><?php echo $p['total_point'] ?></td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input rowCheckbox" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
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
    fetch('Navbar_admin.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('navbar').innerHTML = data;
        });

    function toggleCheckboxes(source) {
        const checkboxes = document.querySelectorAll('.rowCheckbox');
        checkboxes.forEach(checkbox => {
            checkbox.checked = source.checked;
        });
    }

    function editSelected() {
        const selectedCheckboxes = document.querySelectorAll('.rowCheckbox:checked');
        const selectedData = Array.from(selectedCheckboxes).map(checkbox => {
            const row = checkbox.closest('tr');
            return {
                team: row.cells[1].innerText,
                satuan: row.cells[2].innerText,
                total_tonase: row.cells[3].innerText,
                point: row.cells[4].innerText,
                total_point: row.cells[5].innerText
            };
        });

        if (selectedData.length > 0) {
            // Redirect to edit page with selected data
            const queryString = selectedData.map((data, index) =>
                `team[${index}]=${encodeURIComponent(data.team)}&satuan[${index}]=${encodeURIComponent(data.satuan)}&total_tonase[${index}]=${encodeURIComponent(data.total_tonase)}&point[${index}]=${encodeURIComponent(data.point)}&total_point[${index}]=${encodeURIComponent(data.total_point)}`
            ).join('&');
            window.location.href = `edit.php?${queryString}`;
        } else {
            alert('Silakan pilih data yang ingin diedit.');
        }
    }
    </script>
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/sidebarmenu.js"></script>
    <script src="./assets/js/app.min.js"></script>
    <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>