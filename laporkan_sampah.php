<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laporkan Sampah</title>
    <style>
      /* Reset margin dan padding */
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
      }

      /* Header */
      .header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 30px;
        background-color: #ffffff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      /* Menu navigasi */
      .nav {
        display: flex;
        gap: 20px;
      }

      .nav a {
        text-decoration: none;
        color: #333;
        font-size: 16px;
        font-weight: bold;
      }

      /* Kotak Laporkan Sampah */
      .report-box {
        background-color: #4caf50; /* Hijau */
        padding: 20px;
        border-radius: 8px;
        margin: 20px;
        color: white;
      }

      .report-inner {
        background-color: white; /* Putih */
        padding: 20px;
        border-radius: 8px;
        color: black;
      }

      /* Formulir */
      .form-group {
        margin-bottom: 15px;
      }

      .form-group label {
        display: block;
        margin-bottom: 5px;
      }

      .form-group input,
      .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }

      /* Tombol Laporkan */
      .report-btn {
        background-color: #4caf50; /* Hijau */
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
      }

      .report-btn:hover {
        background-color: #45a049; /* Hijau lebih gelap saat hover */
      }
    </style>
  </head>
  <body>
    <!-- Header -->
    <div class="header">
      <div class="profile-icon">
        <img src="https://via.placeholder.com/30" alt="Profile" />
      </div>
      <div class="nav">
        <a href="#">Beranda</a>
        <a href="#">Peta Lokasi</a>
        <a href="#">Riwayat Laporan</a>
        <a href="#">Edukasi</a>
        <a href="#">Hubungi Kami</a>
        <a href="#">Tentang Kami</a>
        <a href="laporkan.php">Laporkan Sampah</a>
        <!-- Link ke halaman laporkan -->
      </div>
    </div>

    <!-- Kotak Laporkan Sampah -->
    <div class="report-box">
      <div class="report-inner">
        <h2>Isi formulir berikut untuk melaporkan sampah</h2>
        <form action="laporkan.php" method="post">
          <!-- Aksi untuk mengirim formulir -->
          <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required />
          </div>
          <div class="form-group">
            <label for="lokasi">Lokasi Sampah:</label>
            <input
              type="text"
              id="lokasi"
              name="lokasi"
              placeholder="Masukkan alamat"
              required
            />
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea
              id="deskripsi"
              name="deskripsi"
              rows="4"
              placeholder="Jelaskan kondisi sampah"
              required
            ></textarea>
          </div>
          <button type="submit" class="report-btn">Laporkan Sampah</button>
        </form>
      </div>
    </div>
  </body>
</html>
