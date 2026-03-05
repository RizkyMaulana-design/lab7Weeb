<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div id="container">
        <header>
            <h1>Portal Berita Teknologi</h1>
            <p style="text-align: center; color: #aaa; font-size: 0.9rem; margin-top: 5px;">
                Halo, <b><?= session()->get('username'); ?></b>!
            </p>
        </header>
        <nav>
            <a href="<?= base_url('/artikel'); ?>" class="<?= uri_string() == 'artikel' ? 'active' : '' ?>">Berita
                Terkini</a>

            <a href="<?= base_url('/artikel/about'); ?>"
                class="<?= uri_string() == 'artikel/about' ? 'active' : '' ?>">Tentang Kami</a>

            <a href="<?= base_url('/artikel/contact'); ?>"
                class="<?= uri_string() == 'artikel/contact' ? 'active' : '' ?>">Kontak</a>

            <?php if (session()->get('role') == 'admin'): ?>
                <a href="<?= base_url('/admin/artikel'); ?>"
                    style="background: rgba(46, 204, 113, 0.2); color: #2ecc71; border: 1px solid #2ecc71;">
                    <i class="fa-solid fa-user-shield"></i> Area Admin
                </a>
            <?php endif; ?>

            <a href="<?= base_url('/logout'); ?>"
                style="float: right; background: rgba(231, 76, 60, 0.2); color: #e74c3c;">
                <i class="fa-solid fa-power-off"></i> Logout
            </a>
        </nav>
        <section id="wrapper">
            <section id="main">