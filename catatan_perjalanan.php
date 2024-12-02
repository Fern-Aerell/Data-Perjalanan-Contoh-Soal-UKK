<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Perjalanan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 900px;
            box-sizing: border-box;
        }

        .logo {
            display: block;
            width: 200px;
            height: 200px;
            background-color: #D5A45D;
            border-radius: 50%;
            margin-bottom: 20px;
            flex-shrink: 0;
            background-image: url('foto_founder.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            animation: spin 50s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .kotak1 {
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: center;
            width: 100%;
        }

        .kotak2 {
            display: flex;
            flex-direction: column;
            width: 100%;
            text-align: center;
        }

        .kotak2 h1 {
            margin: 0;
            color: #4E3629;
            font-size: 2rem;
        }

        .kotak2 p {
            color: #6F4F28;
            font-size: 1.2rem;
            margin-top: 5px;
        }

        .kotak3 {
            display: flex;
            flex-direction: row;
            gap: 10px;
            justify-content: center;
            margin-top: 10px;
        }

        .kotak3 a {
            text-decoration: none;
            color: #6F4F28;
            font-weight: bold;
        }

        .kotak3 garis {
            color: #6F4F28;
        }

        .table-container {
            margin-top: 20px;
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #D5A45D;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #D5A45D;
            color: white;
        }

        .sorting {
            margin: 10px 0;
        }

        .sorting select {
            padding: 5px;
            border: 1px solid #D5A45D;
            border-radius: 5px;
        }

        .kotak2 button {
            padding: 12px 20px;
            border: 2px solid #6F4F28;
            background-color: #D5A45D;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .kotak2 button:hover {
            background-color: #6F4F28;
        }

        @media screen and (max-width: 768px) {
            .kotak1 {
                flex-direction: column;
                align-items: center;
                padding: 20px;
            }

            .kotak2 h1 {
                font-size: 1.8rem;
            }

            .kotak2 p {
                font-size: 1rem;
            }

            .kotak3 {
                flex-direction: column;
                align-items: center;
            }

            .kotak3 a {
                margin-bottom: 10px;
            }

            .kotak2 button {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="kotak1">
            <div class="logo"></div>
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
    </div>
    <script src="utils.js"></script>
</body>

</html>