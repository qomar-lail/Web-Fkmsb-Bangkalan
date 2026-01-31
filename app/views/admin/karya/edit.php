<h1>halaman edit admin</h1>

<form action="/PROJECT_FKMSB/public/admin/" method="POST" enctype="multipart/form-data">
    <?php foreach($karya as $k): ?>
        <tr>
            <td>label : </td>
            <td><input type="text" name="judul" value="<?= $k["judul"] ?? '' ?>">judul</td>
        </tr>
        <tr>
            <td>label : </td>
            <td><input type="text" name="penulis" value="<?= $k["penulis"] ?? '' ?>">penulis</td>
        </tr>
        <tr>
            <td>label : </td>
            <td><input type="text" name="angkatan" value="<?= $k["angkatan"] ?? '' ?>">angkatan</td>
        </tr>
        <tr>
            <td>label : </td>
            <td><textarea name="isi" value="<?= $k["isi"] ?? '' ?>">isi</textarea></td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="foto_lama" value="<?= $k["foto"] ?>">
            </td>
            <td></td>
        </tr>
        <tr>
            <td><label>Foto Lama</label></td><br>
            <td><img src="/PROJECT_FKMSB/public/uploads/karya/<?= $data['karya']['foto']; ?>" 
            width="120"></td>
        </tr>
        <tr>
            <td><label for="">ganti foto (opsional)</label></td>
            <input type="file" name="foto">
        </tr>
        <button type="submit">Update</button>
    <?php endforeach ?>
</form>