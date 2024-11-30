<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pemesanan Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mt-5 p-5 bg-white shadow-lg rounded-lg">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama_lengkap = $_POST['nama_lengkap'];
            $email = $_POST['email'];
            $tanggal_pemesanan = $_POST['tanggal_pemesanan'];
            $jumlah_tiket = $_POST['jumlah_tiket'];
            $harga_per_tiket = 100000; // Harga per tiket
            $total_harga = $harga_per_tiket * $jumlah_tiket;

            // Insert data ke tabel
            $query = "INSERT INTO tiket_pemesanan (nama_lengkap, email, tanggal_pemesanan, jumlah_tiket, total_harga) 
                      VALUES ('$nama_lengkap', '$email', '$tanggal_pemesanan', '$jumlah_tiket', '$total_harga')";

            if ($conn->query($query) === TRUE) {
                echo "<div class='text-center'>
                        <h2 class='text-2xl font-bold text-blue-600'>Pemesanan Tiket Berhasil!</h2>
                        <p class='text-lg mt-3'>Terima kasih <strong>$nama_lengkap</strong>, tiket Anda telah berhasil dipesan.</p>
                        <p class='text-lg'>Total Harga: <span class='font-semibold'>Rp " . number_format($total_harga, 0, ',', '.') . "</span></p>
                        <a href='index.php' class='btn btn-primary mt-4 px-4 py-2 text-lg rounded-md'>Kembali ke Halaman Utama</a>
                      </div>";
            } else {
                echo "<div class='text-center'>
                        <h2 class='text-2xl font-bold text-red-600'>Pemesanan Gagal!</h2>
                        <p class='text-lg mt-3'>Maaf, terjadi kesalahan. Silakan coba lagi.</p>
                        <a href='tiket.php' class='btn btn-danger mt-4 px-4 py-2 text-lg rounded-md'>Kembali ke Formulir</a>
                      </div>";
            }
            $conn->close();
        }
        ?>
    </div>
</body>
</html>
