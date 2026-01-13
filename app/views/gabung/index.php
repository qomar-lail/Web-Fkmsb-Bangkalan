
<div class="p-16">
    <?php if (!empty($error)) : ?>
    <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
        <?= $error ?>
    </div>
    <?php endif; ?>
    <h1>Gabung Bersama Kami</h1>
    <form method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" require>

        <label for="asal-sekolah">Asal Sekolah</label>
        <input type="text" id="asal-sekolah" name="asal-sekolah" require>

        <label for="angkatan">Angkatan</label>
        <input type="text" name="angkatan" id="angkatan" require>

        <label for="wa">WhatsApp</label>
        <input type="text" name="wa" id="wa">

        <button>Kirim</button>
        <a href="/PROJECT_FKMSB/public/">Kembali</a>
    </form>
</div>