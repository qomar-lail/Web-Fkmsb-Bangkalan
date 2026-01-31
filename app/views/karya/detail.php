<h1 class="pt-16"><?= $data['judul']; ?></h1>

<img src="/PROJECT_FKMSB/public/uploads/karya/<?php $data["foto"] ?>" alt="" width="150">

<p>
    <strong>Penulis:</strong> <?= $data['penulis']; ?><br>
    <strong>Angkatan:</strong> <?= $data['angkatan']; ?>
</p>

<hr>

<p>
    <?= $data['isi']; ?>
</p>

<a href="/PROJECT_FKMSB/public/karya">← Kembali ke daftar karya</a>
