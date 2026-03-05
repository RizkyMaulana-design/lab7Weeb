<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login - Portal Berita</title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* CSS Khusus Login agar di tengah */
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
            <h2 style="color: #bf953f; margin-bottom: 20px;">LOGIN USER</h2>

            <?php if (session()->getFlashdata('msg')): ?>
                <div
                    style="background: rgba(231, 76, 60, 0.2); color: #e74c3c; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('/login/process'); ?>" method="post">
                <div style="margin-bottom: 15px;">
                    <input type="text" name="username" placeholder="Username" required
                        style="width: 100%; padding: 12px; border-radius: 30px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: white;">
                </div>
                <div style="margin-bottom: 20px;">
                    <input type="password" name="password" placeholder="Password" required
                        style="width: 100%; padding: 12px; border-radius: 30px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: white;">
                </div>
                <button type="submit" class="btn"
                    style="width: 100%; border-radius: 30px; background: linear-gradient(45deg, #bf953f, #fcf6ba); color: #000; font-weight: bold;">MASUK</button>
            </form>

            <p style="margin-top: 20px; color: #aaa;">
                Belum punya akun? <a href="<?= base_url('/register'); ?>" style="color: #1cb5e0;">Daftar di sini</a>
            </p>
            <p style="margin-top: 10px;">
                <a href="<?= base_url('/artikel'); ?>" style="color: #aaa; font-size: 0.8rem;">&laquo; Kembali ke
                    Website</a>
            </p>
        </div>
    </div>
</body>

</html>