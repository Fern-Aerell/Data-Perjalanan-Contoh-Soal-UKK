<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="foto_founder.jpg" type="image/x-icon">
    <title>Register</title>
    <link rel="stylesheet" href="auth.css">
</head>

<body>
    <div class="container">
        <h2>Register</h2>
        <form action="tambah_akun.php" method="post">
            <?php 
                if(isset($_SESSION['fail_message'])) {
                    echo '<p class="fail_message">'.$_SESSION['fail_message'].'</p>';
                }
            ?>
            <input type="number" value="<?= isset($_SESSION['nik']) ? $_SESSION['nik'] : '' ?>" name="nik" placeholder="NIK" required>
            <input type="text" value="<?= isset($_SESSION['nama_lengkap']) ? $_SESSION['nama_lengkap'] : '' ?>" name="nama_lengkap" placeholder="Nama Lengkap" required>
            <div class="button-container">
                <button onclick="redirect('login.php')" type="button">Saya Sudah Memiliki Akun</button>
                <button type="submit">Daftar</button>
            </div>
        </form>
        <p class="footer-text">©2024 PT. Eric Cucu Nenek Indonesia.</p>
    </div>

    <script src="utils.js"></script>
</body>

</html>

<?php 
session_destroy();
?>