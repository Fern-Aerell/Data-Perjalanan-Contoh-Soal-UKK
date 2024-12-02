<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="anim.css">
    <link rel="stylesheet" href="isi_data.css">
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
                <div class="form-container">
                    <label for="date">Tanggal:</label>
                    <input type="date" id="date" name="date">
                    <label for="time">Jam:</label>
                    <input type="time" id="time" name="time">
                    <label for="location">Lokasi:</label>
                    <input type="text" id="location" name="location" placeholder="Enter location">
                    <label for="bodyTemperature">Suhu Tubuh:</label>
                    <input type="text" id="bodyTemperature" name="bodyTemperature" placeholder="Enter body temperature">
                    <button type="submit">Simpan</button>
                </div>
            </div>
        </div>
        <br>
        <p>©2024 PT. Eric Cucu Nenek Indonesia.</p>
    </div>
    <audio autoplay loop>
        <source src="/music.mp3" type="audio/mpeg">
    </audio>
</body>
</html>