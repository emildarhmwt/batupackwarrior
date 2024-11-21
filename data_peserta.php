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

    .form-control::placeholder {
        color: black;
    }

    #searchInput::placeholder {
        color: black;
    }

    .batu {
        font-family: "Righteous", serif;
        color: #dee7e6ab;
        font-size: 40px;
        margin-bottom: -70px;
        margin-top: 10px;
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

    .search {
        max-width: 200px;
        height: 40px;
        font-size: .95rem;
        border: 1px solid black;
    }

    tr th {
        font-size: 15px;
        font-family: "Varela Round", serif;
    }

    tr td {
        font-size: 15px;
        font-family: "Varela Round", serif;
    }

    @media (max-width: 767.98px) {
        .batu {
            font-size: 15px;
            margin-bottom: -70px;
            margin-top: 31px;
        }

        .search {
            max-width: 150px;
            height: 40px;
            font-size: .95rem;
            border: 1px solid black;
        }

        tr th {
            font-size: 13px;
        }

        tr td {
            font-size: 13px;
        }

        .form-select {
            padding: 8px 30px 8px 10px;
            font-size: 5px;
            height: 40px;
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

        .btn-custom-delete {
            width: 10px;
            height: 40px;
            padding: 10px 15px;
        }

        .btn-custom-add {
            width: 10px;
            height: 40px;
            padding: 10px 15px;
        }

        element.style {
            width: 60px;
            display: inline-block;
            border: 1px solid black;
        }

        .bi-plus-circle {
            font-size: 5px;
        }

        .bi-pen {
            font-size: 5px;
        }

        .bi-trash2 {
            font-size: 5px;
        }

        .bi-person {
            font-size: 5px;
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
                        <div class="row mb-3">
                            <div class="col-md-3 col-3">
                                <!-- <label for="rowsPerPageSelect" class="sub-judul">Tampilkan:</label> -->
                                <select id="rowsPerPageSelect" class="form-select text-black"
                                    style="width: auto; display: inline-block; border: 1px solid black;">
                                    <option value="10" selected>10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                                <!-- <span class="sub-judul"> data per halaman</span> -->
                            </div>
                            <div class="col-md-9 col-9 d-flex justify-content-end">
                                <button type="button"
                                    class="btn btn-custom-eye me-2 d-flex align-items-center justify-content-center"
                                    onclick="window.location.href='input.php'"><i class="bi bi-plus-circle"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-custom-edit me-2 d-flex align-items-center justify-content-center"
                                    onclick="editSelected()"> <i class="bi bi-pen"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-custom-delete me-2 d-flex align-items-center justify-content-center"
                                    onclick="deleteSelected()"> <i class="bi bi-trash2"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-custom-add me-2 d-flex align-items-center justify-content-center"
                                    onclick="window.location.href='admin.php'"> <i class="bi bi-person"></i>
                                </button>
                                <input type="text" class="form-control text-black search" id="searchInput"
                                    placeholder="Cari...">
                            </div>
                        </div>
                        <div class="table-responsive products-table" data-simplebar>
                            <table class="table table-bordered text-nowrap mb-0 align-middle table-hover">
                                <thead class="fs-4">
                                    <tr class="text-center">
                                        <th style="vertical-align: middle;">RANK</th>
                                        <th style="vertical-align: middle;">TEAM</th>
                                        <th style="vertical-align: middle;">SATUAN KERJA</th>
                                        <th style="vertical-align: middle;">TOTAL HANDLING <br> (Ton)</th>
                                        <th style="vertical-align: middle;">TOTAL KOMPLAIN <br> (Kali)</th>
                                        <th style="vertical-align: middle;">KUMULATIF <br> (Ton)</th>
                                        <th class="fs-3" style="vertical-align: middle;">
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
                                        <td class="text-center"><?php echo $p['point_complain'] ?></td>
                                        <td class="text-center"><?php echo $p['total_point'] ?></td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input rowCheckbox" type="checkbox" value=""
                                                    data-id="<?php echo $p['id']; ?>">
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                            }
                                            ?>
                                </tbody>
                            </table>
                        </div>
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
    <script>
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
                point_complain: row.cells[4].innerText,
                total_point: row.cells[5].innerText
            };
        });

        if (selectedData.length > 0) {
            // Redirect to edit page with selected data
            const queryString = selectedData.map((data, index) =>
                `team[${index}]=${encodeURIComponent(data.team)}&satuan[${index}]=${encodeURIComponent(data.satuan)}&total_tonase[${index}]=${encodeURIComponent(data.total_tonase)}&point_complain[${index}]=${encodeURIComponent(data.point_complain)}&total_point[${index}]=${encodeURIComponent(data.total_point)}`
            ).join('&');
            window.location.href = `edit.php?${queryString}`;
        } else {
            alert('Silakan pilih data yang ingin diedit.');
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const rowsPerPageSelect = document.getElementById('rowsPerPageSelect');
        const paginationElement = document.getElementById('Pagination');
        const tableBody = document.querySelector('tbody');
        const searchInput = document.getElementById('searchInput');
        let currentPage = 1;
        let rowsPerPage = parseInt(rowsPerPageSelect.value);

        rowsPerPageSelect.addEventListener('change', function() {
            rowsPerPage = parseInt(this.value);
            currentPage = 1;
            updateTable();
        });

        searchInput.addEventListener('input', function() {
            currentPage = 1;
            updateTable();
        });

        function updateTable() {
            const searchTerm = searchInput.value.toLowerCase();
            const rows = Array.from(tableBody.querySelectorAll('tr'));
            const filteredRows = rows.filter(row => {
                return Array.from(row.cells).some(cell =>
                    cell.textContent.toLowerCase().includes(searchTerm)
                );
            });

            const totalRows = filteredRows.length;
            const totalPages = Math.ceil(totalRows / rowsPerPage);

            // Hide all rows
            rows.forEach(row => row.style.display = 'none');

            // Show only the filtered rows for the current page
            const start = (currentPage - 1) * rowsPerPage;
            const end = start + rowsPerPage;
            filteredRows.slice(start, end).forEach(row => row.style.display = '');

            // Update pagination
            updatePagination(totalPages);
        }

        function updatePagination(totalPages) {
            paginationElement.innerHTML = '';
            for (let i = 1; i <= totalPages; i++) {
                const li = document.createElement('li');
                li.className = 'page-item' + (i === currentPage ? ' active' : '');
                const a = document.createElement('a');
                a.className = 'page-link';
                a.href = '#';
                a.textContent = i;
                a.addEventListener('click', function(e) {
                    e.preventDefault();
                    currentPage = i;
                    updateTable();
                });
                li.appendChild(a);
                paginationElement.appendChild(li);
            }
        }

        updateTable();
    });

    function deleteSelected() {
        const selectedCheckboxes = document.querySelectorAll('.rowCheckbox:checked');
        const selectedIds = Array.from(selectedCheckboxes).map(checkbox => checkbox.getAttribute('data-id'));

        if (selectedIds.length > 0) {
            if (confirm('Apakah Anda yakin ingin menghapus data yang dipilih?')) {
                fetch('delete.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            ids: selectedIds
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Data berhasil dihapus.');
                            location.reload();
                        } else {
                            alert('Terjadi kesalahan saat menghapus data.');
                        }
                    });
            }
        } else {
            alert('Silakan pilih data yang ingin dihapus.');
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