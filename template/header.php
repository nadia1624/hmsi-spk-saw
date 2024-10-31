<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Sistem Pendukung Keputusan HMSI</title>

  <!-- <link href="assets/css/all.min.css" rel="stylesheet" type="text/css"> -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="icon" type="image/png" href="/assets/img/favicon.ico">
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">
  <script src="assets/vendor/jquery/jquery.min.js"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-orange sidebar sidebar-dark">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-text mx-3">SPK HMSI</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php if ($page == "Dashboard") {
                            echo "active";
                          } ?>">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard</span></a>
      </li>

      <? php ?>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item <?php if ($page == "Kriteria") {
                            echo "active";
                          } ?>">
        <a class="nav-link" href="list-kriteria.php">
          <i class="fas fa-fw fa-cube"></i>
          <span>Data Kriteria</span></a>
      </li>

      <li class="nav-item <?php if ($page == "Sub Kriteria") {
                            echo "active";
                          } ?>">
        <a class="nav-link" href="list-sub-kriteria.php">
          <i class="fas fa-fw fa-cubes"></i>
          <span>Data Sub Kriteria</span></a>
      </li>

      <li class="nav-item <?php if ($page == "Alternatif") {
                            echo "active";
                          } ?>">
        <a class="nav-link" href="list-alternatif.php">
          <i class="fas fa-fw fa-users"></i>
          <span>Data Pendaftar</span></a>
      </li>

      <li class="nav-item <?php if ($page == "Penilaian") {
                            echo "active";
                          } ?>">
        <a class="nav-link" href="list-penilaian.php">
          <i class="fas fa-fw fa-edit"></i>
          <span>Data Penilaian</span></a>
      </li>

      <li class="nav-item <?php if ($page == "Perhitungan") {
                            echo "active";
                          } ?>">
        <a class="nav-link" href="perhitungan.php">
          <i class="fas fa-fw fa-calculator"></i>
          <span>Data Perhitungan</span></a>
      </li>

      <li class="nav-item <?php if ($page == "Hasil") {
                            echo "active";
                          } ?>">
        <a class="nav-link" href="hasil.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Data Hasil Akhir</span></a>
      </li>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="bg-white mt-4">

          </span>

      </div>
      </li>

      </ul>

      </nav>
      <!-- End of Topbar -->

      <div class="container-fluid">