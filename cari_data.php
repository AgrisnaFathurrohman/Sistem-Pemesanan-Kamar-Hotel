<?php
include 'koneksi.php'; // Memasukkan file koneksi untuk database

// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomor_identitas = $_POST['nomor_identitas']; // Ambil NIK dari form

    // Query untuk mendapatkan data dari database berdasarkan nomor identitas
    $sql = "SELECT * FROM pemesanan WHERE nomor_identitas = ?";
    $stmt = $conn->prepare($sql); // Siapkan statement
    $stmt->bind_param('s', $nomor_identitas); // Ikat parameter
    $stmt->execute(); // Eksekusi query
    $result = $stmt->get_result(); // Ambil hasil query

    if ($result->num_rows > 0) { // Cek jika ada hasil
        // Menampilkan data pemesanan
        $row = $result->fetch_assoc(); // Ambil data sebagai array asosiatif
        $nama_pemesan = $row['nama_pemesan'];
        $jenis_kelamin = $row['jenis_kelamin'];
        $tipe_kamar = $row['tipe_kamar'];
        $tanggal_pesan = $row['tanggal_pesan'];
        $durasi_menginap = $row['durasi_menginap'] . " Hari";
        $total_biaya = number_format($row['total_biaya'], 0, ',', '.');

        // Tutup koneksi
        $stmt->close(); // Tutup statement
        $conn->close(); // Tutup koneksi database
    } else {
        $pesan_error = "Data tidak ditemukan."; // Tampilkan pesan jika tidak ada data
    }
}
?>

<!DOCTYPE html>
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
    <style>
        .result {
            display: none;
        }
    </style>
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
                        <li class="nav-item">
                            <a class="nav-link" href="pesan.php">Pesan Kamar</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="cari_data.php">
                                <i class="fas fa-shopping-cart"></i> <!-- Ikon keranjang -->
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div id="form-cari">
        <div class="container" style="margin-bottom: -106px; margin-top:100px">
                <h2>Cari Data Pemesanan</h2>
                <form method="post" action="cari_data.php">
                    <div class="form-group">
                        <label for="nomor_identitas">Nomor Identitas (NIK)</label>
                        <input type="text" class="form-control" id="nomor_identitas" name="nomor_identitas" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>
        </div>

        <?php if (isset($nama_pemesan)): ?>
            <div id="result" class="result" style="margin-bottom: -140px;">
                <h2>Histori</h2>
                <p><strong>Nama Pemesan:</strong> <?php echo $nama_pemesan; ?></p>
                <p><strong>Jenis Kelamin:</strong> <?php echo $jenis_kelamin; ?></p>
                <p><strong>Tipe Kamar:</strong> <?php echo $tipe_kamar; ?></p>
                <p><strong>Durasi Menginap:</strong> <?php echo $durasi_menginap; ?></p>
                <p><strong>Total Biaya:</strong> Rp. <?php echo $total_biaya; ?></p>
                <p><strong>Tanggal Pesanan:</strong> <?php echo $tanggal_pesan; ?></p>

                <!-- Tombol Tutup -->
                <button id="tutup-histori" class="btn btn-danger">Tutup</button>
            </div>
        <?php elseif (isset($pesan_error)): ?>
            <div class="alert alert-danger" role="alert" style="margin-top: 200px; text-align:center;">
                <?php echo $pesan_error; ?>
                <a href="cari_data.php" class="btn btn-danger">Cari Ulang !</a>
            </div>
        <?php endif; ?>

        <!-- Footer section -->
        <footer class="prdk" style="margin-top: 198px;">
            <p>&copy; 2024 Hotel Boboni. All Rights Reserved.</p>
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Contact Us</a>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Saat data ditemukan, sembunyikan form pencarian dan tampilkan hasil
        <?php if (isset($nama_pemesan) || isset($pesan_error)): ?>
            document.getElementById('form-cari').style.display = 'none';
            document.getElementById('result').style.display = 'block';
        <?php endif; ?>

        // Fungsi untuk tombol "Tutup"
        document.getElementById('tutup-histori').addEventListener('click', function() {
            document.getElementById('result').style.display = 'none';
            document.getElementById('form-cari').style.display = 'block';
        });
    </script>
</body>

</html>