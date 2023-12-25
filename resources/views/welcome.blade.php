<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Mahasiswa</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Quicksand', sans-serif;
        }
        .container {
            width: 100%;
            min-height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("https://iili.io/JRnO2I9.md.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover; 
            position: relative;
        }
        .row {
            width: 100%;
            padding: 0px 80px;
        }
       
        .navbar {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0px;
            position: relative;
            z-index: 1;
        }
       
        .navbar h1 {
            color: #ffffff;
            font-size: 35px;
            font-weight: 500;
            text-transform: uppercase;
            margin-top: 10px;
        }
        .content {
            width: 100%;
            min-height: 100vh;
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .content h1 {
            font-size: 45px;
            color: #ffffff;
            font-weight: 400;
        }
        .content p {
            font-size: 16px;
            color: #ffffff;
        }
        .content a {
            text-decoration: none;
            margin-top: 20px;
            font-size: 19px;
            display: inline-block;
            letter-spacing: 2px;
            padding: 12px 20px;
            background-color: rgb(69, 228, 38);
            border-radius: 5px;
            color: #ffffff;
        }
        .content a:hover {
            background-color: rgb(12, 128, 33);
        }
        span {
            color: rgb(69, 228, 38); 
        }

    </style>
  </head>
  <body>
  <div class="container">
    <div class="row">
        <nav class="navbar">
            <h1>emteka<span>23</span></h1>
        </nav>
        <div class="content">
            <h1>Website Data Mahasiswa</h1>
            <p>Pendidikan Matematika Untirta Angkatan 2023.</p>
            <a href="{{ url('mahasiswa') }}">Lihat Data</a>
        </div>
    </div>
  </div>
  
</body>
</html>
