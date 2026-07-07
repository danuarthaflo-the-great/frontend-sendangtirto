/* 
  bikin statistik pake library Chart.js
 */

// biar nunggu browsernya load dulu baru jalan
document.addEventListener('DOMContentLoaded', () => {
  // bikin validasi chart js nya termuat engga
  if (typeof Chart === 'undefined') return;
  // konfig style dari bawaah chart js
  Chart.defaults.font.family = "'Plus Jakarta Sans', sans-serif";
  Chart.defaults.color = '#6b7a8d';

  // bikin penampung warna biar sama kayak web e
  const warnaBiruTua        = '#0f3460';
  const warnaBiruSedang     = '#1a5276';
  const warnaBiruTerang     = '#2e86c1';
  const warnaEmasKalurahan  = '#c9a84c';
  const warnaBiruMuda       = '#5dade2';
  const warnaBiruSangatMuda = '#85c1e9';

  // di jadiin satu pakai aray
  const paletWarnaBiru = [
    warnaBiruTua, 
    warnaBiruSedang, 
    warnaBiruTerang, 
    warnaBiruMuda, 
    warnaBiruSangatMuda, 
    '#aed6f1'
  ];
  // garis bantu dibelakang chart
  const warnaGarisBantu = 'rgba(0,0,0,0.05)';

  // herper , ambil dr html kalau ketemu ambil context 2d nya terus dibalikin lagi biar chart bisa diimplementasikan
  function ambilKonteksGambar(idElemen) {
    const elemenCanvas = document.getElementById(idElemen);
    return elemenCanvas ? elemenCanvas.getContext('2d') : null;
  }

  //chart sebaran usia
  
  // ambil kanvas id nya
  const konteksBaganUsia = ambilKonteksGambar('chartUsia');
  if (konteksBaganUsia) {
    // bikin objek baru buat diagram
    new Chart(konteksBaganUsia, {
      type: 'bar', // definisiin jenis, kita pake bar
      data: {
        labels: ['0–5', '6–12', '13–17', '18–25', '26–40', '41–60', '61+'], // label kelompok dia di sumbu x
        datasets: [
          {
            label: 'Laki-laki',
            data: [712, 893, 654, 1102, 1843, 1987, 1430], // angka data
            backgroundColor: 'rgba(15,52,96,0.8)',
            borderRadius: 6,
          },
          {
            label: 'Perempuan',
            data: [680, 870, 628, 1050, 1790, 1920, 1523],
            backgroundColor: 'rgba(201,168,76,0.85)',
            borderRadius: 6,
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false, // biar rasio ngikut ukuran canvas di html
        plugins: {
          legend: { 
            position: 'top', // label penunjuk data
            labels: { font: { size: 11 }, boxWidth: 12 } // size bubble
          }
        },
        scales: {
          x: { 
            grid: { display: false }, // hide gris bantu
            ticks: { font: { size: 10 } } // ukuran label bawah
          },
          y: { 
            grid: { color: warnaGarisBantu },
            ticks: { font: { size: 10 } } // ukuran label samping
          }
        }
      }
    });
  }


  // diagram tingkat pendidikan
  const konteksBaganPendidikan = ambilKonteksGambar('chartPendidikan');
  if (konteksBaganPendidikan) {

    new Chart(konteksBaganPendidikan, {
      type: 'doughnut', // definisiin tipe donat
      data: {
        labels: ['SD', 'SMP', 'SMA/SMK', 'D3/S1', 'S2/S3', 'Belum Sekolah'], // kategori pendidikan
        datasets: [{
          data: [22, 18, 35, 17, 4, 4], // data persentase masing-masing jenjang pendidikan
          backgroundColor: paletWarnaBiru,
          borderWidth: 2,
          borderColor: '#f5f2eb', // warna pembatas disamakan dengan warna background halaman 
          hoverOffset: 6 // Jarak pergeseran keluar saat kursor menyorot potongan donat
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        cutout: '65%', // size lubang di tengah donat
        plugins: {
          legend: {
            position: 'right', // label dikanan chart
            labels: { font: { size: 10 }, boxWidth: 12, padding: 10 } // set text style
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


  // diagram trent pertumbuhan penduduk
  const konteksBaganTren = ambilKonteksGambar('chartTrend');
  if (konteksBaganTren) {
    new Chart(konteksBaganTren, {
      type: 'line', // definisiin tipe line
      data: {
        labels: ['2019', '2020', '2021', '2022', '2023', '2024', '2025'], // label sumbu waktu
        datasets: [{
          label: 'Jumlah Penduduk',
          data: [15820, 16102, 16350, 16580, 16780, 16950, 17082], // data pertumbuhan penduduk tahun ke tahun
          borderColor: warnaBiruTua,
          backgroundColor: 'rgba(15,52,96,0.07)',
          borderWidth: 3,
          pointRadius: 5,
          pointBackgroundColor: warnaEmasKalurahan,
          pointBorderColor: warnaBiruTua,
          pointBorderWidth: 2,
          tension: 0.4, // tingkat kelengkungan belokan garis grafik
          fill: true 
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } }, // sembunyikan label karena cuma ada satu data tunggal
        scales: {
          x: { 
            grid: { display: false },
            ticks: { font: { size: 11 } }
          },
          y: {
            grid: { color: warnaGarisBantu },
            ticks: { 
              font: { size: 11 },
              // bikin format angka biasa jadi format angka ribuan dengan titik
              callback: nilaiAngka => nilaiAngka.toLocaleString('id') 
            },
            min: 15000
          }
        }
      }
    });
  }


  // diagram kerjaan
  const konteksBaganPekerjaan = ambilKonteksGambar('chartPekerjaan');
  if (konteksBaganPekerjaan) {
    new Chart(konteksBaganPekerjaan, {
      type: 'bar', // definisiin pake bar
      data: {
        labels: ['Pertanian', 'Perdagangan', 'Industri', 'PNS/TNI', 'Buruh', 'Lainnya'], // daftar pekerjaan
        datasets: [{
          data: [1820, 2340, 1650, 980, 2100, 1430], // jumlah warga per mata pencaharian
          backgroundColor: paletWarnaBiru,
          borderRadius: 8,
          borderSkipped: false
        }]
      },
      options: {
        indexAxis: 'y', // rubah arah bar nya biar miring, atau di rotate kalau objek din mulmed
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: {
          x: { 
            grid: { color: warnaGarisBantu },
            ticks: { font: { size: 10 } }
          },
          y: { 
            grid: { display: false },
            ticks: { font: { size: 10 } }
          }
        }
      }
    });
  }


  // diagram komposisi agama
  const konteksBaganAgama = ambilKonteksGambar('chartAgama');
  if (konteksBaganAgama) {
    new Chart(konteksBaganAgama, {
      type: 'pie', // definisiin tipe pie
      data: {
        labels: ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha'], // data kelompok agama
        datasets: [{
          data: [89.2, 5.8, 3.2, 1.1, 0.7], // persentase penganut agama di sendangtirto
          backgroundColor: [
            warnaBiruTua, 
            warnaBiruTerang, 
            warnaEmasKalurahan, 
            warnaBiruMuda, 
            warnaBiruSangatMuda
          ],
          borderWidth: 2,
          borderColor: '#f5f2eb',
          hoverOffset: 6
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            position: 'right', // tampilkan daftar legend di kanan
            labels: { font: { size: 10 }, boxWidth: 12, padding: 8 }
          },
          tooltip: {
            callbacks: { 
              // kasih '%' di bagian informasi detail
              label: konteksKembalian => ` ${konteksKembalian.label}: ${konteksKembalian.parsed}%` 
            }
          }
        }
      }
    });
  }

});
