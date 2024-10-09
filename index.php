<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Restoku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Menu Restoku</h1>
        
        <!-- Daftar Makanan -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Makanan</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                
                // Ambil data makanan dari database
                $sql = "SELECT * FROM makanan";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["description"] . "</td>";
                        echo "<td><img src='" . $row["image"] . "' width='100'></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada makanan.</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <!-- Form Pemesanan -->
        <h2>Pesan Makanan</h2>
        <form action="process_order.php" method="POST">
            <label for="makanan_id">ID Makanan:</label>
            <input type="number" name="makanan_id" required>
            
            <label for="customer_name">Nama Pemesan:</label>
            <input type="text" name="customer_name" required>
            
            <label for="quantity">Jumlah:</label>
            <input type="number" name="quantity" required>
            
            <input type="submit" value="Pesan">
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
