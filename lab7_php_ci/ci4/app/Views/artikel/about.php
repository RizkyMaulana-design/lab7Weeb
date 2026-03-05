<?= $this->include('template/header_user'); ?>

<div class="about-container" style="text-align: center; max-width: 800px; margin: 0 auto;">

    <h2
        style="font-size: 2.5rem; color: #bf953f; margin-bottom: 30px; text-shadow: 0 0 10px rgba(191, 149, 63, 0.5); text-transform: uppercase; letter-spacing: 2px;">
        Tentang Kami
    </h2>

    <div
        style="background: rgba(255,255,255,0.05); padding: 50px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.1); backdrop-filter: blur(10px); box-shadow: 0 20px 40px rgba(0,0,0,0.4);">

        <h3 style="color: #1cb5e0; margin-bottom: 20px; font-size: 1.5rem;">Visi & Misi</h3>

        <p style="font-size: 1.1rem; line-height: 1.8; color: #eee; margin-bottom: 40px; text-align: justify;">
            <b>Portal Berita Teknologi</b> hadir sebagai sumber informasi terdepan mengenai inovasi digital,
            perkembangan software, dan tren desain masa depan. Kami berkomitmen menyajikan konten berkualitas tinggi
            yang edukatif dan inspiratif bagi para penggiat teknologi di Indonesia.
        </p>

        <hr style="border: none; border-top: 1px solid rgba(255,255,255,0.1); margin: 30px 0;">

        <h3 style="color: #bf953f; margin-bottom: 25px; font-size: 1.5rem;">Struktur Tim</h3>

        <div style="display: flex; justify-content: space-around; flex-wrap: wrap; gap: 20px;">
            <div
                style="background: rgba(0,0,0,0.2); padding: 15px 25px; border-radius: 30px; border: 1px solid rgba(191, 149, 63, 0.3);">
                <span style="color: #fff; font-weight: 600;">Chief Executive Officer</span>
            </div>
            <div
                style="background: rgba(0,0,0,0.2); padding: 15px 25px; border-radius: 30px; border: 1px solid rgba(191, 149, 63, 0.3);">
                <span style="color: #fff; font-weight: 600;">Lead Developer</span>
            </div>
            <div
                style="background: rgba(0,0,0,0.2); padding: 15px 25px; border-radius: 30px; border: 1px solid rgba(191, 149, 63, 0.3);">
                <span style="color: #fff; font-weight: 600;">UI/UX Designer</span>
            </div>
        </div>

    </div>
</div>

<?= $this->include('template/footer'); ?>