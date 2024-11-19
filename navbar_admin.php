<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BatuPACKWARrior</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo3.png" />
    <link rel="stylesheet" href="./assets/css/styles.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Acme&family=Coiny&family=Concert+One&family=Fredoka:wght@300..700&family=Outfit:wght@100..900&family=Pacifico&family=Playpen+Sans:wght@100..800&family=Playwrite+DE+Grund:wght@100..400&family=Righteous&family=Sacramento&family=Varela+Round&family=Yatra+One&display=swap"
        rel="stylesheet">
    <style>
    .logo-report {
        width: 50%;
        height: auto;
        margin-right: 10px;
        margin-top: 10px;
    }

    .logo {
        width: 50%;
        height: auto;
        margin-right: 10px;
        margin-top: 10px;
    }

    .tulisanlogo {
        font-family: "Righteous", serif;
        color: #c5e9f7;
        font-size: 30px;
        margin-top: 10px;
    }

    .righteous-regular {
        font-family: "Righteous", serif;
        font-weight: 400;
        font-style: normal;
    }

    .varela-round-regular {
        font-family: "Varela Round", serif;
        font-weight: 400;
        font-style: normal;
    }

    .dashboard {
        font-family: "Varela Round", serif;
        font-weight: bold;
        font-size: 20px;
    }

    .operation {
        font-family: "Varela Round", serif;
        font-weight: bold;
        font-size: 20px;
    }

    .report {
        font-family: "Varela Round", serif;
        font-weight: bold;
        color: #061a32;
        font-size: 20px;
    }

    .profile {
        font-family: "Varela Round", serif;
        color: #df7a15;
        font-weight: bold;
        margin-top: 10px;
    }


    .notification-dropdown {
        width: 280px;
        right: 0;
        left: auto;
        max-height: 400px;
        overflow-y: auto;
        z-index: 1050;
        /* Tambahkan z-index yang lebih tinggi */
    }

    .notification-dropdown .message-body {
        padding: 10px;
    }

    .notification-dropdown .message-title {
        font-size: 14px;
    }

    .notification-dropdown .dropdown-item {
        padding: 8px 10px;
    }

    .notification-dropdown .notification-content h6 {
        font-size: 12px;
        margin-bottom: 2px;
    }

    .notification-dropdown .notification-content p {
        font-size: 11px;
        margin-bottom: 2px;
    }

    .notification-dropdown .notification-content small {
        font-size: 10px;
    }

    .notification-dropdown .btn-sm {
        font-size: 12px;
        padding: 4px 8px;
    }

    .bg-danger {
        background-color: #ffcc00 !important;
    }
    </style>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav flex-row ms-4 align-items-center">
                    <li>
                        <img src="./assets/images/logos/bumn.svg" class="logo">
                    </li>
                </ul>

                <ul>
                    <li class="text-center">
                        <h3 class="tulisanlogo"> REPORT APP</h3>
                    </li>
                </ul>

                <div class="navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                        <li>
                            <img src="./assets/images/logos/ptba.svg" class="logo-report">
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--  Header End -->
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="../assets/js/dashboard.js"></script>
</body>

</html>