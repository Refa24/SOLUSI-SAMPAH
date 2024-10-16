<html>
<head>
    <title>Hubungi Kami</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #6BA39E;
        }
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #fff;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar .logo {
            font-size: 24px;
        }
        .navbar .menu {
            display: flex;
            align-items: center;
        }
        .navbar .menu a {
            text-decoration: none;
            color: #000;
            margin: 0 10px;
            font-size: 16px;
        }
        .navbar .menu a.active {
            color: #6BA39E;
            font-weight: bold;
        }
        .navbar .buttons {
            display: flex;
            align-items: center;
        }
        .navbar .buttons button {
            background-color: #6BA39E;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            margin-left: 10px;
            cursor: pointer;
        }
        .navbar .buttons button.login {
            background-color: #B5D6C6;
        }
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 60px);
        }
        .contact-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        .contact-box h2 {
            margin-top: 0;
            font-size: 24px;
            font-weight: bold;
        }
        .contact-box p {
            margin: 10px 0;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <i class="fas fa-user-circle"></i>
        </div>
        <div class="menu">
            <a href="#">Beranda</a>
            <a href="#">Peta Lokasi</a>
            <a href="#">Riwayat Laporan</a>
            <a href="#">Edukasi</a>
            <a href="#" class="active">Hubungi Kami</a>
            <a href="#">Tentang Kami</a>
        </div>
        <div class="buttons">
            <button>Laporan Sampah</button>
            <button class="login">Login</button>
        </div>
    </div>
    <div class="content">
        <div class="contact-box">
            <h2>Hubungi Kami</h2>
            <p>Email : solusisampahkita@gmail.com</p>
            <p>Telepon : 01-23456789</p>
            <p>Instagram : .....</p>
            <p>Facebook : .....</p>
            <p>Twitter : .....</p>
        </div>
    </div>
</body>
</html>
