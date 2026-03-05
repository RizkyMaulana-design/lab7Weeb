<?= $this->include('template/header_user'); ?>

<div class="contact-container"
    style="max-width: 900px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: start;">

    <div
        style="background: rgba(0,0,0,0.3); padding: 30px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.05);">
        <h2 style="color: #1cb5e0; margin-bottom: 20px;">Hubungi Kami</h2>
        <p style="color: #ccc; margin-bottom: 30px; line-height: 1.6;">
            Punya pertanyaan seputar teknologi atau ingin bekerja sama? Jangan ragu untuk mengirim pesan kepada kami.
        </p>

        <div style="margin-bottom: 20px;">
            <i class="fa-solid fa-location-dot" style="color: #bf953f; width: 30px;"></i>
            <span style="color: #fff;">Jl. Inspeksi Kalimalang, Cikarang Pusat</span>
        </div>
        <div style="margin-bottom: 20px;">
            <i class="fa-solid fa-envelope" style="color: #bf953f; width: 30px;"></i>
            <span style="color: #fff;">official@pelitabangsa.ac.id</span>
        </div>
        <div style="margin-bottom: 20px;">
            <i class="fa-brands fa-whatsapp" style="color: #bf953f; width: 30px;"></i>
            <span style="color: #fff;">+62 812-3456-7890</span>
        </div>
    </div>

    <div
        style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
        <h3 style="color: #fff; margin-bottom: 20px;">Kirim Pesan</h3>
        <form>
            <div style="margin-bottom: 15px;">
                <input type="text" placeholder="Nama Lengkap"
                    style="width: 100%; padding: 12px; border-radius: 10px; background: rgba(0,0,0,0.4); border: 1px solid rgba(255,255,255,0.2); color: #fff;">
            </div>
            <div style="margin-bottom: 15px;">
                <input type="email" placeholder="Alamat Email"
                    style="width: 100%; padding: 12px; border-radius: 10px; background: rgba(0,0,0,0.4); border: 1px solid rgba(255,255,255,0.2); color: #fff;">
            </div>
            <div style="margin-bottom: 20px;">
                <textarea rows="4" placeholder="Tulis pesan Anda..."
                    style="width: 100%; padding: 12px; border-radius: 10px; background: rgba(0,0,0,0.4); border: 1px solid rgba(255,255,255,0.2); color: #fff;"></textarea>
            </div>
            <button type="button" class="btn" style="width: 100%; border-radius: 30px; font-weight: bold;">
                <i class="fa-solid fa-paper-plane"></i> KIRIM SEKARANG
            </button>
        </form>
    </div>

</div>

<?= $this->include('template/footer'); ?>