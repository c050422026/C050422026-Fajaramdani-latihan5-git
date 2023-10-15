<?php
session_start();
session_destroy(); // Hapus semua data sesi
header("Location: Tugas2.php"); // Redirect ke halaman login
?>



<html>
<head>
    <title>Halaman Logout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        main {
            padding: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1><center>Anda telah logout</center></h1>
    </header>
    <main>
        <p><center>Terima kasih atas kunjungan Anda. Anda telah logout dari akun Anda</center></p>
		 <a href="logout.php">
    </main>
    <footer>
        <p><center>@fajarmdn</center></p>
    </footer>
</body>
</html>

