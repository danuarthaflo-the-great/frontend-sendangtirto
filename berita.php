<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <title>Berita & Kegiatan – Kalurahan Sendangtirto</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
  <link rel="stylesheet" href="css/main.css"/>
  <link rel="stylesheet" href="css/navbar.css"/>
  <link rel="stylesheet" href="css/components.css"/>
</head>
<body>

<?php include '_navbar-snippet.php'; ?>

<div class="page-content">

  <div class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="hero-anim">
      <span class="stag" style="color:var(--emas-light)"><i class="fa-solid fa-newspaper"></i> Informasi Terkini</span>
      <h1>Berita & Kegiatan</h1>
      <p>Ikuti perkembangan kegiatan, program, dan informasi terbaru dari Kalurahan Sendangtirto.</p>
    </div>
  </div>

  <section style="background:var(--krem)">
    <div class="breadcrumb fu">
      <a href="index.php">Beranda</a><span>›</span><span>Berita & Kegiatan</span>
    </div>

    <div class="search-box fu">
      <input type="text" id="searchInput" placeholder="🔍 Cari berita..."/>
      <button onclick="lakukanPencarianBerita()">Cari</button>
    </div>

    <div class="filter-tabs fu" id="filterTabs">
      <button class="filter-tab active" onclick="saringKategoriBerita('semua', this)">Semua</button>
      <button class="filter-tab" onclick="saringKategoriBerita('sosial', this)">Sosial</button>
      <button class="filter-tab" onclick="saringKategoriBerita('pemerintahan', this)">Pemerintahan</button>
      <button class="filter-tab" onclick="saringKategoriBerita('kesehatan', this)">Kesehatan</button>
      <button class="filter-tab" onclick="saringKategoriBerita('keagamaan', this)">Keagamaan</button>
      <button class="filter-tab" onclick="saringKategoriBerita('pkk', this)">PKK</button>
      <button class="filter-tab" onclick="saringKategoriBerita('keamanan', this)">Keamanan</button>
    </div>

    <div class="berita-list-grid auto-stagger" id="beritaGrid">

      <div class="blist-card fu" data-kategori="pemerintahan">
        <div class="blist-thumb"><img src="img/thum-Jempol Bapak Dekatkan Warga Padukuhan Kadipolo dan Sribit Bayar Pajak PBB.png" alt="Jempol Bapak"></div>
        <div class="blist-body">
          <span class="badge badge-light">Pelayanan Warga</span>
          <h3>Jempol Bapak: Dekatkan Warga Padukuhan Kadipolo dan Sribit Bayar Pajak PBB</h3>
          <p>Pemerintah Kalurahan Sendangtirto menyelenggarakan program Jempol Bapak di Padukuhan Kadipolo dan Sribit, memudahkan warga membayar PBB.</p>
          <div class="blist-meta">
            <span><i class="fa-solid fa-calendar-days"></i> 21 April 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="sosial">
        <div class="blist-thumb"><img src="img/thum-Penyaluran BLT-DD untuk 52 Keluarga Penerima Manfaat di Gedung Serbaguna.png" alt="BLT-DD"></div>
        <div class="blist-body">
          <span class="badge badge-light">Sosial</span>
          <h3>Penyaluran BLT-DD untuk 52 Keluarga Penerima Manfaat di Gedung Serbaguna</h3>
          <p>Kalurahan Sendangtirto menyalurkan Bantuan Langsung Tunai Dana Desa kepada 52 KPM dengan total Rp900.000 per keluarga.</p>
          <div class="blist-meta">
            <span><i class="fa-solid fa-calendar-days"></i> 31 Maret 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="keagamaan">
        <div class="blist-thumb"><img src="img/thum-Pengajian Jumat Pagi Dirangkai Syawalan dan Pamitan Calon Jamaah Haji.png" alt="Pengajian"></div>
        <div class="blist-body">
          <span class="badge badge-light">Keagamaan</span>
          <h3>Pengajian Jumat Pagi Dirangkai Syawalan dan Pamitan Calon Jamaah Haji</h3>
          <p>Pengajian rutin di Balai Kalurahan kali ini dirangkai dengan syawalan bersama pamong dan pamitan jamaah haji yang akan berangkat.</p>
          <div class="blist-meta">
            <span><i class="fa-solid fa-calendar-days"></i> 3 April 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="pemerintahan">
        <div class="blist-thumb"><img src="img/thum-Lurah dan Pamong Ikuti Mangayubagya 80 Tahun Yuswa Sri Sultan HB X.png" alt="Mangayubagya"></div>
        <div class="blist-body">
          <span class="badge badge-light">Pemerintahan</span>
          <h3>Lurah dan Pamong Ikuti Mangayubagya 80 Tahun Yuswa Sri Sultan HB X</h3>
          <p>Lurah dan seluruh pamong Kalurahan Sendangtirto turut berpartisipasi dalam rangkaian peringatan 80 tahun usia Sri Sultan HB X.</p>
          <div class="blist-meta">
            <span><i class="fa-solid fa-calendar-days"></i> 2 April 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="pkk">
        <div class="blist-thumb"><img src="img/thum-Pokja II TP PKK Kalurahan Ikuti Pembinaan Administrasi PKK Kapanewon Berbah.png" alt="Pembinaan PKK"></div>
        <div class="blist-body">
          <span class="badge badge-light">PKK</span>
          <h3>Pokja II TP PKK Kalurahan Ikuti Pembinaan Administrasi PKK Kapanewon Berbah</h3>
          <p>Pembinaan administrasi PKK diikuti perwakilan Pokja II dari seluruh kalurahan di wilayah Kapanewon Berbah.</p>
          <div class="blist-meta">
            <span><i class="fa-solid fa-calendar-days"></i> 22 April 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="keamanan">
        <div class="blist-thumb"><img src="img/thum-Pembinaan Satlinmas 2025 Digelar di Balai Kalurahan Sendangtirto.png" alt="Satlinmas"></div>
        <div class="blist-body">
          <span class="badge badge-light">Keamanan</span>
          <h3>Pembinaan Satlinmas 2025 Digelar di Balai Kalurahan Sendangtirto</h3>
          <p>Satuan Perlindungan Masyarakat (Satlinmas) Kalurahan Sendangtirto mengikuti pembinaan rutin tahunan untuk meningkatkan kapasitas personel.</p>
          <div class="blist-meta">
            <span><i class="fa-solid fa-calendar-days"></i> 15 Maret 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="kesehatan">
        <div class="blist-thumb"><img src="img/thum-Posyandu Kalurahan Catat Rekor Kunjungan Balita di Bulan April.png" alt="Posyandu"></div>
        <div class="blist-body">
          <span class="badge badge-light">Kesehatan</span>
          <h3>Posyandu Kalurahan Catat Rekor Kunjungan Balita di Bulan April</h3>
          <p>Antusiasme warga terhadap program posyandu meningkat signifikan, dengan jumlah kunjungan balita terbanyak sepanjang sejarah kalurahan.</p>
          <div class="blist-meta">
            <span><i class="fa-solid fa-calendar-days"></i> 10 Maret 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="sosial">
        <div class="blist-thumb"><img src="img/thum-Kalurahan dan Lanud Adisutjipto Tinjau Batas Lahan Masjid Sulthoni Wotgaleh.png" alt="Masjid Wotgaleh"></div>
        <div class="blist-body">
          <span class="badge badge-light">Sosial</span>
          <h3>Kalurahan dan Lanud Adisutjipto Tinjau Batas Lahan Masjid Sulthoni Wotgaleh</h3>
          <p>Peninjauan bersama antara pihak kalurahan dan Lanud Adisutjipto dilakukan untuk memperjelas batas lahan Masjid Sulthoni dan Makam Wotgaleh.</p>
          <div class="blist-meta">
            <span><i class="fa-solid fa-calendar-days"></i> 5 Maret 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="pemerintahan">
        <div class="blist-thumb"><img src="img/thum-Sosialisasi Administrasi Kependudukan di Kapanewon Berbah.png" alt="Sosialisasi Adminduk"></div>
        <div class="blist-body">
          <span class="badge badge-light">Adminduk</span>
          <h3>Sosialisasi Administrasi Kependudukan di Kapanewon Berbah</h3>
          <p>Kapanewon Berbah menggelar sosialisasi mengenai Administrasi Kependudukan dan Pencatatan Akta Kematian bagi seluruh pamong.</p>
          <div class="blist-meta">
            <span><i class="fa-solid fa-calendar-days"></i> 24 Feb 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

    </div><div id="noResult" style="display:none;text-align:center;padding:48px 0;color:var(--muted)">
      <div style="font-size:48px;margin-bottom:12px"><i class="fa-solid fa-magnifying-glass"></i></div>
      <p>Tidak ada berita yang sesuai pencarian.</p>
    </div>

    <div class="pagination fu"></div>
  </section>

