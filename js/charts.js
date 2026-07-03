/* ════════════════════════════════════════════════════════════════════════
   charts.js — Menggambar diagram statistik menggunakan pustaka Chart.js
   ════════════════════════════════════════════════════════════════════════ */

// Tunggu sampai browser selesai memuat seluruh struktur HTML halaman
document.addEventListener('DOMContentLoaded', () => {

  // Pastikan library Chart.js sudah dipanggil dan tersedia di halaman sebelum melanjutkan
  if (typeof Chart === 'undefined') return;

  // Atur konfigurasi font dan warna teks global default untuk semua bagan/diagram
  Chart.defaults.font.family = "'Plus Jakarta Sans', sans-serif"; // Menggunakan font Plus Jakarta Sans
  Chart.defaults.color = '#6b7a8d'; // Warna teks abu-abu redup agar terlihat elegan

  // Menentukan variabel warna utama desa agar penulisan kode lebih rapi dan konsisten
  const warnaBiruTua        = '#0f3460'; // Warna biru utama website
  const warnaBiruSedang     = '#1a5276'; // Warna biru transisi
  const warnaBiruTerang     = '#2e86c1'; // Warna biru cerah
  const warnaEmasKalurahan  = '#c9a84c'; // Warna emas aksen desa
  const warnaBiruMuda       = '#5dade2'; // Warna biru pastel muda
  const warnaBiruSangatMuda = '#85c1e9'; // Warna biru pastel terang

  // Gabungan warna di atas untuk digunakan pada diagram lingkaran (doughnut / pie)
  const paletWarnaBiru = [
    warnaBiruTua, 
    warnaBiruSedang, 
    warnaBiruTerang, 
    warnaBiruMuda, 
    warnaBiruSangatMuda, 
    '#aed6f1' // Warna biru sangat terang penutup
  ];
  
  // Warna garis grid/garis bantu tipis abu-abu di dalam diagram
  const warnaGarisBantu = 'rgba(0,0,0,0.05)';

  // Fungsi pembantu (helper) untuk mendapatkan konteks gambar 2D dari elemen canvas HTML
  function ambilKonteksGambar(idElemen) {
    const elemenCanvas = document.getElementById(idElemen); // Cari canvas berdasarkan ID
    // Jika canvas ditemukan, ambil konteks 2D-nya. Jika tidak ada, kembalikan nilai null.
    return elemenCanvas ? elemenCanvas.getContext('2d') : null;
  }


  // ══ DIAGRAM 1: SEBARAN USIA PENDUDUK (DIAGRAM BATANG / BAR CHART) ══
  
  // Ambil konteks gambar untuk canvas id 'chartUsia'
  const konteksBaganUsia = ambilKonteksGambar('chartUsia');
  // Jika elemen canvas diagram usia ditemukan di halaman
  if (konteksBaganUsia) {
    // Buat objek Chart baru untuk diagram batang
    new Chart(konteksBaganUsia, {
      type: 'bar', // Tipe diagram batang tegak
      data: {
        labels: ['0–5', '6–12', '13–17', '18–25', '26–40', '41–60', '61+'], // Label kelompok usia di sumbu X
        datasets: [
          {
            label: 'Laki-laki', // Keterangan data laki-laki
            data: [712, 893, 654, 1102, 1843, 1987, 1430], // Angka data jumlah penduduk laki-laki
            backgroundColor: 'rgba(15,52,96,0.8)', // Beri warna biru transparan
            borderRadius: 6, // Sudut batang agak melengkung
          },
          {
            label: 'Perempuan', // Keterangan data perempuan
            data: [680, 870, 628, 1050, 1790, 1920, 1523], // Angka data jumlah penduduk perempuan
            backgroundColor: 'rgba(201,168,76,0.85)', // Beri warna emas transparan
            borderRadius: 6, // Sudut batang agak melengkung
          }
        ]
      },
      options: {
        responsive: true, // Membuat ukuran diagram otomatis menyesuaikan ukuran layar (responsif)
        maintainAspectRatio: false, // Bebaskan rasio tinggi agar pas dengan container HTML-nya
        plugins: {
          legend: { 
            position: 'top', // Tampilkan label penunjuk data di posisi atas
            labels: { font: { size: 11 }, boxWidth: 12 } // Atur ukuran teks dan kotak warna penunjuk
          }
        },
        scales: {
          x: { 
            grid: { display: false }, // Sembunyikan garis bantu vertikal agar diagram terlihat bersih
            ticks: { font: { size: 10 } } // Ukuran tulisan label bawah
          },
          y: { 
            grid: { color: warnaGarisBantu }, // Tampilkan garis bantu horizontal tipis
            ticks: { font: { size: 10 } } // Ukuran tulisan label samping
          }
        }
      }
    });
  }


  // ══ DIAGRAM 2: TINGKAT PENDIDIKAN (DIAGRAM DONAT / DOUGHNUT CHART) ══
  
  // Ambil konteks gambar untuk canvas id 'chartPendidikan'
  const konteksBaganPendidikan = ambilKonteksGambar('chartPendidikan');
  // Jika elemen canvas tingkat pendidikan ditemukan
  if (konteksBaganPendidikan) {
    // Buat objek Chart baru untuk diagram lingkaran tipe donat
    new Chart(konteksBaganPendidikan, {
      type: 'doughnut', // Tipe lingkaran berlubang di tengah (donat)
      data: {
        labels: ['SD', 'SMP', 'SMA/SMK', 'D3/S1', 'S2/S3', 'Belum Sekolah'], // Kategori pendidikan
        datasets: [{
          data: [22, 18, 35, 17, 4, 4], // Data persentase masing-masing jenjang pendidikan
          backgroundColor: paletWarnaBiru, // Gunakan kombinasi warna biru yang telah dibuat
          borderWidth: 2, // Tebal garis pembatas antar potongan
          borderColor: '#f5f2eb', // Warna pembatas disamakan dengan warna background halaman (krem)
          hoverOffset: 6 // Jarak pergeseran keluar saat kursor menyorot potongan donat
        }]
      },
      options: {
        responsive: true, // Responsif mengikuti layar
        maintainAspectRatio: false, // Tinggi bebas mengikuti container
        cutout: '65%', // Besar lubang di tengah donat (65% dari diameter lingkaran)
        plugins: {
          legend: {
            position: 'right', // Posisikan label penunjuk di sebelah kanan diagram
            labels: { font: { size: 10 }, boxWidth: 12, padding: 10 } // Pengaturan style teks label
          },
          tooltip: {
            callbacks: { 
              // Menambahkan simbol persen '%' di bagian informasi detail (tooltip) saat disorot kursor
              label: konteksKembalian => ` ${konteksKembalian.label}: ${konteksKembalian.parsed}%` 
            }
          }
        }
      }
    });
  }


  // ══ DIAGRAM 3: TREN PERTUMBUHAN PENDUDUK (DIAGRAM GARIS / LINE CHART) ══
  
  // Ambil konteks gambar untuk canvas id 'chartTrend'
  const konteksBaganTren = ambilKonteksGambar('chartTrend');
  // Jika elemen canvas tren pertumbuhan ditemukan
  if (konteksBaganTren) {
    // Buat objek Chart baru untuk diagram garis
    new Chart(konteksBaganTren, {
      type: 'line', // Tipe grafik garis
      data: {
        labels: ['2019', '2020', '2021', '2022', '2023', '2024', '2025'], // Label sumbu waktu (tahun)
        datasets: [{
          label: 'Jumlah Penduduk',
          data: [15820, 16102, 16350, 16580, 16780, 16950, 17082], // Data pertumbuhan penduduk tahun ke tahun
          borderColor: warnaBiruTua, // Warna garis utama
          backgroundColor: 'rgba(15,52,96,0.07)', // Warna bayangan transparan di bawah garis grafik
          borderWidth: 3, // Tebal garis grafik
          pointRadius: 5, // Ukuran titik-titik data pada garis
          pointBackgroundColor: warnaEmasKalurahan, // Warna dalam titik-titik data
          pointBorderColor: warnaBiruTua, // Warna pinggiran lingkaran titik data
          pointBorderWidth: 2, // Tebal pinggiran titik data
          tension: 0.4, // Tingkat kelengkungan belokan garis grafik (0.4 membuat belokan lebih melengkung halus)
          fill: true // Aktifkan pengisian warna background di bawah garis
        }]
      },
      options: {
        responsive: true, // Mendukung tata letak responsif
        maintainAspectRatio: false, // Tinggi grafik fleksibel
        plugins: { legend: { display: false } }, // Sembunyikan label penunjuk data karena hanya ada satu data tunggal
        scales: {
          x: { 
            grid: { display: false }, // Sembunyikan garis bantu vertikal
            ticks: { font: { size: 11 } } // Ukuran teks label tahun
          },
          y: {
            grid: { color: warnaGarisBantu }, // Tampilkan garis bantu horizontal tipis
            ticks: { 
              font: { size: 11 },
              // Ubah format angka biasa menjadi format angka ribuan dengan titik (contoh: 15.000)
              callback: nilaiAngka => nilaiAngka.toLocaleString('id') 
            },
            min: 15000 // Batas bawah sumbu Y dimulai dari angka 15.000 agar grafik fluktuasi terlihat jelas
          }
        }
      }
    });
  }


  // ══ DIAGRAM 4: MATA PENCAHARIAN UTAMA (DIAGRAM BATANG HORIZONTAL / HORIZONTAL BAR CHART) ══
  
  // Ambil konteks gambar untuk canvas id 'chartPekerjaan'
  const konteksBaganPekerjaan = ambilKonteksGambar('chartPekerjaan');
  // Jika elemen canvas pekerjaan ditemukan
  if (konteksBaganPekerjaan) {
    // Buat objek Chart baru untuk diagram batang horizontal
    new Chart(konteksBaganPekerjaan, {
      type: 'bar', // Tetap menggunakan tipe 'bar'
      data: {
        labels: ['Pertanian', 'Perdagangan', 'Industri', 'PNS/TNI', 'Buruh', 'Lainnya'], // Daftar pekerjaan
        datasets: [{
          data: [1820, 2340, 1650, 980, 2100, 1430], // Jumlah warga per mata pencaharian
          backgroundColor: paletWarnaBiru, // Terapkan kombinasi warna biru
          borderRadius: 8, // Sudut batang melengkung lembut
          borderSkipped: false // Lengkungkan semua sisi batang tanpa terkecuali
        }]
      },
      options: {
        indexAxis: 'y', // Memutar sumbu agar diagram batang memanjang ke kanan (horizontal) bukan ke atas
        responsive: true, // Responsif terhadap layar
        maintainAspectRatio: false, // Tinggi fleksibel mengikuti container HTML
        plugins: { legend: { display: false } }, // Sembunyikan label atas
        scales: {
          x: { 
            grid: { color: warnaGarisBantu }, // Tampilkan garis bantu vertikal tipis
            ticks: { font: { size: 10 } }
          },
          y: { 
            grid: { display: false }, // Sembunyikan garis bantu horizontal
            ticks: { font: { size: 10 } }
          }
        }
      }
    });
  }


  // ══ DIAGRAM 5: KOMPOSISI AGAMA (DIAGRAM LINGKARAN / PIE CHART) ══
  
  // Ambil konteks gambar untuk canvas id 'chartAgama'
  const konteksBaganAgama = ambilKonteksGambar('chartAgama');
  // Jika elemen canvas data agama ditemukan
  if (konteksBaganAgama) {
    // Buat objek Chart baru untuk diagram lingkaran utuh
    new Chart(konteksBaganAgama, {
      type: 'pie', // Tipe diagram lingkaran utuh (pie chart)
      data: {
        labels: ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha'], // Agama di Indonesia
        datasets: [{
          data: [89.2, 5.8, 3.2, 1.1, 0.7], // Persentase penganut agama di Sendangtirto
          backgroundColor: [
            warnaBiruTua, 
            warnaBiruTerang, 
            warnaEmasKalurahan, 
            warnaBiruMuda, 
            warnaBiruSangatMuda
          ], // Warna khusus untuk masing-masing agama
          borderWidth: 2, // Garis pembatas antar potongan
          borderColor: '#f5f2eb', // Warna garis pembatas krem agar sesuai latar
          hoverOffset: 6 // Efek lompat sedikit saat kursor menyorot potongan
        }]
      },
      options: {
        responsive: true, // Responsif terhadap layar
        maintainAspectRatio: false, // Tinggi grafik mengikuti container
        plugins: {
          legend: {
            position: 'right', // Tampilkan daftar legenda di sisi kanan
            labels: { font: { size: 10 }, boxWidth: 12, padding: 8 }
          },
          tooltip: {
            callbacks: { 
              // Menambahkan simbol persen '%' di bagian informasi detail (tooltip) saat disorot kursor
              label: konteksKembalian => ` ${konteksKembalian.label}: ${konteksKembalian.parsed}%` 
            }
          }
        }
      }
    });
  }

});
