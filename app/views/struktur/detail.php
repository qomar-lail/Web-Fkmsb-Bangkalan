<h1 class="pt-16">Detail Pengurus</h1>
<?php foreach($pengurus as $p): ?>
    <p>Nama: <?= $p['nama'] ?></p>
    <p>Jabatan: <?= $p['jabatan'] ?></p>
    <p>Divisi: <?= $p['divisi'] ?></p>
<?php endforeach ?>
<a href="/PROJECT_FKMSB/public/struktur">Kembali</a>
