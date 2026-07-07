<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <title>Statistik Penduduk – Kalurahan Sendangtirto</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
  <link rel="stylesheet" href="css/main.css"/>
  <link rel="stylesheet" href="css/navbar.css"/>
  <link rel="stylesheet" href="css/components.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.umd.min.js"></script>
</head>
<body>

<?php include '_navbar-snippet.php'; ?>

<div class="page-content">

  <div class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="hero-anim">
      <span class="stag" style="color:var(--emas-light)"><i class="fa-solid fa-chart-simple"></i> Data Resmi 2025</span>
      <h1>Statistik Kependudukan</h1>
      <p>Data kependudukan Kalurahan Sendangtirto diperbarui secara berkala berdasarkan laporan Dinas Dukcapil Kabupaten Sleman.</p>
    </div>
  </div>

  <section style="background:var(--putih)">
    <div class="breadcrumb fu">
      <a href="index.php">Beranda</a>
      <span>›</span>
      <span>Statistik Penduduk</span>
    </div>

    <div class="kpi-row">
      <div class="kpi fu">
        <div class="kpi-val" data-target="17082">0</div>
        <div class="kpi-lbl">Total Penduduk</div>
        <span class="kpi-delta badge-green">▲ 1.0% (2025)</span>
      </div>
      <div class="kpi fu fu-d1">
        <div class="kpi-val" data-target="8621">0</div>
        <div class="kpi-lbl">Laki-laki</div>
        <span class="kpi-delta badge-green">▲ 1.2%</span>
      </div>
      <div class="kpi fu fu-d2">
        <div class="kpi-val" data-target="8461">0</div>
        <div class="kpi-lbl">Perempuan</div>
        <span class="kpi-delta badge-green">▲ 0.8%</span>
      </div>
      <div class="kpi fu fu-d3">
        <div class="kpi-val" data-target="312">0</div>
        <div class="kpi-lbl">Kelahiran Tahun Ini</div>
        <span class="kpi-delta badge-green">▲ 24</span>
      </div>
    </div>

    <div class="stat-dash">
      <div class="chart-card fu">
        <h3>Sebaran Usia Penduduk</h3>
        <p>Distribusi berdasarkan kelompok umur dan jenis kelamin</p>
        <div class="chart-wrap"><canvas id="chartUsia"></canvas></div>
      </div>
      <div class="chart-card fu fu-d1">
        <h3>Tingkat Pendidikan</h3>
        <p>Persentase berdasarkan jenjang pendidikan terakhir</p>
        <div class="chart-wrap"><canvas id="chartPendidikan"></canvas></div>
      </div>
      <div class="chart-card stat-dash-full fu">
        <h3>Tren Pertumbuhan Penduduk 2019–2025</h3>
        <p>Perkembangan jumlah penduduk Kalurahan Sendangtirto dalam 6 tahun terakhir</p>
        <div class="chart-wrap"><canvas id="chartTrend"></canvas></div>
      </div>
      <div class="chart-card fu">
        <h3>Mata Pencaharian Utama</h3>
        <p>Distribusi pekerjaan warga produktif</p>
        <div class="chart-wrap-sm"><canvas id="chartPekerjaan"></canvas></div>
      </div>
      <div class="chart-card fu fu-d1">
        <h3>Komposisi Agama</h3>
        <p>Persentase berdasarkan agama yang dianut</p>
        <div class="chart-wrap-sm"><canvas id="chartAgama"></canvas></div>
      </div>
    </div>

    <p class="text-muted mt-48 fu" style="font-size:12px;text-align:right">
      Sumber: Laporan Dukcapil Kab. Sleman & Data Kalurahan Sendangtirto, Desember 2025.
    </p>
  </section>

</div>

<?php include '_footer-snippet.php'; ?>

<script src="js/navbar.js"></script>
<script src="js/animations.js"></script>
<script src="js/charts.js"></script>
</body>
</html>