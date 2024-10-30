<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang Kami</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 30px;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

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


        .about-box {
            background-color: #4caf50; 
            padding: 20px;
            border-radius: 8px;
            margin: 20px;
            color: white;
        }

        .about-inner {
            background-color: white; 
            padding: 20px;
            border-radius: 8px;
            color: black;
        }

        .about-inner h2 {
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .about-inner p {
            font-size: 16px;
            color: black;
        }
    </style>
</head>
<body>
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
        </div>
    </div>

    <div class="about-box">
        <div class="about-inner">
            <h2>Tentang Kami</h2>
            <p>Website ini dibangun untuk memfasilitasi masyarakat dalam melaporkan tumpukan sampah dengan mudah dan cepat.</p>
        </div>
    </div>
</body>
</html>
