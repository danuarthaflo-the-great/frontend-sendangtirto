<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <title>Struktur Organisasi – Kalurahan Sendangtirto</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
  <link rel="stylesheet" href="css/main.css?v=1.3"/>
  <link rel="stylesheet" href="css/navbar.css?v=1.3"/>
  <link rel="stylesheet" href="css/components.css?v=1.3"/>
</head>
<body>

<?php include '_navbar-snippet.php'; ?>

<div class="page-content">

  <div class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="hero-anim">
      <span class="stag" style="color:var(--emas-light)"><i class="fa-solid fa-building-columns"></i> Pemerintahan</span>
      <h1>Struktur Organisasi</h1>
      <p>Aparatur Kalurahan Sendangtirto periode 2021–2026. Klik kartu untuk melihat detail tugas dan informasi jabatan.</p>
    </div>
  </div>

  <section style="background:var(--krem)">
    <div class="breadcrumb fu">
      <a href="index.php">Beranda</a><span>›</span><span>Struktur Organisasi</span>
    </div>

    <div class="org-wrap fu">
      <div class="org-tree">

        <div style="display:flex;justify-content:center">
          <div class="ocard top" onclick="tampilkanDetailAparatur('lurah')">
            <div class="ocard-pin">Pimpinan</div>
            <div class="ocard-avatar"><i class="fa-solid fa-user-tie"></i></div>
            <div class="ocard-name">Sardjono, S.IP</div>
            <div class="ocard-role">Lurah Sendangtirto</div>
          </div>
        </div>

        <div class="conn-v"></div>

        <div style="display:flex;justify-content:center">
          <div class="ocard sekretaris" onclick="tampilkanDetailAparatur('sekretaris')">
            <div class="ocard-avatar"><i class="fa-solid fa-user-tie"></i></div>
            <div class="ocard-name">Dra. Sri Mulyani</div>
            <div class="ocard-role">Sekretaris Kalurahan</div>
          </div>
        </div>

        <div style="position:relative;width:72%;margin:0 auto">
          <div class="conn-h-bar" style="width:100%"></div>
          <div style="position:absolute;top:0;left:0;width:2px;height:28px;background:rgba(46,134,193,0.3)"></div>
          <div style="position:absolute;top:0;left:33%;width:2px;height:28px;background:rgba(46,134,193,0.3)"></div>
          <div style="position:absolute;top:0;left:66%;width:2px;height:28px;background:rgba(46,134,193,0.3)"></div>
          <div style="position:absolute;top:0;right:0;width:2px;height:28px;background:rgba(46,134,193,0.3)"></div>
        </div>

        <div class="conn-branches" style="margin-top:28px">
          <div class="ocard" onclick="tampilkanDetailAparatur('pemerintahan')">
            <div class="ocard-avatar"><i class="fa-solid fa-building-columns"></i></div>
            <div class="ocard-name">Agung Prihattanto</div>
            <div class="ocard-role">Kasi Pemerintahan</div>
          </div>
          <div class="ocard" onclick="showDetail('kesra')">
            <div class="ocard-avatar"><i class="fa-solid fa-handshake"></i></div>
            <div class="ocard-name">Haryanti, S.Sos</div>
            <div class="ocard-role">Kasi Kesra</div>
          </div>
          <div class="ocard" onclick="showDetail('pelayanan')">
            <div class="ocard-avatar"><i class="fa-solid fa-clipboard-list"></i></div>
            <div class="ocard-name">Budi Santoso</div>
            <div class="ocard-role">Kasi Pelayanan</div>
          </div>
          <div class="ocard" onclick="showDetail('keuangan')">
            <div class="ocard-avatar"><i class="fa-solid fa-coins"></i></div>
            <div class="ocard-name">Retno Wulandari</div>
            <div class="ocard-role">Kaur Keuangan</div>
          </div>
        </div>

        <div class="conn-v"></div>

        <div class="conn-branches">
          <div class="ocard staf" onclick="tampilkanDetailAparatur('staf1')">
            <div class="ocard-avatar"><i class="fa-solid fa-user"></i></div>
            <div class="ocard-name">Awan Prabowo</div>
            <div class="ocard-role">Dukuh Dawukan</div>
          </div>
          <div class="ocard staf" onclick="tampilkanDetailAparatur('staf2')">
            <div class="ocard-avatar"><i class="fa-solid fa-user"></i></div>
            <div class="ocard-name">Slamet Riyadi</div>
            <div class="ocard-role">Dukuh Karang</div>
          </div>
          <div class="ocard staf" onclick="tampilkanDetailAparatur('staf3')">
            <div class="ocard-avatar"><i class="fa-solid fa-user"></i></div>
            <div class="ocard-name">Marsiyem</div>
            <div class="ocard-role">Dukuh Kadipolo</div>
          </div>
          <div class="ocard staf" onclick="tampilkanDetailAparatur('staf4')">
            <div class="ocard-avatar"><i class="fa-solid fa-user"></i></div>
            <div class="ocard-name">Sugeng Wahyudi</div>
            <div class="ocard-role">Dukuh Nayan</div>
          </div>
          <div class="ocard staf" onclick="tampilkanDetailAparatur('staf5')">
            <div class="ocard-avatar"><i class="fa-solid fa-user"></i></div>
            <div class="ocard-name">Tri Wibowo</div>
            <div class="ocard-role">Staf Administrasi</div>
          </div>
        </div>

      </div><div class="org-detail" id="org-detail">
        <h3 id="od-name">–</h3>
        <span class="role-tag" id="od-role">–</span>
        <p id="od-desc">–</p>
        <div class="org-detail-grid">
          <div class="od-item"><h5>NIP / NIK</h5><p id="od-nip">–</p></div>
          <div class="od-item"><h5>Pendidikan</h5><p id="od-edu">–</p></div>
          <div class="od-item"><h5>Menjabat Sejak</h5><p id="od-since">–</p></div>
        </div>
      </div>

    </div></section>

