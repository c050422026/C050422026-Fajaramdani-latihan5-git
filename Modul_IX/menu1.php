<?php
session_start();

// Mengecek apakah pengguna sudah login atau belum
if (isset($_SESSION['login'])) {
    $nama = $_SESSION['login'];
	echo "<center>";
} else {
    header("location: proses_login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu 1</title>
</head>
<body>
    <h1>Halaman Menu 1</h1>
    <p>Selamat datang, <?php echo $nama; ?></p>
    <p>Ini adalah konten dari Menu 1.</p>
    <p><a href="?aksi=logout">Logout</a></p>
</body>
</html>