<?php
include 'koneksi.php'; // Memasukkan file koneksi untuk database

// Ambil nomor_identitas dari URL
if (isset($_GET['nomor_identitas'])) {
    $nomor_identitas = $_GET['nomor_identitas']; // Simpan nomor identitas dari URL
} else {
    echo "Nomor identitas tidak ditemukan."; // Tampilkan pesan jika tidak ada nomor identitas
    exit(); // Hentikan eksekusi script
}

// Query untuk mendapatkan data dari database berdasarkan nomor identitas
$sql = "SELECT * FROM pemesanan WHERE nomor_identitas = ?";
$stmt = $conn->prepare($sql); // Siapkan statement
$stmt->bind_param('s', $nomor_identitas); // Ikat parameter
$stmt->execute(); // Eksekusi query
$result = $stmt->get_result(); // Ambil hasil query

if ($result->num_rows > 0) { // Cek jika ada hasil
    // Menampilkan data pemesanan
    $row = $result->fetch_assoc(); // Ambil data sebagai array asosiatif
    $nama_pemesan = $row['nama_pemesan']; // Ambil nama pemesan
    $jenis_kelamin = $row['jenis_kelamin']; // Ambil jenis kelamin
    $nomor_identitas = $row['nomor_identitas']; // Ambil nomor identitas
    $tipe_kamar = $row['tipe_kamar']; // Ambil tipe kamar
    $durasi_menginap = $row['durasi_menginap'] . " Hari"; // Ambil durasi menginap
    $discount = "10%"; // Misal discount tetap
    $total_bayar = number_format($row['total_biaya'], 0, ',', '.'); // Format total bayar

    // Tutup koneksi
    $stmt->close(); // Tutup statement
    $conn->close(); // Tutup koneksi database
} else {
    echo "Data tidak ditemukan."; // Tampilkan pesan jika tidak ada data
    exit(); // Hentikan eksekusi script
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
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="produk.php">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pesan.php">Pesan Kamar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cari_data.php">
                                <i class="fas fa-shopping-cart"></i> <!-- Ikon keranjang -->
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="result">
            <h2>Hasil Pemesanan</h2> <!-- Judul untuk hasil pemesanan -->
            <p><span>Nama Pemesan</span> : <?php echo $nama_pemesan; ?></p> <!-- Menampilkan nama pemesan -->
            <p><span>Nomor Identitas</span> : <?php echo $nomor_identitas; ?></p> <!-- Menampilkan nomor identitas -->
            <p><span>Jenis Kelamin</span> : <?php echo $jenis_kelamin; ?></p> <!-- Menampilkan jenis kelamin -->
            <p><span>Tipe Kamar</span> : <?php echo $tipe_kamar; ?></p> <!-- Menampilkan tipe kamar -->
            <p><span>Durasi Menginap</span> : <?php echo $durasi_menginap; ?></p> <!-- Menampilkan durasi menginap -->
            <p><span>Discount</span> : <?php echo $discount; ?></p> <!-- Menampilkan diskon -->
            <p><span>Total Bayar</span> : Rp. <?php echo $total_bayar; ?></p> <!-- Menampilkan total bayar -->
        </div>
        <!-- Footer section -->
        <footer class="prdk" style="margin-top: -19px;">
            <p>&copy; 2024 Hotel Boboni. All Rights Reserved.</p>
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Contact Us</a>
            </div>
        </footer>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

        <script>
            // Fungsi untuk memanggil print setelah halaman dimuat
            window.onload = function() {
                window.print();
            };
        </script>
    </div>
</body>

</html>