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
            <form id="register-form" onsubmit="handleRegister(event)">
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
                
                <button type="submit">Daftar</button>
                
                <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
            </form>
        </section>
    </main>
    <div id="toast" class="toast"></div>
    <script src="js/script.js"></script>
</body>
</html>