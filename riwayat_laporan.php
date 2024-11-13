<?php
// Konfigurasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistem_pelaporan";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari tabel riwayat_pelaporan
$sql = "SELECT id, lokasi, status FROM riwayat_laporan ORDER BY tanggal DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Pelaporan</title>
</head>
<body>
    <h1>Riwayat Pelaporan Sampah</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Lokasi</th>
            <th>Status</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['lokasi'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Tidak ada laporan</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
// Menutup koneksi
$conn->close();
?>
