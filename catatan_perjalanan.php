<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="foto_founder.jpg" type="image/x-icon">
    <title>Catatan Perjalanan</title>
    <link rel="stylesheet" href="catatan_perjalanan.css">
    <link rel="stylesheet" href="anim.css">
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
                <br>
                <div class="sorting">
                    <label for="sort">Urutkan berdasarkan:</label>
                    <select id="sort">
                        <option value="tanggal">Tanggal</option>
                        <option value="waktu">Waktu</option>
                        <option value="lokasi">Lokasi</option>
                        <option value="suhu">Suhu Tubuh</option>
                    </select>
                </div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Lokasi</th>
                                <th>Suhu Tubuh</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2023-10-01</td>
                                <td>08:00</td>
                                <td>Jakarta</td>
                                <td>36.5°C</td>
                            </tr>
                            <tr>
                                <td>2023-10-02</td>
                                <td>09:00</td>
                                <td>Bandung</td>
                                <td>37.0°C</td>
                            </tr>
                            <tr>
                                <td>2023-10-03</td>
                                <td>10:00</td>
                                <td>Yogyakarta</td>
                                <td>36.8°C</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
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