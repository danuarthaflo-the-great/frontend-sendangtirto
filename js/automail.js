/**
  automail
 */

function bukaLayananOnline(kejadian) {
  if (kejadian) {
    kejadian.preventDefault();
  }

  const nomorWhatsApp = "628562746055";

  const pesanTeksOtomatis = "Halo, Idris selamat siang .....";

  // bikin url endcoding biar aman aja
  const pesanTeksFormatUrl = encodeURIComponent(pesanTeksOtomatis);
  const tautanWhatsAppLengkap = `https://wa.me/${nomorWhatsApp}?text=${pesanTeksFormatUrl}`;// bikin link sama defaut pesan
  // bukan link dama tab baru
  window.open(tautanWhatsAppLengkap, "_blank");
}
