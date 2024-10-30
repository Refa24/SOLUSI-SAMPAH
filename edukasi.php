<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edukasi</title>
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

      
        .education-box {
            background-color: #4caf50; 
            padding: 20px;
            border-radius: 8px;
            margin: 20px;
            color: white;
            text-align: center;
        }

        .education-inner {
            background-color: white; 
            padding: 20px;
            border-radius: 8px;
            color: black;
            text-align: center;
            margin-top: 20px;
        }

       
        .video-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .video-box {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            width: 30%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .video-box a {
            color: #4caf50; 
            text-decoration: none;
            font-weight: bold;
        }

        .video-box a:hover {
            text-decoration: underline;
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

    <div class="education-box">
        <h2>Pelajari lebih lanjut tentang dampak sampah bagi lingkungan dan cara mengelola sampah dengan benar.</h2>
    </div>


    <div class="education-inner">
        <h3>Video Edukasi</h3>
        <div class="video-container">
            <div class="video-box">
                <p><a href="https://youtu.be/1U-52FMZa7g?si=LhMOz4TDNhFhWOCp" target="_blank">Mengelola Sampah 101</a></p>
            </div>
            <div class="video-box">
                <p><a href="https://youtu.be/CGd3lgxReFE?si=z5C3PlO3uJ_Dordz" target="_blank">Cara Daur Ulang Sampah</a></p>
            </div>
            <div class="video-box">
                <p><a href="https://youtu.be/WI4pRrTDhUs?si=cAq5Z2P_gjlOUmCl" target="_blank">Manfaat Mengurangi Sampah</a></p>
            </div>
        </div>
    </div>
</body>
</html>
