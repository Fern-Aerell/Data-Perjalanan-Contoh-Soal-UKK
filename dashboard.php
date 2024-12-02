<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="anim.css">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="container">
        <div class="kotak1">
            <div class="logo spin"></div>
            <div class="kotak2">
                <h1>PEDULI DIRI</h1>
                <p>Catatan Perjalanan</p>
                <div class="kotak3">
                    <a href="dashboard.php">Home</a>
                    <garis>|</garis>
                    <a href="catatan_perjalanan.php">Catatan Perjalanan</a>
                    <garis>|</garis>
                    <a href="isi_data.php">Isi Data</a>
                    <garis>|</garis>
                    <a href="login.php">Logout</a>
                </div>
                <kotakaja>
                    Selamat Datang nama user di aplikasi peduli diri
                </kotakaja>
                <div>
                    <button onclick="redirect('isi_data.php')" type="button">Isi catatan perjalanan</button>
                </div>
            </div>
        </div>
        <br>
        <p>©2024 PT. Eric Cucu Nenek Indonesia.</p>
    </div>
    <script src="utils.js"></script>
    <audio autoplay loop>
        <source src="/music.mp3" type="audio/mpeg">
    </audio>
</body>
</html>
