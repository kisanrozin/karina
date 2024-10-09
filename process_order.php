<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $makanan_id = $_POST['makanan_id']; 
    $customer_name = $_POST['customer_name']; 
    $quantity = $_POST['quantity']; 

    // Debug: Tampilkan nilai variabel
    var_dump($makanan_id, $customer_name, $quantity);

    // Menyiapkan query
    $sql = "INSERT INTO orders (makanan_id, customer_name, quantity) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isi", $makanan_id, $customer_name, $quantity); // "isi" berarti integer, string, integer

    // Menjalankan query
    if ($stmt->execute()) {
        echo "Pemesanan berhasil.";
    } else {
        echo "Error: " . $stmt->error; 
    }

    $stmt->close();
}

$conn->close();
?>
