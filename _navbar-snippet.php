<?php $page = basename($_SERVER['PHP_SELF']); ?>
<nav class="navbar">
  <a class="nav-brand" href="index.php">
    <div class="nav-emblem">
      <img src="img/logo-sleman.jpg" alt="Logo Sleman">
    </div>
    <div class="nav-brand-text">
      <strong>Kalurahan Sendangtirto</strong>
      <small>Kapanewon Berbah · Kab. Sleman · DIY</small>
    </div>
  </a>

  <ul class="nav-menu">
    <li><a href="index.php" class="<?= $page == 'index.php' ? 'active' : '' ?>">Beranda</a></li>
    <li><a href="statistik.php" class="<?= $page == 'statistik.php' ? 'active' : '' ?>">Statistik</a></li>
    <li><a href="struktur.php" class="<?= $page == 'struktur.php' ? 'active' : '' ?>">Struktur</a></li>
    <li><a href="layanan.php" class="<?= $page == 'layanan.php' ? 'active' : '' ?>">Layanan</a></li>
    <li><a href="berita.php" class="<?= ($page == 'berita.php' || $page == 'berita-detail.php') ? 'active' : '' ?>">Berita</a></li>
    <li><a href="pengumuman.php" class="<?= $page == 'pengumuman.php' ? 'active' : '' ?>">Pengumuman</a></li>
    <li><a href="kontak.php" class="<?= $page == 'kontak.php' ? 'active' : '' ?>">Kontak</a></li>
    <li><a href="#" onclick="bukaLayananOnline(event)" class="nav-cta" style="display: inline-block;">Layanan Online</a></li>
  </ul>

  <button class="nav-toggle" aria-label="Menu">
    <span></span><span></span><span></span>
  </button>
</nav>

<div class="nav-drawer">
  <a href="index.php"><i class="fa-solid fa-house drawer-icon"></i> Beranda</a>
  <a href="statistik.php"><i class="fa-solid fa-chart-column drawer-icon"></i> Statistik Penduduk</a>
  <a href="struktur.php"><i class="fa-solid fa-building-columns drawer-icon"></i> Struktur Organisasi</a>
  <a href="layanan.php"><i class="fa-solid fa-gear drawer-icon"></i> Layanan</a>
  <a href="berita.php"><i class="fa-solid fa-newspaper drawer-icon"></i> Berita & Kegiatan</a>
  <a href="pengumuman.php"><i class="fa-solid fa-bullhorn drawer-icon"></i> Pengumuman</a>
  <a href="kontak.php"><i class="fa-solid fa-location-dot drawer-icon"></i> Kontak</a>
  <a href="#" onclick="bukaLayananOnline(event)" class="drawer-cta"><i class="fa-solid fa-desktop"></i> Layanan Online</a>
</div>
<div class="nav-overlay"></div>
<script src="js/automail.js"></script>