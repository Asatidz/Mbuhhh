<?php
if(!defined('INDEX')) die();
?>

<h2 class="judul">Tambah Pegawai</h2>
<form action="?hal=siswa_insert" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="foto">Foto</label>
        <div class="input">
            <input type="file" name="foto" id="foto">
        </div>
    </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input">
            <input type="text" name="nama" id="nama">
        </div>
    </div>

    <div class="form-group">
        <label for="nis">NIS</label>
        <input type="number" name="nis" id="nis"> 
    </div>

    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <div class="input">
            <input type="date" name="tanggal" id="tanggal">
        </div>
    </div>

        <div class="form-group">
        <label for="kelas">Tanggal</label>
        <div class="input">
<select name="kelas" id="kelas">
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
</select>
        </div>
    </div>

            <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <div class="input">
<select name="jurusan" id="jurusan">
    <option value="AKL">AKL</option>
    <option value="PPLG">PPLG</option>
</select>
        </div>
    </div>

            <div class="form-group">
        <label for="gender">Tanggal</label>
        <div class="input">
<select name="gender" id="gender">
    <option value="L">Laki-Laki</option>
    <option value="P">Perempuan</option>
</select>
        </div>
    </div>
 


    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="reset" value="Batal" class="tombol reset">
    </div>
</form>