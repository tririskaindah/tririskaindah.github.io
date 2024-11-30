<?php
$host = 'localhost';
$username = 'root'; // ganti dengan username database Anda
$password = ''; // ganti dengan password database Anda
$dbname = '19044_psas'; // ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