</div>

<?php include '_footer-snippet.php'; ?>

<script src="js/navbar.js"></script>
<script src="js/animations.js"></script>
<script>
let kategoriAktif = "semua";
let halamanAktif = 1;
const jumlahItemPerHalaman = 6;

// buat nyaring data berita sama bikin indeks
function perbaruiTampilanBerita() {
  const kataKunciCari = document.getElementById('searchInput').value.toLowerCase().trim(); // ambil input
  const kumpulanKartu = document.querySelectorAll('#beritaGrid .blist-card'); // ambil card berita dari grid
  
  const kartuCocok = []; // buat naruh card berita yang udah difilter, makane nilai di kosongi

  kumpulanKartu.forEach(kartu => {
    // nyocokin card kategori sama kategori aktif
    const apakahKategoriCocok = kategoriAktif === "semua" || kartu.dataset.kategori === kategoriAktif;
    const isiTeksKartu = kartu.textContent.toLowerCase(); // ambil isi teks dari card berita untuk dicocokkin dengan pencarian
    
    const apakahKataKunciCocok = !kataKunciCari || isiTeksKartu.includes(kataKunciCari); // cek misal isi teks card ada kata kunci pencarian yang dimasukkan pengguna
    
    if (apakahKategoriCocok && apakahKataKunciCocok) {
      kartuCocok.push(kartu); // card ditmpung ke array
    } else {
      kartu.style.display = "none";
    }
  });

  // hitung card berdasarkan card dibagi jumlah item per halaman
  const totalHalaman = Math.ceil(kartuCocok.length / jumlahItemPerHalaman);
  if (halamanAktif > totalHalaman) {
    halamanAktif = 1;
  }

  const indeksAwal = (halamanAktif - 1) * jumlahItemPerHalaman;
  const indeksAkhir = halamanAktif * jumlahItemPerHalaman;

  // buat ngencek card yang udah difilter dan mau ditampilin
  kartuCocok.forEach((kartu, indeks) => {
    // Jika indeks kartu berada dalam rentang indeks halaman aktif saat ini
    if (indeks >= indeksAwal && indeks < indeksAkhir) {
      kartu.style.display = ""; // kalau benar atau kondisi dia true yo di tampilin dalam display
    } else {
      kartu.style.display = "none"; // nek engga disembuyiin
    }
  });
  // buat ngecek panjang indek 0 atau engga jika iya atau true maka akan block dan noResult tampil kalau engga ya ngga tampil
  document.getElementById('noResult').style.display = kartuCocok.length === 0 ? "block" : "none";

  // panggil fungsi buat tombol sama kasil var totalhalaman ke fungsi tsb
  buatTombolPaginasi(totalHalaman);
}

