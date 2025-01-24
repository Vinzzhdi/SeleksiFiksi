<?php
session_start();
include 'koneksi.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    
    $query = "SELECT * FROM user WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($koneksi, $query);
    
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    $cek = mysqli_num_rows($result);
    
    if ($cek > 0) {
        $data = mysqli_fetch_assoc($result);
        
        // Simpan data pengguna ke dalam sesi
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['password'] = $data['password'];

        // Arahkan ke halaman dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        $_SESSION['error'] = "Email atau password salah.";
        header("Location: login.php");
        exit();
    }

    mysqli_stmt_close($stmt);
} else {
    $_SESSION['error'] = "Harap masukkan email dan password.";
    header("Location: login.php");
    exit();
}
?>
