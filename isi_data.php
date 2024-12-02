<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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

        .form-container {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .form-container label {
            margin: 10px 0 5px;
            color: #4E3629;
        }

        .form-container input {
            padding: 10px;
            border: 1px solid #D5A45D;
            border-radius: 8px;
            width: 80%;
            max-width: 400px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .form-container button {
            padding: 12px 20px;
            border: 2px solid #6F4F28;
            background-color: #D5A45D;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container button:hover {
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

            .form-container input {
                font-size: 14px;
                padding: 8px;
            }

            .form-container button {
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
    </div>
</body>
</html>