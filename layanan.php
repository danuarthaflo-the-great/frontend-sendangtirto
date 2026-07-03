<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <title>Layanan Administrasi – Kalurahan Sendangtirto</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
  <link rel="stylesheet" href="css/main.css?v=1.3"/>
  <link rel="stylesheet" href="css/navbar.css?v=1.3"/>
  <link rel="stylesheet" href="css/components.css?v=1.3"/>
  <style>
    /* Layanan detail card */
    .req-list { margin-top: 12px; padding-left: 0; }
    .req-list li {
      display: flex; gap: 10px; align-items: flex-start;
      font-size: 13px; color: var(--muted); margin-bottom: 6px;
      list-style: none;
    }
    .req-list li::before {
      content: '✓'; color: var(--hijau); font-weight: 700;
      flex-shrink: 0; margin-top: 1px;
    }
    .layanan-detail-grid {
      display: grid; grid-template-columns: repeat(auto-fill, minmax(320px,1fr)); gap: 24px;
    }
    .lcard-detail {
      background: var(--putih); border-radius: var(--radius-lg);
      padding: 28px 24px; border: 1px solid rgba(15,52,96,0.08);
      transition: all .2s;
    }
    .lcard-detail:hover { box-shadow: var(--shadow-md); border-color: rgba(15,52,96,0.18); }
    .lcard-detail-header { display: flex; gap: 16px; align-items: flex-start; margin-bottom: 16px; }
    .lcard-detail-header .licon { flex-shrink: 0; }
    .lcard-detail-header h3 { font-size: 16px; font-weight: 700; color: var(--biru); margin-bottom: 4px; }
    .lcard-detail-header p  { font-size: 12px; color: var(--muted); }
    .lcard-divider { height: 1px; background: rgba(15,52,96,0.08); margin: 14px 0; }
    .lcard-meta { display: flex; gap: 16px; flex-wrap: wrap; margin-top: 14px; }
    .lcard-meta-item { font-size: 12px; color: var(--muted); display: inline-flex; align-items: center; }
    .lcard-meta-item i { color: var(--biru-light); margin-right: 6px; font-size: 13px; }
    .lcard-meta-item strong { color: var(--biru); margin-left: 2px; }

    /* Alur layanan */
    .alur-steps { display: flex; flex-direction: column; gap: 0; counter-reset: step; }
    .alur-step {
      display: flex; gap: 20px; align-items: flex-start;
      padding: 20px 0; border-bottom: 1px solid rgba(15,52,96,0.07);
      position: relative;
    }
    .alur-step:last-child { border-bottom: none; }
    .step-num {
      width: 40px; height: 40px; border-radius: 50%; flex-shrink: 0;
      background: var(--biru); color: var(--putih);
      display: flex; align-items: center; justify-content: center;
      font-weight: 700; font-size: 15px;
    }
    .alur-step h4 { font-size: 14px; font-weight: 700; color: var(--biru); margin-bottom: 4px; }
    .alur-step p  { font-size: 13px; color: var(--muted); line-height: 1.6; }
  </style>
</head>
<body>

<?php include '_navbar-snippet.php'; ?>

