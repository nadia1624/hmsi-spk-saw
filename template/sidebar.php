<ul class="navbar-nav bg-gradient-orange sidebar sidebar-dark">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-text mx-3">SPK HMSI</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item <?php if ($page == "Dashboard") { echo "active"; } ?>">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-home"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <li class="nav-item <?php if ($page == "Kriteria") { echo "active"; } ?>">
    <a class="nav-link" href="list-kriteria.php">
      <i class="fas fa-fw fa-cube"></i>
      <span>Data Kriteria</span>
    </a>
  </li>

  <li class="nav-item <?php if ($page == "Sub Kriteria") { echo "active"; } ?>">
    <a class="nav-link" href="list-sub-kriteria.php">
      <i class="fas fa-fw fa-cubes"></i>
      <span>Data Sub Kriteria</span>
    </a>
  </li>

  <li class="nav-item <?php if ($page == "Alternatif") { echo "active"; } ?>">
    <a class="nav-link" href="list-alternatif.php">
      <i class="fas fa-fw fa-users"></i>
      <span>Data Pendaftar</span>
    </a>
  </li>

  <li class="nav-item <?php if ($page == "Penilaian") { echo "active"; } ?>">
    <a class="nav-link" href="list-penilaian.php">
      <i class="fas fa-fw fa-edit"></i>
      <span>Data Penilaian</span>
    </a>
  </li>

  <li class="nav-item <?php if ($page == "Perhitungan") { echo "active"; } ?>">
    <a class="nav-link" href="perhitungan.php">
      <i class="fas fa-fw fa-calculator"></i>
      <span>Data Perhitungan</span>
    </a>
  </li>

  <li class="nav-item <?php if ($page == "Hasil") { echo "active"; } ?>">
    <a class="nav-link" href="hasil.php">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Data Hasil Akhir</span>
    </a>
  </li>

  <li>
    <div id="content-wrapper">
      <div id="content">
        <nav class="bg-white mt-4">
          <button id="dark-mode-toggle" class="btn btn-dark">Toggle Dark Mode</button>
        </nav>
      </div>
    </div>
  </li>
</ul>
