<?= $this->include('template/header_user'); ?>

<div class="user-header" style="text-align: center; margin-bottom: 50px;">
    <h2 style="font-size: 2.5rem; color: #bf953f; text-shadow: 0 4px 10px rgba(0,0,0,0.5);">Berita Terbaru</h2>
    <p style="color: #aaa;">Informasi terkini teknologi dan desain masa depan</p>
</div>

<div class="article-grid">

    <?php if ($artikel):
        foreach ($artikel as $row): ?>

            <div class="article-card">
                <div class="card-icon">
                    <i class="fa-solid fa-newspaper"></i>
                </div>

                <h3><?= $row['judul']; ?></h3>

                <p class="meta">
                    <i class="fa-regular fa-clock"></i> <?= date('d M Y'); ?>
                </p>

                <p class="excerpt">
                    <?= substr($row['isi'], 0, 100); ?>...
                </p>

                <a href="<?= base_url('/artikel/' . $row['slug']); ?>" class="btn-read">
                    Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

        <?php endforeach; else: ?>

        <div style="width: 100%; text-align: center; color: #fff;">
            <h3>Belum ada artikel.</h3>
        </div>

    <?php endif; ?>

</div>

<?= $this->include('template/footer'); ?>