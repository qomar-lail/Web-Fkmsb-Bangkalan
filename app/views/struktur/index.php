
<h1>Daftar Pengurus</h1>
<ul>
<?php foreach ($pengurus as $p): ?>
    <li>
        <?= $p['nama'] ?> - <?= $p['jabatan'] ?>
        <a href="/PROJECT_FKMSB/public/struktur/detail/<?= $p['id'] ?>">
            Detail
        </a>
        <a href="/PROJECT_FKMSB/public/struktur/hapus/<?= $p['id'] ?>"
            onclick = "return confirm('yakin mau hapus '.<?= $p['nama']?>.' ?')">
            Hapus
        </a>
        <a href="/PROJECT_FKMSB/public/struktur/edit/<?= $p['id'] ?>">
            Edit
        </a>
    </li>
<?php endforeach; ?>
</ul>


