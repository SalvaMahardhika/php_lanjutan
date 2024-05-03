<?php
session_start(); // Mulai sesi

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Jika pengguna belum login, redirect ke halaman login
    header("Location: login.php");
    exit;
}

// Jika pengguna sudah login, tampilkan halaman selamat datang
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>

<h1>Selamat datang, <?php echo $_SESSION['username']; ?>!</h1>
<p>Ini adalah halaman selamat datang setelah login.</p>
<p><a href="logout.php">Logout</a></p>

</body>
</html>
