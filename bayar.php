<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jumlah = $_POST['jumlah'];

    // Proses upload gambar bukti pembayaran
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["bukti"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["bukti"]["tmp_name"], $target_file)) {
        // Simpan data ke database
        $sql = "INSERT INTO pembayaran (nama, alamat, jumlah, bukti) VALUES ('$nama', '$alamat', '$jumlah', '$target_file')";
        if ($conn->query($sql) === TRUE) {
            echo "Pembayaran berhasil disimpan! <a href='riwayat_bayar.php'>Lihat Riwayat</a>";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Terjadi kesalahan saat mengunggah bukti pembayaran.";
    }

    $conn->close();
}
?>