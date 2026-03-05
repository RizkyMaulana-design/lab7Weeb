<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar - Portal Berita</title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .login-box {
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <div id="container" style="padding: 40px; margin: 0;">
            <h2 style="color: #1cb5e0; margin-bottom: 20px;">DAFTAR AKUN</h2>

            <form action="<?= base_url('/register/process'); ?>" method="post">
                <div style="margin-bottom: 15px;">
                    <input type="text" name="username" placeholder="Buat Username" required
                        style="width: 100%; padding: 12px; border-radius: 30px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: white;">
                </div>
                <div style="margin-bottom: 20px;">
                    <input type="password" name="password" placeholder="Buat Password" required
                        style="width: 100%; padding: 12px; border-radius: 30px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: white;">
                </div>
                <button type="submit" class="btn"
                    style="width: 100%; border-radius: 30px; background: linear-gradient(45deg, #1cb5e0, #000851); color: #fff; font-weight: bold;">BUAT
                    AKUN</button>
            </form>

            <p style="margin-top: 20px; color: #aaa;">
                Sudah punya akun? <a href="<?= base_url('/login'); ?>" style="color: #bf953f;">Login di sini</a>
            </p>
        </div>
    </div>
</body>

</html>