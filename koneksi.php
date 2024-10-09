<?php
$servername = "localhost"; // atau "127.0.0.1"
$username = "root"; // ganti dengan username database
$password = ""; // ganti dengan password database
$dbname = "restoku_db"; // ganti dengan nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
