
<?php
if(!defined('INDEX')) die();

$id = $_GET['id'];
$query = "SELECT * FROM siswa WHERE id_siswa = '$id'";
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);
?>

<h2 class="judul">Edit Pegawai</h2>
<form action="?hal=siswa_update" method="post" enctype="multipart/form-data">

    <!-- Input ID -->
    <input type="hidden" name="id" value="<?=$data['id_siswa']?>">

    <!-- Input Foto -->
    <div class="form-group">
        <label for="foto">Foto</label>
        <div class="input">
            <input type="file" name="foto" id="foto">
            <img src="images/<?=$data['foto']?>" width="100"  alt="">
        </div>
    </div>

    <!-- Input Nama -->

    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input">
            <input type="text" name="nama_siswa" id="nama_siswa" value="<?=$data['nama_siswa']?>">
        </div>
    </div>

    <!-- Input Gender -->
    <div class="form-group">
        <label for="nis">NIS</label>
        <div class="input">
            <input type="number" name="nis" id="nis" value="<?=$data['nis']?>" >
        </div>
    </div>

    

    <!-- Input Tanggal Lahir -->
    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <div class="input">
            <input type="date" name="tanggal" id="tanggal" value="<?=$data['tanggal_lahir']?>">
        </div>
    </div>

    <!-- Input Keterangan -->
    <div class="form-group">
        <label for="kelas">Kelas</label>
        <div class="input">
<select name="kelas" id="kelas" value="<?=$data['kelas']?>">
        <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
</select>
        </div>
    </div>

        <div class="form-group">
        <label for="jurusan">JURUSAN</label>
        <div class="input">
<select name="jurusan" id="jurusan" value="<?=$data['jurusan']?>">
        <option value="AKL">AKL</option>
    <option value="PPLG">PPLG</option>
</select>
        </div>
    </div>

        <div class="form-group">
        <label for="gender">GEnder</label>
        <div class="input">
<select name="gender" id="gender" value="<?=$data['gender']?>">
        <option value="10">10</option>
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
