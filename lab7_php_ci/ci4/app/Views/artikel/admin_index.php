<?= $this->include('template/header'); ?>

<div class="dashboard-header">
    <h2 class="page-title">Manajemen Artikel</h2>
    <a href="<?= base_url('/admin/artikel/add'); ?>" class="btn">
        <i class="fa-solid fa-plus"></i> Tambah Artikel
    </a>
</div>

<div class="search-box">
    <i class="fa-solid fa-search"></i>
    <input type="text" placeholder="Cari artikel...">
</div>

<table class="table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul & Cuplikan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($artikel):
            foreach ($artikel as $row): ?>
                <tr>
                    <td>#<?= $row['id']; ?></td>
                    <td>
                        <b style="color: #fff; font-size: 1.1rem;"><?= $row['judul']; ?></b>
                        <p style="font-size: 0.85rem; color: #aaa; margin-top: 5px;">
                            <?= substr($row['isi'], 0, 50); ?>...
                        </p>
                    </td>
                    <td>
                        <?php if ($row['status'] == 1): ?>
                            <span class="badge badge-success">Aktif</span>
                        <?php else: ?>
                            <span class="badge badge-warning">Draft</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?= base_url('/admin/artikel/edit/' . $row['id']); ?>" class="btn-icon btn-edit" title="Ubah">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="<?= base_url('/admin/artikel/delete/' . $row['id']); ?>" class="btn-icon btn-delete"
                            onclick="return confirm('Yakin hapus data?');" title="Hapus">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; else: ?>
            <tr>
                <td colspan="4">Belum ada data.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= $this->include('template/footer'); ?>