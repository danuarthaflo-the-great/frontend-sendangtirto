/**
 * js/automail.js
 * Fungsi untuk membuka obrolan WhatsApp dengan pesan teks otomatis.
 */

// Fungsi untuk membuka WhatsApp dengan pesan otomatis ketika tombol diklik
function bukaLayananOnline(kejadian) {
  // Mencegah tindakan default dari link agar tidak menggeser halaman ke atas
  if (kejadian) {
    kejadian.preventDefault();
  }

  // Nomor WhatsApp tujuan pelayanan desa (62 menggantikan angka 0 di awal nomor)
  const nomorWhatsApp = "628562746055";

  // Pesan teks otomatis yang akan langsung terisi di kolom obrolan WhatsApp
  const pesanTeksOtomatis = "Halo, Idris selamat siang .....";

  // Mengubah spasi dan karakter khusus pesan agar aman dikirim melalui link internet (URL Encoding)
  const pesanTeksFormatUrl = encodeURIComponent(pesanTeksOtomatis);

  // Menyusun link lengkap WhatsApp beserta nomor tujuan dan pesan teksnya
  const tautanWhatsAppLengkap = `https://wa.me/${nomorWhatsApp}?text=${pesanTeksFormatUrl}`;

  // Membuka tautan WhatsApp yang telah disusun di tab baru browser
  window.open(tautanWhatsAppLengkap, "_blank");
}
