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
        }
        
        #content-wrapper {
        margin-left: 220px; /* Pastikan ini tetap ada untuk mengimbangi sidebar */
        width: calc(100% - 250px); /* Sesuaikan dengan lebar sidebar */
        min-height: 100vh;
        position: relative;
        box-sizing: border-box; /* Mencegah overflow */
        }

        .sidebar {
        width: 250px;
        position: fixed; /* Pastikan tetap di posisi kiri */
        left: 0;
        top: 0;
        min-height: 100vh;
        z-index: 1000; /* Tambahkan jika konten menimpa */
        overflow-y: auto; /* Pastikan scroll muncul jika konten panjang */
        background-color: #e67e22; /* Pastikan warna sidebar tetap terlihat */
        }

        
        #content {
            padding: 1.5rem;
        }
        
        .table-responsive {
            overflow-x: auto;
        }
        
        .dark-mode-toggle {
            margin: 20px;
        }

        .table th {
            background-color: #e67e22;
            color: white;
        }
    </style>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-orange sidebar sidebar-dark accordion">
            <!-- Sidebar Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-text mx-3">SPK HMSI</div>
            </a>

            <hr class="sidebar-divider my-0">

            <!-- Menu Items -->
            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span style="font-weight: bold;">Dashboard</span>
                </a>
                </li>

            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'list-kriteria.php' ? 'active' : ''; ?>">
                <a class="nav-link" href="list-kriteria.php">
                    <i class="fas fa-fw fa-cube"></i>
                <span style="font-weight: bold;">Data Kriteria</span>
                </a>
            </li>

            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'list-sub-kriteria.php' ? 'active' : ''; ?>">
                <a class="nav-link" href="list-sub-kriteria.php">
                    <i class="fas fa-fw fa-cubes"></i>
                    <span style="font-weight: bold;">Data Sub Kriteria</span>
                </a>
            </li>


            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'list-alternatif.php' ? 'active' : ''; ?>">
                <a class="nav-link" href="list-alternatif.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span style="font-weight: bold;">Data Pendaftar</span>
                </a>
            </li>

            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'list-penilaian.php' ? 'active' : ''; ?>">
                <a class="nav-link" href="list-penilaian.php">
                    <i class="fas fa-fw fa-edit"></i>
                    <span style="font-weight: bold;">Data Penilaian</span>
                </a>
            </li>

            <li class="nav-item  <?php echo basename($_SERVER['PHP_SELF']) == 'perhitungan.php' ? 'active' : ''; ?>">
                <a class="nav-link" href="perhitungan.php">
                    <i class="fas fa-fw fa-calculator"></i>
                    <span style="font-weight: bold;">Data Perhitungan</span>
                </a>
            </li>

            <li class="nav-item  <?php echo basename($_SERVER['PHP_SELF']) == 'hasil.php' ? 'active' : ''; ?>">
                <a class="nav-link" href="hasil.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span style="font-weight: bold;">Data Hasil Akhir</span>
                </a>
            </li>

            <!-- Dark Mode Toggle -->
            <li class="nav-item dark-mode-toggle">
                <button id="dark-mode-toggle" class="btn btn-dark">Light Mode</button>
            </li>
        </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper">

        <div id="content">

                
                  

<!-- Dark Mode Script -->
<script>
    // Pastikan DOM siap sebelum menjalankan script
    document.addEventListener('DOMContentLoaded', () => {
        const toggleButton = document.getElementById('dark-mode-toggle');
        const darkModeClass = 'dark-mode';
        const localStorageKey = 'theme';

        // Periksa mode saat ini dari localStorage
        const currentMode = localStorage.getItem(localStorageKey);
        if (currentMode === 'dark') {
            document.body.classList.add(darkModeClass);
            toggleButton.textContent = 'Light Mode'; // Atur teks ke Light Mode
        } else {
            toggleButton.textContent = 'Dark Mode'; // Atur teks ke Dark Mode
        }

        // Tambahkan event listener untuk tombol toggle
        toggleButton.addEventListener('click', () => {
            // Toggle kelas dark-mode pada body
            document.body.classList.toggle(darkModeClass);

            // Simpan status baru ke localStorage
            if (document.body.classList.contains(darkModeClass)) {
                localStorage.setItem(localStorageKey, 'dark');
                toggleButton.textContent = 'Light Mode'; // Ubah teks tombol
            } else {
                localStorage.setItem(localStorageKey, 'light');
                toggleButton.textContent = 'Dark Mode'; // Ubah teks tombol
            }
        });
    });
</script>


</body>
</html>