function buatTombolPaginasi(totalHalaman) {
  const wadahPaginasi = document.querySelector('.pagination'); // ambil elemen wadah pagination dari HTML
  wadahPaginasi.innerHTML = ""; // bersihin pagination di html nya

  // jika total halaman kurang dari 1 atau muk 1 maka ngga ditampilin
  if (totalHalaman <= 1) {
    return; // tak tambah return biar ga muncul, gapenting hehe
  }

  // bikin loop kalau lolos validasi diatas atau indek/halaman lebih dari 1 / totalhalaman 2 atau lebih
  for (let i = 1; i <= totalHalaman; i++) {
    const tombolHalaman = document.createElement('button'); // buat tombol baru
    tombolHalaman.className = "page-btn";
    
    tombolHalaman.textContent = i; // injek angka halaman pada tombol sesuai dengan i= , misal e nilai i=2 ya angka button e 2

    // validasi tombol aktif sesuai halaman
    if (i === halamanAktif) {
      tombolHalaman.classList.add('active');
    }

    // bikin event ketika tombol di klik
    tombolHalaman.addEventListener('click', () => {
      halamanAktif = i; // ubah halaman aktif menjadi i saat diklik
      perbaruiTampilanBerita();
      document.getElementById('filterTabs').scrollIntoView({ behavior: 'smooth', block: 'start' });
    });

    
    wadahPaginasi.appendChild(tombolHalaman); // injek tombol baru ke html
  }
}

function saringKategoriBerita(kategoriPilihan, tombolPilihan) {
  document.querySelectorAll('.filter-tab').forEach(tombolTab => {
    tombolTab.classList.remove('active');
  });
  tombolPilihan.classList.add('active'); // tambah css active buat tombol yang di klik
  
  kategoriAktif = kategoriPilihan; // bikin supaya kategori yang aktif nilai nya sama kayak kategori yang dipilih
  halamanAktif = 1;
  perbaruiTampilanBerita();
}

function lakukanPencarianBerita() {
  halamanAktif = 1;
  perbaruiTampilanBerita();
}

// nambahin event pada input pencarian
document.getElementById('searchInput').addEventListener('keydown', e => {
  if (e.key === 'Enter') {
    lakukanPencarianBerita();
  }
});

// Jalankan perbaruan tampilan berita untuk pertama kali saat halaman selesai dimuat browser
document.addEventListener('DOMContentLoaded', () => {
  perbaruiTampilanBerita();
});
</script>
</body>
</html>