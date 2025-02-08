<?php
if(!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah Jabatan</h2>
<form action="?hal=pelanggaran_insert" method="post">
    
    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input">
            <input type="text" name="nama" id="nama">
        </div>
    </div>

        <div class="form-group">
        <label for="jenis">Jenis Pl</label>
        <div class="input">
            <select name="jenis" id="jenis">
                <option value="ringan">Ringan</option>
                <option value="sedang">Sedang</option>
                <option value="berat">Berat</option>
            </select>
        </div>
    </div>

        <div class="form-group">
        <label for="poin">Poin</label>
        <div class="input">
            <input type="number" name="poin" id="poin" required>
        </div>
    </div>

        <div class="form-group">
        <label for="kode">Kode Pl</label>
        <div class="input">
            <input type="number" name="kode" id="kode" require>
        </div>
    </div>


    <div class="form-group">
        <input type="reset" value="Reset" class="tombol reset">
        <input type="submit" value="Simpan" class="tombol simpan">
    </div>
</form>