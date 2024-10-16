<html>
<head>
    <title>Formulir Laporan Sampah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar .logo {
            font-size: 24px;
        }
        .navbar .nav-links {
            display: flex;
            gap: 20px;
        }
        .navbar .nav-links a {
            text-decoration: none;
            color: black;
            font-size: 16px;
        }
        .navbar .nav-links a:hover {
            text-decoration: underline;
        }
        .navbar .nav-links a.active {
            color: blue;
        }
        .navbar .buttons {
            display: flex;
            gap: 10px;
        }
        .navbar .buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .navbar .buttons .report-button {
            background-color: #8bc34a;
            color: white;
        }
        .navbar .buttons .login-button {
            background-color: #a5d6a7;
            color: white;
        }
        .form-container {
            background-color: #5f9ea0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
        }
        .form-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            width: 600px;
        }
        .form-box h2 {
            margin-top: 0;
        }
        .form-box .form-group {
            margin-bottom: 20px;
        }
        .form-box .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-box .form-group input,
        .form-box .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-box .form-group textarea {
            height: 100px;
        }
        .form-box .form-group .file-input {
            padding: 0;
        }
        .form-box .form-group .file-input input {
            padding: 10px;
        }
        .form-box .form-group .submit-button {
            background-color: white;
            border: 1px solid black;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <i class="fas fa-user-circle"></i>
        </div>
        <div class="nav-links">
            <a href="#">Beranda</a>
            <a href="#">Peta Lokasi</a>
            <a href="#" class="active">Riwayat Laporan</a>
            <a href="#">Edukasi</a>
            <a href="#">Hubungi Kami</a>
            <a href="#">Tentang Kami</a>
        </div>
        <div class="buttons">
            <button class="report-button">Laporkan Sampah</button>
            <button class="login-button">Login</button>
        </div>
    </div>
    <div class="form-container">
        <div class="form-box">
            <h2>Isi formulir berikut untuk melaporkan sampah :</h2>
            <div class="form-group">
                <label for="name">Nama (Opsional) :</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="location">Lokasi Sampah :</label>
                <input type="text" id="location" name="location" placeholder="Masukan Alamat....">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi :</label>
                <textarea id="description" name="description" placeholder="Jelaskan Kondisi Sampah......."></textarea>
            </div>
            <div class="form-group file-input">
                <label for="image">Unggah Gambar :</label>
                <input type="file" id="image" name="image">
            </div>
            <div class="form-group">
                <button class="submit-button">Laporkan Sampah</button>
            </div>
        </div>
    </div>
</body>
</html>
