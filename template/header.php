<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Pendukung Keputusan HMSI</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="icon" type="image/png" href="/assets/img/favicon.ico">
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <script src="assets/vendor/jquery/jquery.min.js"></script>

    <style>
        #wrapper {
    display: flex;
    flex-wrap: nowrap;
}

#content-wrapper {
    margin-left: 250px;
    flex-grow: 1;
    min-height: 100vh;
    padding: 1.5rem;
}

.sidebar {
    width: 250px;
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    background-color: #e67e22;
    transition: transform 0.3s ease;
    z-index: 1050;
}

.sidebar.hidden {
    transform: translateX(-250px);
}

.sidebar.show {
    transform: translateX(0);
}

.dark-mode {
    background-color: #121212;
    color: #ffffff;
}

.table-responsive {
    overflow-x: auto;
}

.table th {
    background-color: #e67e22;
    color: white;
}

@media (max-width: 768px) {
    #content-wrapper {
        margin-left: 0;
    }

    .sidebar {
        position: absolute;
        transform: translateX(-250px);
        transition: transform 0.3s ease;
    }

    .sidebar.show {
        transform: translateX(0);
    }

    #sidebarToggle {
        z-index: 1100;
        position: fixed;
        top: 10px;
        left: 10px;
    }
}

        

    </style>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion bg-gradient-orange">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-text mx-3">SPK HMSI</div>
            </a>
            <button id="sidebarToggle" class="sidebar-toggle">
    <i class="fas fa-bars"></i> <!-- Use Font Awesome icon for the button -->
</button>

            <hr class="sidebar-divider my-0">
            <!-- Menu Items -->
            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Buku Panduan</span>
                </a>
            </li>
            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'list-kriteria.php' ? 'active' : ''; ?>">
                <a class="nav-link" href="list-kriteria.php">
                    <i class="fas fa-fw fa-cube"></i>
                    <span>Data Kriteria</span>
                </a>
            </li>
            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'list-sub-kriteria.php' ? 'active' : ''; ?>">
                <a class="nav-link" href="list-sub-kriteria.php">
                    <i class="fas fa-fw fa-cubes"></i>
                    <span>Data Sub Kriteria</span>
                </a>
            </li>
            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'list-alternatif.php' ? 'active' : ''; ?>">
                <a class="nav-link" href="list-alternatif.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Pendaftar</span>
                </a>
            </li>
            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'list-penilaian.php' ? 'active' : ''; ?>">
                <a class="nav-link" href="list-penilaian.php">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Data Penilaian</span>
                </a>
            </li>
            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'perhitungan.php' ? 'active' : ''; ?>">
                <a class="nav-link" href="perhitungan.php">
                    <i class="fas fa-fw fa-calculator"></i>
                    <span>Data Perhitungan</span>
                </a>
            </li>
            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'hasil.php' ? 'active' : ''; ?>">
                <a class="nav-link" href="hasil.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Hasil Akhir</span>
                </a>
            </li>
            <li class="nav-item dark-mode-toggle">
                <button id="dark-mode-toggle" class="btn btn-dark">Light Mode</button>
            </li>
        </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper">
            <div id="content">
                <!-- Your content goes here -->


    <!-- Dark Mode Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggleButton = document.getElementById('dark-mode-toggle');
            const darkModeClass = 'dark-mode';
            const localStorageKey = 'theme';

            const currentMode = localStorage.getItem(localStorageKey);
            if (currentMode === 'dark') {
                document.body.classList.add(darkModeClass);
                toggleButton.textContent = 'Light Mode';
            } else {
                toggleButton.textContent = 'Dark Mode';
            }

            toggleButton.addEventListener('click', () => {
                document.body.classList.toggle(darkModeClass);
                const newMode = document.body.classList.contains(darkModeClass) ? 'dark' : 'light';
                localStorage.setItem(localStorageKey, newMode);
                toggleButton.textContent = newMode === 'dark' ? 'Light Mode' : 'Dark Mode';
            });
        });

        // Sidebar toggle for small screens
        document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.querySelector('.sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');
    const body = document.body;

    // Create overlay element
    const overlay = document.createElement('div');
    overlay.className = 'sidebar-overlay';
    body.appendChild(overlay);

    function toggleSidebar() {
        sidebar.classList.toggle('show');
        overlay.classList.toggle('show');
        body.classList.toggle('sidebar-open');
    }

    // Toggle sidebar on button click
    sidebarToggle.addEventListener('click', toggleSidebar);
    
    // Close sidebar when clicking overlay
    overlay.addEventListener('click', toggleSidebar);

    // Close sidebar when clicking menu items on mobile
    const menuItems = sidebar.querySelectorAll('.nav-link');
    menuItems.forEach(item => {
        item.addEventListener('click', () => {
            if (window.innerWidth <= 768) {
                toggleSidebar();
            }
        });
    });
});
    </script>
</body>

</html>
