/* ════════════════════════════════════════════════════════════════════════
   animations.js — Mengatur animasi efek muncul (reveal) dan hitungan angka
   ════════════════════════════════════════════════════════════════════════ */

// Tunggu sampai seluruh konten HTML selesai dimuat oleh browser
document.addEventListener('DOMContentLoaded', () => {

  // ── BAGIAN 1: ANIMASI MUNCUL PERLAHAN SAAT DI-SCROLL (SCROLL REVEAL) ──
  
  // Mencari semua elemen HTML yang memiliki class '.fu' (singkatan dari Fade Up/Muncul ke Atas)
  const semuaElemenMunculPerlahan = document.querySelectorAll('.fu');

  // Jika terdapat elemen dengan class '.fu' di halaman saat ini
  if (semuaElemenMunculPerlahan.length > 0) {
    // Membuat sebuah 'pengawas' khusus (IntersectionObserver) untuk mendeteksi elemen saat muncul di layar
    const pengawasMunculanElemen = new IntersectionObserver((daftarDeteksi) => {
      // Periksa satu per satu elemen yang sedang diawasi
      daftarDeteksi.forEach(hasilDeteksi => {
        // Jika elemen tersebut sudah mulai terlihat di layar browser (minimal 10% bagian elemen terlihat)
        if (hasilDeteksi.isIntersecting) {
          // Tambahkan class '.vis' (visible) agar CSS menjalankan animasi munculnya
          hasilDeteksi.target.classList.add('vis');
          // Hentikan pengawasan pada elemen ini agar animasi hanya terjadi satu kali saja saat di-scroll
          pengawasMunculanElemen.unobserve(hasilDeteksi.target);
        }
      });
    }, { threshold: 0.1 }); // Batas sensitivitas deteksi: 0.1 berarti elemen terdeteksi jika 10% areanya masuk layar

    // Aktifkan pengawasan ke semua elemen '.fu' yang sudah ditemukan
    semuaElemenMunculPerlahan.forEach(elemen => pengawasMunculanElemen.observe(elemen));
  }


  // ── BAGIAN 2: ANIMASI ANGKA STATISTIK MENINGKAT (COUNTER ANIMATION) ──
  
  // Fungsi utama untuk menggerakkan angka dari 0 menuju target secara bertahap
  function jalankanAnimasiHitungAngka(elemenTujuan) {
    // Ambil angka target akhir dari atribut HTML 'data-target' (contoh: 17082)
    const angkaTarget = parseFloat(elemenTujuan.dataset.target);
    // Cek apakah angka tersebut bertipe desimal/koma dari atribut 'data-float'
    const apakahAngkaDesimal = elemenTujuan.dataset.float === 'true';
    // Ambil akhiran teks jika ada (misal: simbol persen '%' atau rupiah 'Rp') dari atribut 'data-suffix'
    const akhiranTeks = elemenTujuan.dataset.suffix || '';
    
    const durasiAnimasi = 1800; // Durasi total animasi berlangsung dalam milidetik (1.8 detik)
    const jumlahLangkah = durasiAnimasi / 16; // Setiap langkah berdurasi 16 milidetik (setara 60 FPS)
    const nilaiPenambahan = angkaTarget / jumlahLangkah; // Nilai pertambahan angka di setiap langkahnya
    let angkaSaatIni = 0; // Mulai hitungan angka dari 0

    // Set interval pengatur waktu untuk memperbarui angka setiap 16 milidetik
    const pengaturWaktuInterval = setInterval(() => {
      // Tambahkan angka secara bertahap, tapi pastikan tidak melebihi angka target akhir
      angkaSaatIni = Math.min(angkaSaatIni + nilaiPenambahan, angkaTarget);

      // Jika angka bertipe desimal (seperti persentase pertumbuhan)
      if (apakahAngkaDesimal) {
        // Tampilkan angka dengan format satu angka di belakang koma (contoh: 1.2%)
        elemenTujuan.textContent = angkaSaatIni.toFixed(1) + akhiranTeks;
      } else {
        // Jika angka bulat biasa, bulatkan ke bawah dan format dengan titik ribuan gaya Indonesia (contoh: 17.082)
        elemenTujuan.textContent = Math.floor(angkaSaatIni).toLocaleString('id') + akhiranTeks;
      }

      // Jika hitungan angka saat ini sudah mencapai atau melebihi target akhir
      if (angkaSaatIni >= angkaTarget) {
        // Hentikan pengatur waktu interval agar animasi berakhir
        clearInterval(pengaturWaktuInterval);
      }
    }, 16); // Diulang kembali setiap 16 milidetik
  }

  // Cari semua elemen HTML yang memiliki atribut 'data-target' (elemen yang ingin dianimasikan angkanya)
  const semuaElemenAngkaMeningkat = document.querySelectorAll('[data-target]');

  // Jika terdapat elemen angka statistik tersebut di halaman saat ini
  if (semuaElemenAngkaMeningkat.length > 0) {
    // Buat pengawas (IntersectionObserver) khusus untuk mendeteksi kapan elemen angka masuk ke layar
    const pengawasAnimasiAngka = new IntersectionObserver((daftarDeteksi) => {
      // Periksa elemen angka yang dideteksi
      daftarDeteksi.forEach(hasilDeteksi => {
        // Jika minimal 50% area elemen angka tersebut sudah terlihat di layar browser
        if (hasilDeteksi.isIntersecting) {
          // Jalankan animasi perhitungan angka pada elemen tersebut
          jalankanAnimasiHitungAngka(hasilDeteksi.target);
          // Hentikan pengawasan agar animasi angka tidak berjalan berulang-ulang ketika di-scroll naik-turun
          pengawasAnimasiAngka.unobserve(hasilDeteksi.target);
        }
      });
    }, { threshold: 0.5 }); // Sensitivitas: 0.5 berarti harus terlihat 50% di layar baru animasi dimulai

    // Aktifkan pengawasan ke semua elemen angka yang terdaftar
    semuaElemenAngkaMeningkat.forEach(elemen => pengawasAnimasiAngka.observe(elemen));
  }


  // ── BAGIAN 3: ANIMASI JEDA BERUNTUN (AUTO STAGGER DELAY) ──
  
  // Mencari semua elemen induk yang memiliki class '.auto-stagger' (seperti grid daftar berita/layanan)
  document.querySelectorAll('.auto-stagger').forEach(elemenInduk => {
    // Ambil semua elemen anak di dalamnya yang memiliki class '.fu' (efek muncul)
    const semuaElemenAnak = elemenInduk.querySelectorAll('.fu');
    // Berikan jeda delay transisi secara otomatis bertingkat ke masing-masing elemen anak
    semuaElemenAnak.forEach((elemenAnakTunggal, indeksUrutan) => {
      // Elemen ke-1 delay 0s, elemen ke-2 delay 0.08s, elemen ke-3 delay 0.16s, dan seterusnya
      elemenAnakTunggal.style.transitionDelay = `${indeksUrutan * 0.08}s`;
    });
  });

});
