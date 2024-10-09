<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pemesanan - Restoku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Daftar Pemesanan</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Makanan</th>
                    <th>Nama Pemesan</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';

                // Pastikan kolom yang dipilih ada dalam tabel
                $sql = "SELECT orders.id, makanan.name, orders.customer_name, orders.quantity FROM orders JOIN makanan ON orders.makanan_id = makanan.id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["customer_name"] . "</td>";
                        echo "<td>" . $row["quantity"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada pemesanan.</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-secondary">Kembali ke Menu</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
