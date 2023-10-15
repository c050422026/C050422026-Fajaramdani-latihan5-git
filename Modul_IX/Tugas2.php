<!DOCTYPE html>
<html>
<head>
    <title>Contoh Aplikasi Web</title>
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
        .login-form {
            text-align: center; /* Mengatur teks ke tengah */
            margin: 0 auto;
            width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f7f7f7;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Aplikasi Web Kami</h1>
    </header>
    <main>
        <h2 style="text-align: center;">Silakan Login</h2>
        <div class="login-form">
            <form method="post" action="hal_login.php">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" value="fajar123" required><br><br>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" value="123fajar" required><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </main>
    <footer>
        <p>@fajarmdn</p>
    </footer>
</body>
</html>





