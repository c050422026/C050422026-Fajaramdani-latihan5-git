<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: Tugas1.php"); // Jika belum login, arahkan kembali ke halaman login
    exit();
}

$welcome_message = "Selamat datang, " . $_SESSION['username'] . "!";
echo "<center>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <p><?php echo $welcome_message; ?></p>
    
    <p><a href="logout.php">Logout</a></p> <!-- Tambahkan tautan logout ke halaman logout.php -->
</body>
</html>
