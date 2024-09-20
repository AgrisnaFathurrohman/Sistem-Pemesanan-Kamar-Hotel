function toggleVideo(card) {
  // Sembunyikan semua video-card
  const videoCards = document.querySelectorAll('.video-card');
  videoCards.forEach(videoCard => {
    videoCard.style.display = 'none'; // Setiap video-card disembunyikan
  });

  // Tampilkan video-card yang sesuai dengan kartu yang dipilih
  const videoCard = card.nextElementSibling; // Ambil elemen video-card berikutnya
  if (videoCard) {
    videoCard.style.display = 'block'; // Tampilkan video-card yang sesuai
  }
}

function hideVideo() {
  // Sembunyikan semua video-card
  const videoCards = document.querySelectorAll('.video-card');
  videoCards.forEach(videoCard => {
    videoCard.style.display = 'none'; // Setiap video-card disembunyikan
  });
}

function updateHarga() {
  // Ambil elemen tipe kamar dan input harga
  const tipeKamar = document.getElementById('tipe_kamar');
  const hargaInput = document.getElementById('harga');
  // Dapatkan harga dari atribut data-harga tipe kamar yang dipilih
  const harga = tipeKamar.options[tipeKamar.selectedIndex].getAttribute('data-harga');
  hargaInput.value = harga; // Set nilai input harga
}

function hitungTotal() {
  // Ambil nilai dari input yang diperlukan
  const nik = document.getElementById('nik').value;
  const durasi = parseInt(document.getElementById('durasi').value) || 0;
  const hargaPerMalam = parseInt(document.getElementById('harga').value) || 0;
  const breakfast = document.getElementById('breakfast').checked; // Cek apakah breakfast dipilih
  const errorNik = document.getElementById('errorNik');

  let error = false; // Flag untuk validasi

  // Validasi Nomor Identitas (NIK)
  if (nik.length !== 16 || isNaN(nik)) {
    errorNik.textContent = 'NIK harus 16 digit'; // Tampilkan pesan error
    errorNik.style.display = 'block'; // Tampilkan error
    error = true; // Tandai bahwa ada error
  } else {
    errorNik.style.display = 'none'; // Sembunyikan pesan error jika valid
  }

  // Hitung Total Biaya jika tidak ada error
  if (!error) {
    let total = hargaPerMalam * durasi; // Hitung total biaya dasar
    
    // Tambahan biaya breakfast jika dipilih
    if (breakfast) {
      total += 80000; // Tambahan 80.000 untuk breakfast
    }
    // Diskon jika durasi lebih dari 3 malam
    if (durasi > 3) {
      total *= 0.9; // Diskon 10%
    }


    document.getElementById('total_biaya').value = total; // Set total biaya ke input
  }
}

function toggleVideo(type) {
  const videoCard = document.querySelector('.video-card-' + type);
  const cards = document.querySelectorAll('.card');
  if (videoCard.style.display === 'block') {
    hideVideo(type);
  } else {
    videoCard.style.display = 'block';
    cards.forEach(c => {
      if (c !== videoCard && c !== document.querySelector('.card.text-center[onclick*="' + type + '"]')) {
        c.style.display = 'none';
      }
    });
  }
}

function hideVideo(type) {
  const videoCard = document.querySelector('.video-card-' + type);
  videoCard.style.display = 'none';
  const cards = document.querySelectorAll('.card');
  cards.forEach(c => {
    if (c !== videoCard) c.style.display = 'block';
  });
}

// Panggil updateHarga saat halaman dimuat
window.onload = updateHarga; // Jalankan fungsi updateHarga saat halaman selesai dimuat
