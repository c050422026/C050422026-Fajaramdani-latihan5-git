<?php
session_start();

// Data pengguna yang diizinkan
$users = array(
    "Ali" => "password1",
    "Bona" => "password2",
    "Charlie" => "password3",
    "Dede" => "password4",
    "Emon" => "password5"
);

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah username ada dalam array dan password cocok
    if (array_key_exists($username, $users) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php"); // Ganti "welcome.php" dengan halaman selamat datang yang sesuai
        exit();
    } else {
        $error_message = "Username atau password salah";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Autentifikasi</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error_message)) { ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php } ?>

    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
