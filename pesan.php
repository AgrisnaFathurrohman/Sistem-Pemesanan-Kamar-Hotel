<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="Assets/CSS/style.css">

  <title>BOBONI</title>
</head>

<body>
  <div class="bg">
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.php"><b>BOBONI</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="produk.php">Produk</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="pesan.php">Pesan Kamar</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="container">
      <h2>Form Pemesanan</h2>
      <form id="formPemesanan" action="proses_pemesanan.php" method="POST">
        <label for="nama">Nama Pemesan:</label>
        <input type="text" id="nama" name="nama_pemesan" required>

        <label>Jenis Kelamin:</label>
        <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki" required>
        <label for="laki-laki" class="radio">Laki-laki</label>
        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
        <label for="perempuan" class="radio">Perempuan</label>

        <label for="nik">Nomor Identitas (NIK):</label>
        <input type="text" id="nik" name="nomor_identitas" required maxlength="16">
        <span id="errorNik" style="color: red; display: none;"></span>

        <label for="tipe_kamar">Tipe Kamar:</label>
        <select id="tipe_kamar" name="tipe_kamar" onchange="updateHarga()" required>
          <option value="STANDAR" data-harga="500000">STANDAR</option>
          <option value="DELUXE" data-harga="750000">DELUXE</option>
          <option value="EXECUTIF" data-harga="1000000">EXECUTIF</option>
        </select>

        <label for="harga">Harga:</label>
        <input type="text" id="harga" name="harga" readonly>

        <label for="tanggal_pesan">Tanggal Pesan:</label>
        <input type="date" id="tanggal_pesan" name="tanggal_pesan" required>

        <label for="durasi">Durasi Menginap (malam):</label>
        <input type="number" id="durasi" name="durasi_menginap" value="1" min="1" required>

        <label class="checkbox">Termasuk Breakfast:
          <input type="checkbox" id="breakfast" name="breakfast" value="Ya">
        </label>

        <label for="total_biaya">Total Biaya:</label>
        <input type="text" id="total_biaya" name="total_biaya" readonly>

        <div class="button-container">
          <button type="button" onclick="hitungTotal()">Hitung Total Bayaran</button>
          <button type="submit">Simpan</button>
          <button type="reset" class="cancel">Cancel</button>
        </div>
      </form>

    </div>
    <!-- Footer section -->
    <footer class="prdk">
      <p>&copy; 2024 Hotel Boboni. All Rights Reserved.</p>
      <div class="footer-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
        <a href="#">Contact Us</a>
      </div>
    </footer>
    <script src="Assets/JS/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </div>
</body>

</html>