<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <div class="container mt-5 bg-white p-5 shadow-lg rounded-lg">
        <h2 class="text-3xl font-bold text-center text-blue-600 mb-4">Form Pemesanan Tiket</h2>
        <form action="proses_pemesanan.php" method="POST">
            <div class="mb-4">
                <label for="nama_lengkap" class="block text-lg font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" class="form-control mt-2 py-2 px-3 w-full border border-gray-300 rounded-md" id="nama_lengkap" name="nama_lengkap" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                <input type="email" class="form-control mt-2 py-2 px-3 w-full border border-gray-300 rounded-md" id="email" name="email" required>
            </div>
            <div class="mb-4">
                <label for="tanggal_pemesanan" class="block text-lg font-medium text-gray-700">Tanggal Pemesanan</label>
                <input type="date" class="form-control mt-2 py-2 px-3 w-full border border-gray-300 rounded-md" id="tanggal_pemesanan" name="tanggal_pemesanan" required>
            </div>
            <div class="mb-4">
                <label for="jumlah_tiket" class="block text-lg font-medium text-gray-700">Jumlah Tiket</label>
                <input type="number" class="form-control mt-2 py-2 px-3 w-full border border-gray-300 rounded-md" id="jumlah_tiket" name="jumlah_tiket" required>
            </div>
            <button type="submit" class="btn btn-primary w-full py-2 px-4 text-lg rounded-md">Pesan Tiket</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
