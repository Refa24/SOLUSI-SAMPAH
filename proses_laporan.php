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

// Mengambil data dari form
$nama_pelapor = $_POST['nama_pelapor'];
$lokasi = $_POST['lokasi'];
$deskripsi = $_POST['deskripsi'];

// Mengambil dan mengunggah gambar
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Cek apakah file adalah gambar
if(!empty($_FILES["gambar"]["tmp_name"])) {
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if($check !== false) {
        if (!file_exists($target_file) && $_FILES["gambar"]["size"] <= 5000000 && 
           in_array($imageFileType, ["jpg", "png", "jpeg", "gif"])) {
            move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
        }
    }
}

// Simpan data laporan ke dalam database dengan status "Dalam Proses"
$sql = "INSERT INTO riwayat_laporan (nama_pelapor, lokasi, deskripsi, gambar, status) 
        VALUES ('$nama_pelapor', '$lokasi', '$deskripsi', '$target_file', 'Dalam Proses')";

if ($conn->query($sql) === TRUE) {
    echo "Laporan berhasil disimpan. <a href='riwayat_laporan.php'>Lihat Riwayat Laporan</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
