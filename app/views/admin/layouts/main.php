<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $data['judul'] ?? 'Admin'; ?></title>
</head>
<body>

<nav>
    <a href="/admin">Dashboard</a> |
    <a href="/admin/proker">Proker</a> |
    <a href="/">Lihat Website</a>
</nav>

<hr>

<?= $content ?>

<hr>
<footer>
    <small>Admin FKMSB</small>
</footer>

</body>
</html>
