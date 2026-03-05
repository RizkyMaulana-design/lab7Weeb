<?= $this->include('template/header'); ?>

<h2>Tambah Artikel</h2>
<form action="" method="post">
    <p><input type="text" name="judul" placeholder="Judul Artikel" style="width:100%"></p>
    <p><textarea name="isi" cols="50" rows="10" placeholder="Isi Artikel" style="width:100%"></textarea></p>
    <p><input type="submit" value="Kirim" class="btn btn-large"></p>
</form>

<?= $this->include('template/footer'); ?>