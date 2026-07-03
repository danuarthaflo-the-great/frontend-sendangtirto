<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <title>Berita & Kegiatan – Kalurahan Sendangtirto</title>
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
// Variabel global untuk menyimpan status aktif pencarian, kategori, dan halaman
let kategoriAktif = "semua";
let halamanAktif = 1;
const jumlahItemPerHalaman = 6;

// Fungsi utama untuk menyaring data berita dan mengelola paginasi secara dinamis
function perbaruiTampilanBerita() {
  // Ambil nilai kata kunci dari kolom input pencarian secara realtime
  const kataKunciCari = document.getElementById('searchInput').value.toLowerCase().trim();
  // Ambil semua elemen kartu berita di dalam grid berita
  const kumpulanKartu = document.querySelectorAll('#beritaGrid .blist-card');
  
  // Array untuk menyimpan kartu-kartu berita yang cocok dengan kriteria filter dan pencarian
  const kartuCocok = [];

  // Lakukan perulangan untuk mengecek kecocokan kategori dan kata kunci pada setiap kartu
  kumpulanKartu.forEach(kartu => {
    // Cek kecocokan kategori kartu dengan kategori aktif yang dipilih pengguna
    const apakahKategoriCocok = kategoriAktif === "semua" || kartu.dataset.kategori === kategoriAktif;
    // Ambil isi teks dari kartu berita untuk dicocokkan dengan kata kunci pencarian
    const isiTeksKartu = kartu.textContent.toLowerCase();
    // Cek apakah isi teks kartu mengandung kata kunci pencarian yang dimasukkan pengguna
    const apakahKataKunciCocok = !kataKunciCari || isiTeksKartu.includes(kataKunciCari);

    // Jika kartu memenuhi kedua kriteria saringan tersebut
    if (apakahKategoriCocok && apakahKataKunciCocok) {
      // Masukkan kartu yang cocok ke dalam array penampung
      kartuCocok.push(kartu);
    } else {
      // Jika tidak cocok, langsung sembunyikan kartu tersebut dari layar
      kartu.style.display = "none";
    }
  });

  // Hitung total halaman yang dibutuhkan berdasarkan jumlah kartu yang cocok dibagi jumlah item per halaman
  const totalHalaman = Math.ceil(kartuCocok.length / jumlahItemPerHalaman);

  // Jika halaman aktif yang saat ini dipilih melebihi total halaman yang tersedia
  if (halamanAktif > totalHalaman) {
    // Reset halaman aktif kembali ke halaman pertama
    halamanAktif = 1;
  }

  // Tentukan indeks awal dan indeks akhir kartu yang akan ditampilkan di halaman saat ini
  const indeksAwal = (halamanAktif - 1) * jumlahItemPerHalaman;
  const indeksAkhir = halamanAktif * jumlahItemPerHalaman;

  // Lakukan perulangan pada kartu-kartu yang cocok untuk menampilkan kartu sesuai halaman aktif
  kartuCocok.forEach((kartu, indeks) => {
    // Jika indeks kartu berada dalam rentang indeks halaman aktif saat ini
    if (indeks >= indeksAwal && indeks < indeksAkhir) {
      // Tampilkan kartu berita tersebut
      kartu.style.display = "";
    } else {
      // Sembunyikan kartu berita yang berada di luar halaman aktif
      kartu.style.display = "none";
    }
  });

  // Tampilkan atau sembunyikan pesan "Tidak ada berita" berdasarkan ada tidaknya kartu yang cocok
  document.getElementById('noResult').style.display = kartuCocok.length === 0 ? "block" : "none";

  // Perbarui tombol-tombol paginasi di layar secara dinamis
  buatTombolPaginasi(totalHalaman);
}

// Fungsi untuk membuat tombol-tombol halaman (paginasi) secara dinamis
function buatTombolPaginasi(totalHalaman) {
  // Ambil elemen wadah tombol paginasi dari HTML
  const wadahPaginasi = document.querySelector('.pagination');
  // Bersihkan seluruh tombol halaman lama di dalam wadah
  wadahPaginasi.innerHTML = "";

  // Jika total halaman hanya 1 atau kurang dari itu, sembunyikan atau tidak perlu tampilkan tombol paginasi
  if (totalHalaman <= 1) {
    // Hentikan fungsi karena paginasi tidak diperlukan
    return;
  }

  // Lakukan perulangan sebanyak total halaman untuk menggambar tombol angka
  for (let i = 1; i <= totalHalaman; i++) {
    // Buat elemen tombol baru di memori
    const tombolHalaman = document.createElement('button');
    // Berikan kelas CSS '.page-btn' pada tombol tersebut
    tombolHalaman.className = "page-btn";
    // Tulis angka halaman di dalam tombol
    tombolHalaman.textContent = i;

    // Jika angka tombol sama dengan halaman aktif saat ini
    if (i === halamanAktif) {
      // Tambahkan kelas '.active' agar tombol memiliki tampilan aktif/berwarna
      tombolHalaman.classList.add('active');
    }

    // Daftarkan aksi klik pada tombol halaman baru tersebut
    tombolHalaman.addEventListener('click', () => {
      // Ubah status halaman aktif ke halaman yang di-klik
      halamanAktif = i;
      // Perbarui tampilan berita sesuai dengan halaman baru
      perbaruiTampilanBerita();
      // Gulirkan layar ke atas area daftar berita secara halus agar perubahan halaman langsung terlihat
      document.getElementById('filterTabs').scrollIntoView({ behavior: 'smooth', block: 'start' });
    });

    // Masukkan tombol halaman baru ke dalam wadah paginasi di HTML
    wadahPaginasi.appendChild(tombolHalaman);
  }
}

// Fungsi pembungkus (wrapper) untuk menyaring kategori berita saat tab kategori di-klik
function saringKategoriBerita(kategoriPilihan, tombolPilihan) {
  // Ambil semua tombol kategori tab filter
  document.querySelectorAll('.filter-tab').forEach(tombolTab => {
    // Hapus kelas 'active' dari semua tab kategori
    tombolTab.classList.remove('active');
  });
  // Tambahkan kelas 'active' ke tombol kategori yang baru saja di-klik
  tombolPilihan.classList.add('active');
  
  // Ubah status kategori aktif sesuai pilihan pengguna
  kategoriAktif = kategoriPilihan;
  // Reset halaman aktif ke halaman 1 setiap kali kategori diubah
  halamanAktif = 1;
  // Jalankan fungsi utama perbaruan tampilan berita
  perbaruiTampilanBerita();
}

// Fungsi pembungkus (wrapper) untuk pencarian berita saat tombol cari di-klik
function lakukanPencarianBerita() {
  // Reset halaman aktif ke halaman 1 setiap kali melakukan pencarian baru
  halamanAktif = 1;
  // Jalankan fungsi utama perbaruan tampilan berita
  perbaruiTampilanBerita();
}

// Menambahkan event listener keyboard pada input pencarian
document.getElementById('searchInput').addEventListener('keydown', e => {
  // Jika tombol yang ditekan oleh pengguna adalah tombol Enter
  if (e.key === 'Enter') {
    // Jalankan fungsi pencarian berita
    lakukanPencarianBerita();
  }
});

// Jalankan perbaruan tampilan berita untuk pertama kali saat halaman selesai dimuat browser
document.addEventListener('DOMContentLoaded', () => {
  // Panggil fungsi utama perbaruan tampilan berita
  perbaruiTampilanBerita();
});
</script>
</body>
</html>