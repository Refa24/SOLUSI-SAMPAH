<html>
 <head>
  <title>
   Login Page
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #6BA292;
        }
        .navbar {
            background-color: #fff;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #ccc;
        }
        .navbar img {
            width: 40px;
            height: 40px;
        }
        .navbar a {
            text-decoration: none;
            color: black;
            margin: 0 10px;
            font-size: 16px;
        }
        .navbar .buttons {
            display: flex;
            align-items: center;
        }
        .navbar .buttons button {
            background-color: #A3D9A5;
            border: none;
            padding: 10px 20px;
            margin-left: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .navbar .buttons button:hover {
            background-color: #8CCB8E;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 60px);
        }
        .login-box {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .login-box h2 {
            margin-bottom: 20px;
            font-size: 18px;
        }
        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-box input[type="checkbox"] {
            margin-right: 10px;
        }
        .login-box button {
            background-color: #A3D9A5;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        .login-box button:hover {
            background-color: #8CCB8E;
        }
        .login-box .social-icons {
            margin-top: 20px;
        }
        .login-box .social-icons i {
            margin: 0 10px;
            cursor: pointer;
        }
  </style>
 </head>
 <body>
  <div class="navbar">
   <img alt="User Icon" src="https://placehold.co/40x40"/>
   <div>
    <a href="#">
     Beranda
    </a>
    <a href="#">
     Peta Lokasi
    </a>
    <a href="#">
     Riwayat Laporan
    </a>
    <a href="#">
     Edukasi
    </a>
    <a href="#">
     Hubungi Kami
    </a>
    <a href="#">
     Tentang Kami
    </a>
   </div>
   <div class="buttons">
    <button>
     Laporan Sampah
    </button>
    <button>
     Login
    </button>
   </div>
  </div>
  <div class="login-container">
   <div class="login-box">
    <h2>
     Masukan Informasi akun Anda untuk login :
    </h2>
    <label for="email">
     Email :
    </label>
    <input id="email" name="email" type="text"/>
    <label for="password">
     Password :
    </label>
    <input id="password" name="password" type="password"/>
    <div>
     <input id="remember" name="remember" type="checkbox"/>
     <label for="remember">
      Remember Password
     </label>
    </div>
    <button>
     Login
    </button>
    <div class="social-icons">
     <i class="fab fa-twitter">
     </i>
     <i class="fab fa-facebook-f">
     </i>
     <i class="fab fa-google">
     </i>
    </div>
   </div>
  </div>
 </body>
</html>
