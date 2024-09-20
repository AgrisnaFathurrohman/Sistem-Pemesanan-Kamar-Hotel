<?php
include 'koneksi.php'; // Memasukkan file koneksi

// Ambil data dari form
$nama_pemesan = $_POST['nama_pemesan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nomor_identitas = $_POST['nomor_identitas'];
$tipe_kamar = $_POST['tipe_kamar'];
$harga = $_POST['harga'];
$tanggal_pesan = $_POST['tanggal_pesan'];
$durasi_menginap = $_POST['durasi_menginap'];
$breakfast = isset($_POST['breakfast']) ? 'Ya' : 'Tidak';
$total_biaya = $_POST['total_biaya'];

// Cek apakah NIK sudah ada
$sqlCheck = "SELECT * FROM pemesanan WHERE nomor_identitas = ?";
$stmtCheck = $conn->prepare($sqlCheck);
$stmtCheck->bind_param('s', $nomor_identitas);
$stmtCheck->execute();
$resultCheck = $stmtCheck->get_result();

if ($resultCheck->num_rows > 0) {
    echo "NIK sudah melakukan pemesanan";
} else {
    // Siapkan dan bind untuk menyimpan data
    $sql = "INSERT INTO pemesanan (nama_pemesan, jenis_kelamin, nomor_identitas, tipe_kamar, harga, tanggal_pesan, durasi_menginap, breakfast, total_biaya) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssdsdss', $nama_pemesan, $jenis_kelamin, $nomor_identitas, $tipe_kamar, $harga, $tanggal_pesan, $durasi_menginap, $breakfast, $total_biaya);

    // Eksekusi query
    if ($stmt->execute()) {
        // Setelah sukses simpan, arahkan ke halaman hasil
        header("Location: hasil.php?nomor_identitas=" . urlencode($nomor_identitas));
        exit(); // Hentikan eksekusi setelah redirect
    } else {
        echo "Error: " . $stmt->error;
    }

    // Tutup statement
    $stmt->close();
}

// Tutup koneksi
$conn->close();
?>
