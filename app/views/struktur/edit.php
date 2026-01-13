<h1 class="pt-16">Edit Pengurus</h1>


<form action="/PROJECT_FKMSB/public/struktur/update" method="post">
    <?php foreach($pengurus as $p ):?>
        <input type="hidden" name="id" value="<?= $p['id']; ?>">

        <input type="text" name="nama"
            value="<?= $p['nama']; ?>" required>

        <input type="text" name="jabatan"
            value="<?= $p['jabatan']; ?>" required>
        
            <input type="text" name="divisi"
            value="<?= $p['divisi']; ?>" required>

        <input type="text" name="angkatan"
            value="<?= $p['angkatan']; ?>" required>

        <button type="submit">Update</button>
    <?php endforeach ?>
</form>