</div>

<?php include '_footer-snippet.php'; ?>

<script src="js/navbar.js"></script>
<script src="js/animations.js"></script>
<script>
// Objek data berisi profil lengkap aparatur desa
const dataAparaturOrganisasi = {
  lurah:       { name:'Sardjono, S.IP',        role:'Lurah Sendangtirto',      desc:'Memimpin penyelenggaraan urusan pemerintahan, pembangunan, dan kemasyarakatan. Bertanggung jawab kepada Camat Kapanewon Berbah atas seluruh jalannya roda pemerintahan kalurahan.', nip:'19680512 199203 1 002', edu:'S1 Ilmu Pemerintahan', since:'2016' },
  sekretaris:  { name:'Dra. Sri Mulyani',       role:'Sekretaris Kalurahan',    desc:'Membantu Lurah dalam bidang administrasi pemerintahan dan mengkoordinasikan tugas antar seksi. Bertanggung jawab atas ketertiban arsip dan administrasi kalurahan.', nip:'19720304 200003 2 004', edu:'S1 Administrasi Negara', since:'2012' },
  pemerintahan:{ name:'Agung Prihattanto',       role:'Kasi Pemerintahan',      desc:'Melaksanakan urusan pemerintahan umum, pembinaan ketertiban, penegakan peraturan, dan pelaporan data kependudukan wilayah.', nip:'19850721 201001 1 003', edu:'S1 Hukum', since:'2020' },
  kesra:       { name:'Haryanti, S.Sos',         role:'Kasi Kesejahteraan Rakyat', desc:'Mengurus bidang sosial, keagamaan, pendidikan, kesehatan, dan pemberdayaan masyarakat termasuk pengelolaan BLT-DD dan program PKK.', nip:'19790610 200604 2 005', edu:'S1 Sosiologi', since:'2015' },
  pelayanan:   { name:'Budi Santoso',            role:'Kasi Pelayanan Umum',    desc:'Menangani pelayanan administrasi kependudukan, surat-menyurat, dan seluruh layanan umum kepada masyarakat di loket pelayanan.', nip:'19811203 200903 1 001', edu:'D3 Administrasi', since:'2018' },
  keuangan:    { name:'Retno Wulandari',         role:'Kaur Keuangan',          desc:'Mengurus tata laksana keuangan kalurahan, pembukuan, verifikasi, pelaporan keuangan, dan administrasi APBKal (Anggaran Pendapatan dan Belanja Kalurahan).', nip:'19900815 201404 2 002', edu:'S1 Akuntansi', since:'2019' },
  staf1:       { name:'Awan Prabowo',            role:'Dukuh Dawukan',          desc:'Membantu Lurah di tingkat padukuhan Dawukan, melaksanakan urusan pemerintahan dan pelayanan kemasyarakatan di wilayah padukuhan.', nip:'–', edu:'SMA/SMK', since:'2020' },
  staf2:       { name:'Slamet Riyadi',           role:'Dukuh Karang',           desc:'Membantu Lurah di tingkat padukuhan Karang dalam pelaksanaan urusan pemerintahan dan kemasyarakatan.', nip:'–', edu:'SMA/SMK', since:'2018' },
  staf3:       { name:'Marsiyem',                role:'Dukuh Kadipolo',         desc:'Membantu Lurah di tingkat padukuhan Kadipolo dalam pelaksanaan urusan pemerintahan dan kemasyarakatan.', nip:'–', edu:'SMA/SMK', since:'2019' },
  staf4:       { name:'Sugeng Wahyudi',          role:'Dukuh Nayan',            desc:'Membantu Lurah di tingkat padukuhan Nayan dalam pelaksanaan urusan pemerintahan dan kemasyarakatan.', nip:'–', edu:'SMA/SMK', since:'2017' },
  staf5:       { name:'Tri Wibowo',              role:'Staf Administrasi',      desc:'Membantu operasional administrasi harian kantor kalurahan, meliputi surat masuk, surat keluar, dan pengelolaan arsip digital.', nip:'–', edu:'D3 Administrasi', since:'2021' },
};

