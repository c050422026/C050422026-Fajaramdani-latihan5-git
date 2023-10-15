<!DOCTYPE html>
<html>
<head>
    <title>Link 2 - Halaman Utama</title>
</head>
<body>
    <header><center>
        <?php
        session_start();
        if (isset($_SESSION['username'])) {
            echo "<h1>{$_SESSION['username']}</h1>";
        } else {
            header("Location: hal_login.php");
        }
        ?>
    </header></center>
    <nav>
        <ul>
            <p><center><a href='Link1.php'>Link 1&nbsp;</a><a href='Link2.php'>Link 2&nbsp;</a><a href='Link3.php'>Link 3&nbsp;</a><a href="logout.php">Logout</a></center></p>
        </ul>
    </nav>
    <main>
        <h2><center>Ini adalah isi dari halaman Link 2</center></h2>
    </main>
</body>
</html>