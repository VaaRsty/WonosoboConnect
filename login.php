<?php
session_start();

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['login_success'] = "Login berhasil! Selamat datang, $username.";

    header("Location: layanan.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login/Register - Wonosobo Connect</title>
</head>
<body>
    <header>
        <div class="logo">
            <p class="wonosobo-connect">
                <span class="text-wonosobo">Wonosobo</span><br />
                <span class="text-connect">Connect</span>
            </p>   
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="layanan.php">Layanan</a></li>
                <li><a href="berita.php">Berita</a></li>
                <li><a href="tentang.php">Tentang Kami</a></li>
                <li><a href="login.php">Login/Register</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section id="login">
            <h2>Login/Register</h2>
            <?php if ($error): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
            <form id="login-form" method="POST" action="login.php">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Login</button>
                
                <p>Belum punya akun? <a href="register.php">Register</a></p> 
            </form>
        </section>
    </main>
    <div id="toast" class="toast"></div>
    <script src="js/script.js"></script>
</body>
</html>