// Fungsi untuk menampilkan panel detail informasi jabatan saat kartu di-klik
function tampilkanDetailAparatur(kunciJabatan) {
  // Mengambil objek data aparatur berdasarkan kunci jabatan yang dikirimkan
  const profilAparatur = dataAparaturOrganisasi[kunciJabatan]; 
  
  // Jika profil tidak ditemukan, batalkan eksekusi
  if (!profilAparatur) return;
  
  // Masukkan data nama, jabatan, deskripsi tugas, NIP, pendidikan, dan masa menjabat ke masing-masing elemen HTML
  document.getElementById('od-name').textContent  = profilAparatur.name;
  document.getElementById('od-role').textContent  = profilAparatur.role;
  document.getElementById('od-desc').textContent  = profilAparatur.desc;
  document.getElementById('od-nip').textContent   = profilAparatur.nip;
  document.getElementById('od-edu').textContent   = profilAparatur.edu;
  document.getElementById('od-since').textContent = profilAparatur.since;
  
  // Mengambil elemen panel detail
  const panelDetail = document.getElementById('org-detail');
  
  // Tambahkan kelas 'show' agar CSS menampilkan panel detail tersebut
  panelDetail.classList.add('show');
  
  // Buat efek scroll otomatis bergeser ke area panel detail agar terlihat langsung oleh pengguna
  setTimeout(() => panelDetail.scrollIntoView({ behavior: 'smooth', block: 'nearest' }), 50);
}

//Validasi data Termuat
console.log("Data struktur berhasil dimuat")
</script>
</body>
</html>