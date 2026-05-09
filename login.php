<?php
// Memulai session untuk menyimpan status login jika diperlukan di masa depan
session_start();

$error = "";

// Memeriksa apakah form telah dikirimkan (metode POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Logika validasi sesuai permintaan: username 'sohibul' dan pw '123'
    if ($username === 'sohibul' && $password === '123') {
        // Jika benar, arahkan ke index.html
        header("Location: index.html");
        exit();
    } else {
        // Jika salah, tampilkan pesan error
        $error = "Username atau Password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sohibul Akbar Portfolio</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <style>
        :root {
            --primary-color: #2563eb;
            --dark-color: #0f172a;
            --light-bg: #f8fafc;
            --text-muted: #64748b;
            --error-color: #dc2626;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-bg);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            background: radial-gradient(circle at top right, rgba(37, 99, 235, 0.1), transparent),
                        radial-gradient(circle at bottom left, rgba(37, 99, 235, 0.1), transparent);
        }

        .login-card {
            background: white;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
            width: 100%;
            max-width: 420px;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header h2 {
            font-weight: 800;
            letter-spacing: -1px;
            color: var(--dark-color);
            margin-bottom: 8px;
        }

        .login-header p {
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        .form-label {
            font-weight: 600;
            font-size: 0.9rem;
            color: var(--dark-color);
            margin-bottom: 8px;
        }

        .form-control {
            padding: 12px 16px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
        }

        .btn-login {
            background-color: var(--primary-color);
            color: white;
            width: 100%;
            padding: 14px;
            border-radius: 12px;
            font-weight: 600;
            border: none;
            margin-top: 10px;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
            color: white;
        }

        .error-msg {
            background-color: #fef2f2;
            color: var(--error-color);
            padding: 12px;
            border-radius: 10px;
            font-size: 0.85rem;
            margin-bottom: 20px;
            border: 1px solid #fee2e2;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .brand-logo {
            color: var(--primary-color);
            font-weight: 800;
            font-size: 1.5rem;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
        }

        .back-home {
            position: absolute;
            top: 20px;
            left: 20px;
            color: var(--text-muted);
            text-decoration: none;
            display: flex;
            align-items: center;
            font-weight: 500;
            transition: color 0.2s;
        }

        .back-home:hover {
            color: var(--primary-color);
        }
    </style>
</head>
<body>

    <a href="index.html" class="back-home">
        <i data-lucide="arrow-left" class="me-2" style="width: 18px;"></i> Kembali ke Beranda
    </a>

    <div class="login-card">
        <div class="login-header">
            <h2>Selamat Datang</h2>
            <p>Admin Portofolio Sohibul Akbar</p>
        </div>

        <!-- Menampilkan pesan error jika login gagal -->
        <?php if ($error): ?>
            <div class="error-msg">
                <i data-lucide="alert-circle" style="width: 16px;"></i>
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <div class="mb-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username" required>
            </div>
            
            <div class="mb-4">
                <div class="d-flex justify-content-between align-items-center">
                    <label for="password" class="form-label">Kata Sandi</label>
                </div>
                <input type="password" class="form-control" name="password" id="password" placeholder="••••••••" required>
            </div>

            <button type="submit" class="btn-login">Masuk Sekarang</button>
        </form>

        <div class="text-center mt-4">
            <p class="text-muted small">IIB Darmajaya - Sistem Komputer</p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>