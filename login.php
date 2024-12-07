<?php
session_start();
include 'koneksi.php'; 

if (isset($_POST['login'])) {
    $requestUsername = $_POST['username'];
    $requestPassword = $_POST['password'];

    $stmt = $koneksi->prepare("SELECT id, username, password FROM tb_admin WHERE username = ?");
    $stmt->bind_param("s", $requestUsername);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashedPassword);
        $stmt->fetch();

        if (password_verify($requestPassword, $hashedPassword)) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            header('Location: dashboard.php');
            exit();
        } else {
            echo "<script>
                alert('Login gagal! Username atau password salah.');
                window.location = 'login.php';
            </script>";
        }
    } else {
        echo "<script>
            alert('Login gagal! Username atau password salah.');
            window.location = 'login.php';
        </script>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login - Wonosobo Connect</title>
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
                <li><a href="layanan/layanan.php">Layanan</a></li>
                <li><a href="berita.php">Berita</a></li>
                <li><a href="tentang.php">Tentang Kami</a></li>
                <li><a href="login.php">Login/Register</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section id="login">
            <h2>Login</h2>
            <form method="POST" action="login.php">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit" name="login">Login</button>
                
                <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
            </form>
        </section>
    </main>
    <script src="js/script.js"></script>
</body>
</html>