<div class="page-content">

  <div class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="hero-anim">
      <span class="stag" style="color:var(--emas-light)"><i class="fa-solid fa-gear"></i> Pelayanan Publik</span>
      <h1>Layanan Administrasi</h1>
      <p>Semua layanan administrasi kependudukan Kalurahan Sendangtirto. Gratis dan tidak dipungut biaya apapun.</p>
    </div>
  </div>

  <section style="background:var(--krem)">
    <div class="breadcrumb fu">
      <a href="index.php">Beranda</a><span>›</span><span>Layanan Administrasi</span>
    </div>

    <div class="section-header fu">
      <span class="stag"><i class="fa-solid fa-clipboard-list"></i> Tersedia</span>
      <h2 class="stitle">Jenis Layanan</h2>
      <p class="ssub">Klik pada layanan untuk melihat persyaratan lengkap dan estimasi waktu penyelesaian.</p>
    </div>

    <div class="layanan-detail-grid auto-stagger">

      <div class="lcard-detail fu">
        <div class="lcard-detail-header">
          <div class="licon"><i class="fa-solid fa-clipboard-list"></i></div>
          <div><h3>Surat Keterangan Domisili</h3><p>Untuk keperluan sekolah, pekerjaan, dan administrasi</p></div>
        </div>
        <div class="lcard-divider"></div>
        <strong style="font-size:12px;color:var(--biru);display:block;margin-bottom:8px">PERSYARATAN:</strong>
        <ul class="req-list">
          <li>Fotokopi KTP</li>
          <li>Fotokopi KK</li>
          <li>Surat pengantar RT/RW</li>
          <li>Mengisi formulir permohonan</li>
        </ul>
        <div class="lcard-meta">
          <div class="lcard-meta-item"><i class="fa-regular fa-clock"></i> <strong>1 hari kerja</strong></div>
          <div class="lcard-meta-item"><i class="fa-solid fa-coins"></i> <strong>Gratis</strong></div>
        </div>
      </div>

      <div class="lcard-detail fu">
        <div class="lcard-detail-header">
          <div class="licon"><i class="fa-solid fa-baby"></i></div>
          <div><h3>Pengantar Akta Kelahiran</h3><p>Melalui Dukcapil Kabupaten Sleman</p></div>
        </div>
        <div class="lcard-divider"></div>
        <strong style="font-size:12px;color:var(--biru);display:block;margin-bottom:8px">PERSYARATAN:</strong>
        <ul class="req-list">
          <li>Surat keterangan lahir dari bidan/RS</li>
          <li>Fotokopi KTP kedua orang tua</li>
          <li>Fotokopi KK</li>
          <li>Fotokopi buku nikah orang tua</li>
          <li>Surat pengantar RT/RW</li>
        </ul>
        <div class="lcard-meta">
          <div class="lcard-meta-item"><i class="fa-regular fa-clock"></i> <strong>3 hari kerja</strong></div>
          <div class="lcard-meta-item"><i class="fa-solid fa-coins"></i> <strong>Gratis</strong></div>
        </div>
      </div>

      <div class="lcard-detail fu">
        <div class="lcard-detail-header">
          <div class="licon"><i class="fa-solid fa-ring"></i></div>
          <div><h3>Surat Pengantar Nikah (N1–N4)</h3><p>Untuk pernikahan di KUA Kapanewon Berbah</p></div>
        </div>
        <div class="lcard-divider"></div>
        <strong style="font-size:12px;color:var(--biru);display:block;margin-bottom:8px">PERSYARATAN:</strong>
        <ul class="req-list">
          <li>Fotokopi KTP calon pengantin</li>
          <li>Fotokopi KK</li>
          <li>Surat pengantar RT/RW</li>
          <li>Pas foto 2x3 masing-masing 4 lembar</li>
          <li>Surat ijin orang tua (jika belum 21 tahun)</li>
        </ul>
        <div class="lcard-meta">
          <div class="lcard-meta-item"><i class="fa-regular fa-clock"></i> <strong>2 hari kerja</strong></div>
          <div class="lcard-meta-item"><i class="fa-solid fa-coins"></i> <strong>Gratis</strong></div>
        </div>
      </div>

      <div class="lcard-detail fu">
        <div class="lcard-detail-header">
          <div class="licon"><i class="fa-solid fa-house"></i></div>
          <div><h3>Perubahan KK & KTP-el</h3><p>Penambahan, pengurangan anggota, perubahan data</p></div>
        </div>
        <div class="lcard-divider"></div>
        <strong style="font-size:12px;color:var(--biru);display:block;margin-bottom:8px">PERSYARATAN:</strong>
        <ul class="req-list">
          <li>KK asli yang lama</li>
          <li>Fotokopi KTP pemohon</li>
          <li>Surat pengantar RT/RW</li>
          <li>Dokumen pendukung sesuai jenis perubahan</li>
        </ul>
        <div class="lcard-meta">
          <div class="lcard-meta-item"><i class="fa-regular fa-clock"></i> <strong>7 hari kerja</strong></div>
          <div class="lcard-meta-item"><i class="fa-solid fa-coins"></i> <strong>Gratis</strong></div>
        </div>
      </div>

      <div class="lcard-detail fu">
        <div class="lcard-detail-header">
          <div class="licon"><i class="fa-solid fa-scroll"></i></div>
          <div><h3>Surat Keterangan Usaha</h3><p>Untuk UMKM, perizinan, dan perbankan</p></div>
        </div>
        <div class="lcard-divider"></div>
        <strong style="font-size:12px;color:var(--biru);display:block;margin-bottom:8px">PERSYARATAN:</strong>
        <ul class="req-list">
          <li>Fotokopi KTP pemilik usaha</li>
          <li>Fotokopi KK</li>
          <li>Surat pengantar RT/RW</li>
          <li>Foto lokasi usaha</li>
        </ul>
        <div class="lcard-meta">
          <div class="lcard-meta-item"><i class="fa-regular fa-clock"></i> <strong>1 hari kerja</strong></div>
          <div class="lcard-meta-item"><i class="fa-solid fa-coins"></i> <strong>Gratis</strong></div>
        </div>
      </div>

      <div class="lcard-detail fu">
        <div class="lcard-detail-header">
          <div class="licon"><i class="fa-solid fa-capsules"></i></div>
          <div><h3>SKTM & Rekomendasi Sosial</h3><p>Untuk beasiswa, kesehatan, dan bansos</p></div>
        </div>
        <div class="lcard-divider"></div>
        <strong style="font-size:12px;color:var(--biru);display:block;margin-bottom:8px">PERSYARATAN:</strong>
        <ul class="req-list">
          <li>Fotokopi KTP pemohon</li>
          <li>Fotokopi KK</li>
          <li>Surat pengantar RT/RW yang menyatakan kondisi ekonomi</li>
          <li>Surat keterangan penghasilan (jika ada)</li>
        </ul>
        <div class="lcard-meta">
          <div class="lcard-meta-item"><i class="fa-regular fa-clock"></i> <strong>1 hari kerja</strong></div>
          <div class="lcard-meta-item"><i class="fa-solid fa-coins"></i> <strong>Gratis</strong></div>
        </div>
      </div>

    </div></section>

  <section style="background:var(--putih)">
    <div class="section-header fu">
      <span class="stag"><i class="fa-solid fa-arrows-rotate"></i> Prosedur</span>
      <h2 class="stitle">Alur Pengajuan Layanan</h2>
      <p class="ssub">Ikuti langkah-langkah berikut untuk memproses permohonan administrasi Anda.</p>
    </div>
    <div style="max-width:600px">
      <div class="alur-steps">
        <div class="alur-step fu">
          <div class="step-num">1</div>
          <div><h4>Minta Surat Pengantar RT/RW</h4><p>Datangi Ketua RT atau RW setempat untuk mendapatkan surat pengantar sesuai keperluan Anda.</p></div>
        </div>
        <div class="alur-step fu fu-d1">
          <div class="step-num">2</div>
          <div><h4>Siapkan Dokumen Persyaratan</h4><p>Lengkapi semua dokumen persyaratan sesuai jenis layanan yang diperlukan (fotokopi KTP, KK, dll).</p></div>
        </div>
        <div class="alur-step fu fu-d2">
          <div class="step-num">3</div>
          <div><h4>Datang ke Loket Pelayanan</h4><p>Kunjungi kantor Kalurahan Sendangtirto di loket pelayanan pada jam kerja (Senin–Jumat 08.00–15.30 WIB).</p></div>
        </div>
        <div class="alur-step fu fu-d3">
          <div class="step-num">4</div>
          <div><h4>Verifikasi dan Proses</h4><p>Petugas akan memeriksa kelengkapan dokumen dan memproses permohonan Anda.</p></div>
        </div>
        <div class="alur-step fu">
          <div class="step-num" style="background:var(--hijau)"><i class="fa-solid fa-check"></i></div>
          <div><h4>Ambil Surat / Dokumen</h4><p>Surat atau dokumen yang dimohonkan akan diserahkan sesuai estimasi waktu penyelesaian yang telah ditentukan.</p></div>
        </div>
      </div>
    </div>
  </section>

</div>

<?php include '_footer-snippet.php'; ?>

<script src="js/navbar.js"></script>
<script src="js/animations.js"></script>
</body>
</html>