
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
        <label for="nama_siswa">Nama</label>
        <div class="input">
            <input type="text" name="nama_siswa" id="nama_siswa" value="<?=$data['nama_siswa']?>">
        </div>
    </div>

    <!-- Input Gender -->
    <div class="form-group">
        <label for="nis">NIS</label>
        <div class="input">
            <input type="number" name="nis" id="nis" value="<?=$data['nis']?>" readonly>
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
    <!-- Input Gender -->
    <div class="form-group">
        <label for="kelas">Kelas</label>

        <!-- Pengecekan gender -->
        <?php
        if($data['kelas']=="10"){
            $l=" checked";
            $p="";
            $s="";
        }if($data['kelas']=="11"){
            $l="";
            $p=" checked";
            $s="";
        }else{
            $l="";
            $p="";
            $s=" checked";
        }
        ?>

        <input type="radio" name="kelas" id="kelas" value="10" <?= $l ?>> 10
        <input type="radio" name="kelas" id="kelas" value="11" <?= $p ?>> 11
        <input type="radio" name="kelas" id="kelas" value="12" <?= $s ?>> 12
    </div>

    <!-- Input Gender -->
    <div class="form-group">
        <label for="jurusan">Jurusan</label>

        <!-- Pengecekan gender -->
        <?php
        if($data['jurusan']=="AKL"){
            $ak=" checked";
            $pl="";
        }else{
            $ak="";
            $pl=" checked";
        }
        ?>

        <input type="radio" name="jurusan" id="jurusan" value="AKL" <?= $ak ?>> AKL
        <input type="radio" name="jurusan" id="jurusan" value="PPLG" <?= $pl ?>> PPLG
    </div>


    <!-- Input Gender -->
    <div class="form-group">
        <label for="jenis">Gender</label>

        <!-- Pengecekan gender -->
        <?php
        if($data['gender']=="L"){
            $i=" checked";
            $n="";
        }else{
            $i="";
            $n=" checked";
        }
        ?>

        <input type="radio" name="gender" id="gender" value="L" <?= $i ?>> Laki-laki
        <input type="radio" name="gender" id="gender" value="P" <?= $n ?>> Perempuan
    </div>



    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="reset" value="Batal" class="tombol reset">
    </div>
</form>
