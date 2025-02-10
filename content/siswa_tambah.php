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
        <label for="nama_siswa">Nama</label>
        <div class="input">
            <input type="text" name="nama_siswa" id="nama_siswa" required>
        </div>
    </div>

    <div class="form-group">
        <label for="nis">NIS</label>
        <input type="number" name="nis" id="nis" required> 
    </div>

    <div class="form-group">
        <label for="tanggal">Tanggal Lahir</label>
        <div class="input">
            <input type="date" name="tanggal" id="tanggal" required>
        </div>
    </div>

    <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="radio" name="kelas" id="kelas" value="10" required>10
        <input type="radio" name="kelas" id="kelas" value="11" required>11
        <input type="radio" name="kelas" id="kelas" value="12" required>12
    </div>

<div class="form-group">
    <label for=""jurusan>Jurusan</label>
    <input type="radio" name="jurusan" id="jurusan" value="AKL" required>AKL
    <input type="radio" name="jurusan" id="jurusan" value="PPLG" required>PPLG
</div>

<div class="form-group">
    <label for=""jurusan>Jurusan</label>
    <input type="radio" name="gender" id="gender" value="L" required>Laki-laki
    <input type="radio" name="gender" id="gender" value="P" required>Perempuan
</div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="reset" value="Batal" class="tombol reset">
    </div>
</form>