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
            <h1>Admin Portal Berita</h1>
        </header>
        <nav>
            <a href="<?= base_url('/admin/artikel'); ?>" class="active">Dashboard</a>
            <a href="<?= base_url('/artikel'); ?>">Lihat Website</a>
            <a href="<?= base_url('/admin/artikel/add'); ?>">Tambah Artikel</a>
        </nav>
        <section id="wrapper">
            <section id="main">