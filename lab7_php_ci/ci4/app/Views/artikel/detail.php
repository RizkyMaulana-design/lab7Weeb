<?= $this->include('template/header_user'); ?>

<div class="article-detail" style="max-width: 900px; margin: 0 auto;">
    <h2
        style="margin-bottom: 30px; color: #bf953f; font-size: 2.5rem; text-align: center; text-shadow: 0 2px 10px rgba(0,0,0,0.5);">
        <?= $artikel['judul']; ?>
    </h2>

    <div
        style="background: rgba(255,255,255,0.05); padding: 40px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 10px 30px rgba(0,0,0,0.3);">

        <p style="font-size: 1.1rem; line-height: 1.8; color: #eee; text-align: justify;">
            <?= $artikel['isi']; ?>
        </p>

        <br><br>
        <hr style="border-color: rgba(255,255,255,0.1);">
        <br>

        <a href="<?= base_url('/artikel'); ?>" class="btn"
            style="background: linear-gradient(45deg, #555, #333); border: 1px solid rgba(255,255,255,0.2);">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar Berita
        </a>
    </div>
</div>

<?= $this->include('template/footer'); ?>