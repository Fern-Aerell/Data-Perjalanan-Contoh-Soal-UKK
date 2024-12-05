<?php

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nik']) && isset($_POST['nama_lengkap'])) {
    $nik = $_POST['nik'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $users_folder_path = 'users';
    $user_file_path = "$users_folder_path/$nik.txt";

    if(!is_dir($users_folder_path)) {
        mkdir($users_folder_path, 0755, true);
    }

    if(file_exists($user_file_path)) {
        session_start();
        $_SESSION['fail_message'] = "Nik sudah digunakan.";
        $_SESSION['nik'] = $nik;
        $_SESSION['nama_lengkap'] = $nama_lengkap;
        header('Location:register.php');
        die;
    }

    session_start();
    if(file_put_contents($user_file_path, "$nik\n$nama_lengkap")) {
        $_SESSION['success_message'] = "Berhasil membuat user.";
        header('Location:login.php');
        die;
    }else{
        $_SESSION['fail_message'] = "Gagal membuat user.";
        $_SESSION['nik'] = $nik;
        $_SESSION['nama_lengkap'] = $nama_lengkap;
        header('Location:register.php');
        die;
    }
}

session_start();
$_SESSION['fail_message'] = "Terjadi kesalahan saat membuat user.";
$_SESSION['nik'] = $nik;
$_SESSION['nama_lengkap'] = $nama_lengkap;
header('Location:register.php');
die;