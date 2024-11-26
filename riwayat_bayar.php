<?php
include 'db_connect.php';

$sql = "SELECT id, nama, alamat, jumlah, bukti FROM pembayaran";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Pembayaran</title>
</head>
<body>
    <h1>Riwayat Pembayaran Sampah</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jumlah</th>
            <th>Bukti</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nama']}</td>
                        <td>{$row['alamat']}</td>
                        <td>Rp " . number_format($row['jumlah'], 0, ',', '.') . "</td>
                        <td><img src='{$row['bukti']}' alt='Bukti Pembayaran' width='100'></td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada pembayaran.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>