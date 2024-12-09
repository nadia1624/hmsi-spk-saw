<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Pendukung Keputusan HMSI</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="icon" type="image/png" href="/assets/img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <script src="assets/vendor/jquery/jquery.min.js"></script>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Navigation -->
        <ul class="n-nav">
            
            <div>
                <h1>SPK HMSI</h1>
                <button id="close"><i class="fas fa-solid fa-arrow-left"></i></button>
                
            </div>

            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li  class="nav-item" >
                <a class="nav-link" href="bukuPanduan.php">
            <i class="fas fa-solid fa-book"></i>
            <span>Panduan Pengguna</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="list-kriteria.php">
                    <i class="fas fa-fw fa-cube"></i>
                    <span>Data Kriteria</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="list-sub-kriteria.php">
                    <i class="fas fa-fw fa-cubes"></i>
                    <span>Data Sub Kriteria</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="list-alternatif.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Pendaftar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="list-penilaian.php">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Data Penilaian</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="perhitungan.php">
                    <i class="fas fa-fw fa-calculator"></i>
                    <span>Data Perhitungan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="hasil.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Hasil Akhir</span>
                </a>
            </li>
        </ul>
    </div>

        <!-- Content Wrapper -->
        <div id="content-wrapper">
            <div id="content">
                <button id="open"><i class="fas fa-regular fa-bars"></i>  Open Menu</button>      
                <button id="dark-mode-toggle">Dark Mode</button>
                
 

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

            // Sidebar toggle
            document.addEventListener('DOMContentLoaded', () => {
        // Sidebar toggle logic
        const nav = document.querySelector('.n-nav');
        const openButton = document.getElementById('open');
        const closeButton = document.getElementById('close');

        // Open sidebar
        openButton.addEventListener('click', () => {
            nav.classList.add('show');
        });

        // Close sidebar
        closeButton.addEventListener('click', () => {
            nav.classList.remove('show');
        });
    });
    
        </script>

   
</body>

</html>
