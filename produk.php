<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="Assets/CSS/style.css">
  <title>BOBONI</title>
</head>

<body class="bg">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#"><b>BOBONI</b></a>
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
          <li class="nav-item">
            <a class="nav-link" href="cari_data.php">
              <i class="fas fa-shopping-cart"></i>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main-content>
    <div class="card text-center" onclick="toggleVideo('standar')">
      <div class="card-header">
        STANDAR
      </div>
      <div class="card-body" style="background-image: url('https://images.unsplash.com/photo-1535827841776-24afc1e255ac?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover;">
        <a href="#" class="btn btn-primary" style="margin-top: 123px;">Cek</a>
      </div>
      <div class="card-footer text-muted">
        Update 15/02/2024
      </div>
    </div>

    <div class="video-card-standar" style="display: none;">
      <div class="card-header" style="background-color: white;">
        <H4>SPESIFIKASI KAMAR STANDAR</H4>
      </div>
      <div class="card-body d-flex" style="background-color: white;">
        <p>
          <b>Ukuran:</b> <br> Cukup luas untuk satu atau dua tempat tidur (ranjang queen/king) dan ruang untuk meja serta kursi.<br>
          <b>Perabotan:</b> <br> Dilengkapi dengan meja kerja, kursi, dan lemari pakaian.<br>
          <b>Kamar Mandi:</b> <br> Tersedia shower atau bathtub, toilet, dan wastafel dengan perlengkapan mandi.<br>
          <b>Fasilitas:</b> <br> Menyediakan TV, kulkas kecil, ketel elektrik, dan Wi-Fi gratis.<br>
          <b>Dekorasi:</b> <br> Desain interior sederhana namun menarik, dengan pencahayaan yang baik.
        </p>
        <iframe width="320" height="240" src="https://www.youtube.com/embed/mNtgSgqty10?si=Ci10sq5fmTVERTMZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="margin-left: 20px;"></iframe>
        <button class="btn btn-secondary ml-3" style="max-width: 6%; margin-top:0;" onclick="hideVideo('standar')">Tutup</button>
      </div>
    </div>
    <div class="card text-center" onclick="toggleVideo('deluxe')">
      <div class="card-header">
        DELUXE
      </div>
      <div class="card-body" style="background-image: url('https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover;">
        <a href="#" class="btn btn-primary" style="margin-top: 123px;">Cek</a>
      </div>
      <div class="card-footer text-muted">
        Update 11/06/2024
      </div>
    </div>

    <div class="video-card-deluxe" style="display: none;">
      <div class="card-header" style="background-color: white;">
        <H4>SPESIFIKASI KAMAR DELUXE</H4>
      </div>
      <div class="card-body d-flex" style="background-color: white;">
        <p>
          <b>Ukuran:</b> <br> Lebih luas dengan tempat tidur king/queen, area duduk, dan meja makan kecil.<br>
          <b>Perabotan:</b> <br> Perabot berkualitas, termasuk sofa, meja kerja besar, dan lemari.<br>
          <b>Kamar Mandi:</b> <br> Mewah, dengan shower dan bathtub terpisah, serta perlengkapan premium..<br>
          <b>Fasilitas:</b> <br> TV besar, minibar, brankas, ketel listrik, mesin kopi, dan Wi-Fi cepat.<br>
          <b>Dekorasi:</b> <br> Interior elegan dengan detail mewah dan pencahayaan nyaman.
        </p>
        <iframe width="320" height="240" src="https://www.youtube.com/embed/FDoYFYYMj9I?si=UxIXQu9OzO3Ve0OG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="margin-left: 20px;"></iframe>
        <button class="btn btn-secondary ml-3" style="max-width: 7%; margin-top:0;" onclick="hideVideo('deluxe')">Tutup</button>
      </div>
    </div>
    <div class="card text-center" onclick="toggleVideo('executif')">
      <div class="card-header">
        EXECUTIF
      </div>
      <div class="card-body" style="background-image: url('https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover;">
        <a href="#" class="btn btn-primary" style="margin-top: 123px;">Cek</a>
      </div>
      <div class="card-footer text-muted">
        Update 23/08/2024
      </div>
    </div>

    <div class="video-card-executif" style="display: none;">
      <div class="card-header" style="background-color: white;">
        <H4>SPESIFIKASI KAMAR EXECUTIF</H4>
      </div>
      <div class="card-body d-flex" style="background-color: white;">
        <p>
          <b>Ukuran:</b> <br> Lebih luas dengan ruang tidur, kerja, dan duduk terpisah.<br>
          <b>Perabotan:</b> <br> Berkualitas tinggi, termasuk meja kerja ergonomis dan sofa.<br>
          <b>Kamar Mandi:</b> <br> Mewah dengan shower dan bathtub terpisah, fasilitas premium.<br>
          <b>Fasilitas:</b> <br> Akses lounge eksekutif, TV besar, minibar premium, mesin kopi, dan Wi-Fi cepat.<br>
          <b>Dekorasi:</b> <br> Elegan, modern, dengan pencahayaan yang mendukung produktivitas.
        </p>
        <iframe width="320" height="240" src="https://www.youtube.com/embed/WzK1fhl_ljI?si=SZiQQlYD76uI2ttP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="margin-left: 20px;"></iframe>
        <button class="btn btn-secondary ml-3" style="max-width: 7%; margin-top:0;" onclick="hideVideo('executif')">Tutup</button>
      </div>
    </div>
  </main-content>
  <!-- Footer section -->
  <footer>
    <p>&copy; 2024 Hotel Boboni. All Rights Reserved.</p>
    <div class="footer-links">
      <a href="#">Alamat : BR. Dinas Merajan, West Seraya, Karangasem, Karangasem Regency, Bali 80811</a>
      <a href="#">Telp :0852-1562-5364</a>
      <a href="#">Email : Bobonihotel@gmail.com</a>
    </div>
  </footer>
  <script src="Assets/JS/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>