<h1>Tambah Karya Ilmiah</h1>

<form action="/PROJECT_FKMSB/public/admin/karya/simpan" method="post" enctype="multipart/form-data">
    <p>
        <label>Judul Karya</label><br>
        <input type="text" name="judul">
    </p>

    <p>
        <label>Penulis</label><br>
        <input type="text" name="penulis">
    </p>

    <p>
        <label>Angkatan</label><br>
        <input type="text" name="angkatan">
    </p>

    <p>
        <label>Isi Karya</label><br>
        <textarea name="isi" rows="5"></textarea>
    </p>

    <p>
        <label>Foto Karya</label><br>
        <input type="file" name="foto">
    </p>

    <button type="submit">Simpan</button>
</form>

<br>
<a href="/PROJECT_FKMSB/public/admin/karya">← Kembali</a>
