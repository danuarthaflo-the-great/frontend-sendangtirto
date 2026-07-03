/* ════════════════════════════════════════════════════════════════════════
   navbar.js — Mengatur navigasi mobile, efek scroll, dan pergerakan halaman
   ════════════════════════════════════════════════════════════════════════ */

// Tunggu sampai semua elemen HTML selesai dimuat oleh browser
document.addEventListener('DOMContentLoaded', () => {

  // Mengambil elemen-elemen penting dari HTML menggunakan class-nya
  const elemenNavbar = document.querySelector('.navbar'); // Menu navigasi utama di bagian atas
  const tombolMenuMobile = document.querySelector('.nav-toggle'); // Tombol hamburger untuk mobile
  const laciNavigasiMobile = document.querySelector('.nav-drawer'); // Laci menu yang muncul di mobile
  const latarBelakangGelap = document.querySelector('.nav-overlay'); // Latar gelap saat menu mobile aktif

  // Fungsi untuk MENAMPILKAN menu navigasi mobile
  function bukaMenuNavigasi() {
    // Tambahkan class 'open' pada tombol hamburger agar berubah bentuk jadi silang (X)
    tombolMenuMobile.classList.add('open');
    // Tambahkan class 'open' pada laci navigasi agar muncul bergeser ke bawah
    laciNavigasiMobile.classList.add('open');
    // Tambahkan class 'show' pada latar belakang gelap agar terlihat transparan hitam
    latarBelakangGelap.classList.add('show');
    // Kunci scroll pada halaman utama agar pengguna fokus pada menu navigasi
    document.body.style.overflow = 'hidden';
  }

  // Fungsi untuk MENUTUP menu navigasi mobile
  function tutupMenuNavigasi() {
    // Hapus class 'open' pada tombol hamburger agar kembali ke bentuk garis tiga
    tombolMenuMobile.classList.remove('open');
    // Hapus class 'open' pada laci navigasi agar tersembunyi kembali ke atas
    laciNavigasiMobile.classList.remove('open');
    // Hapus class 'show' pada latar belakang gelap agar menghilang kembali
    latarBelakangGelap.classList.remove('show');
    // Aktifkan kembali fungsi scroll pada halaman utama
    document.body.style.overflow = '';
  }

  // Jika tombol hamburger ditemukan di halaman, tambahkan aksi klik
  if (tombolMenuMobile) {
    tombolMenuMobile.addEventListener('click', () => {
      // Periksa apakah laci navigasi saat ini sedang terbuka (punya class 'open')
      const sedangTerbuka = laciNavigasiMobile.classList.contains('open');
      // Jika sedang terbuka, maka jalankan fungsi tutup. Jika tertutup, jalankan fungsi buka.
      sedangTerbuka ? tutupMenuNavigasi() : bukaMenuNavigasi();
    });
  }

  // Jika latar belakang gelap di-klik, langsung tutup menu navigasi mobile
  if (latarBelakangGelap) {
    latarBelakangGelap.addEventListener('click', tutupMenuNavigasi);
  }

  // Tutup laci menu secara otomatis saat salah satu link navigasi di dalamnya di-klik
  if (laciNavigasiMobile) {
    laciNavigasiMobile.querySelectorAll('a').forEach(tautan => {
      tautan.addEventListener('click', tutupMenuNavigasi);
    });
  }

  // Deteksi ketika halaman di-scroll oleh pengguna
  window.addEventListener('scroll', () => {
    // Jika posisi scroll ke bawah lebih dari 40 pixel
    if (window.scrollY > 40) {
      // Tambahkan class 'scrolled' agar warna background navbar atas berubah lebih solid
      elemenNavbar && elemenNavbar.classList.add('scrolled');
    } else {
      // Hapus class 'scrolled' agar warna background navbar kembali semi-transparan
      elemenNavbar && elemenNavbar.classList.remove('scrolled');
    }
  }, { passive: true }); // Menggunakan mode passive agar performa scroll lebih lancar di mobile

  // Menandai menu navigasi aktif sesuai dengan halaman yang sedang dibuka
  // Ambil nama file saat ini (contoh: 'index.php') dari alamat URL browser
  const namaHalamanSaatIni = window.location.pathname.split('/').pop() || 'index.php';
  // Ambil semua tautan link navigasi baik di desktop maupun menu mobile
  const semuaTautanNavigasi = document.querySelectorAll('.nav-menu a, .nav-drawer a');
  // Ulangi proses pengecekan untuk setiap tautan navigasi
  semuaTautanNavigasi.forEach(tautan => {
    // Ambil isi dari atribut href tautan (contoh: 'layanan.php')
    const alamatTautan = tautan.getAttribute('href');
    // Jika atribut href sama dengan nama halaman yang sedang diakses
    if (alamatTautan && (alamatTautan === namaHalamanSaatIni || alamatTautan.endsWith(namaHalamanSaatIni))) {
      // Tambahkan class 'active' untuk memberikan warna teks yang berbeda sebagai penanda
      tautan.classList.add('active');
    }
  });

  // Membuat efek scroll yang halus (smooth scroll) untuk link yang merujuk ke id tertentu di halaman yang sama (dimulai dengan '#')
  document.querySelectorAll('a[href^="#"]').forEach(tautanLompat => {
    tautanLompat.addEventListener('click', kejadian => {
      // Dapatkan elemen target berdasarkan id yang ada di atribut href (contoh: '#sejarah')
      const elemenTarget = document.querySelector(tautanLompat.getAttribute('href'));
      // Jika elemen target ditemukan di halaman
      if (elemenTarget) {
        kejadian.preventDefault(); // Batalkan aksi lompat instan bawaan browser
        const tinggiNavbar = 72; // Mengatur tinggi navbar sebagai batas offset agar teks target tidak tertutup navbar
        // Hitung posisi koordinat target dikurangi tinggi navbar
        const posisiTujuan = elemenTarget.getBoundingClientRect().top + window.scrollY - tinggiNavbar;
        // Lakukan pergeseran scroll layar secara halus menuju posisi tujuan
        window.scrollTo({ top: posisiTujuan, behavior: 'smooth' });
      }
    });
  });

});