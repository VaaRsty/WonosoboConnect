<?php 
include 'koneksi.php'; 

if (isset($_POST['register'])) {
    $name = $_POST['name']; 
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    if ($password !== $confirm_password) {
        echo "<script>alert('Password dan konfirmasi password tidak cocok!'); window.location = 'register.php';</script>";
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT * FROM tb_admin WHERE username = '$username' OR email = '$email'";
    $result = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Username atau email sudah terdaftar!'); window.location = 'register.php';</script>";
    } else {
        $sql = "INSERT INTO tb_admin (nama_lengkap, email, username, password) 
                VALUES ('$name', '$email', '$username', '$hashed_password')";
        if (mysqli_query($koneksi, $sql)) {
            echo "<script>alert('Registrasi berhasil! Silahkan login.'); window.location = 'login.php';</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan saat registrasi. Coba lagi.'); window.location = 'register.php';</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Register - Wonosobo Connect</title>
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
        <section id="register">
            <h2>Register</h2>
            <form method="POST" action="register.php">
                <label for="name">Nama Lengkap:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                
                <label for="confirm-password">Konfirmasi Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
                
                <button type="submit" name="register">Daftar</button>
                
                <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
            </form>
        </section>
    </main>
    <div id="toast" class="toast"></div>
    <script src="js/script.js"></script>
</body>
</html>
