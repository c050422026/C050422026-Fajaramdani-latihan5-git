<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Anda harus menggantinya dengan logika otentikasi yang sesuai
    if ($input_username === "fajar123" && $input_password === "123fajar") {
        $_SESSION['username'] = $input_username;
        header("Location: hal_login.php"); // Mengarahkan ke halaman selanjutnya setelah login berhasil
        exit();
    } else {
        // Jika login gagal, mungkin Anda ingin menampilkan pesan kesalahan.
        // Anda bisa mengarahkan kembali ke halaman login dengan pesan kesalahan.
        header("Location: Tugas2.php");
        exit();
    }
}

// Jika tidak ada permintaan POST (sebelum pengguna menekan tombol "Submit"), maka Anda mungkin ingin menangani itu sesuai kebutuhan Anda.
?>
<html>
<head>
    <title>Halaman Setelah Login</title>
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
    </header>
    <main>
        <h2><center>Pilihan Link</center></h2>
        <ul>
            <p><center><a href='Link1.php'>Link 1&nbsp;</a><a href='Link2.php'>Link 2&nbsp;</a><a href='Link3.php'>Link 3&nbsp;</a><a href="logout.php">Logout</a></center></p>
        </ul>
        <p><center>Anda telah berhasil login</center></p>
    </main>
    <footer>
        <p><center>@fajarmdn</center></p>
    </footer>
</body>
</html>



