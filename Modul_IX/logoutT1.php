<?php
session_start();

// Hapus semua data sesi
session_destroy();

// Redirect kembali ke halaman login
header("Location: welcome.php"); // Gantilah "index.php" dengan halaman login yang sesuai
exit();
?>
