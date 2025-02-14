<h1>Cek Data</h1>
<form action="" method="get">
    <input type="hidden" name="hal" value="riwayat_tambah">
    <input type="number" name="nis" id="nis" placeholder="NIS" value="<?= isset($_GET['nis']) ? $_GET['nis'] : '' ?>">
    <input type="submit" value="Cek">
</form>
<hr>

<h2>Detail</h2>

        <?php
        if(isset($_GET['nis']) && !empty($_GET['nis'])){
            $nis = $_GET['nis'];

            $query = "SELECT * FROM siswa where nis = '$nis'";
            $result = mysqli_query($con,$query);
            $no = 0;
            if($data = mysqli_fetch_assoc($result)){
                $no++;?>

<form action="?hal=prosesdata" method="post">

    <input type="hidden" name="id" value="<?=$data['id_siswa']?>">

<div class="form-group">
        <label for="nis">NIS</label>
            <input type="number" name="nis" id="nis" value="<?=$data['nis']?>" readonly>
        </div>
                
            <div class="form-group">
        <label for="nama">Nama</label>
           <input type="text" name="nama_siswa" id="nama_siswa" value="<?=$data['nama_siswa']?>" readonly>
        </div>       
            <div class="form-group">
        <label for="gender">gender</label>
           <input type="text" name="gender_siswa" id="gender_siswa" value="<?=$data['gender']?>" readonly>
        </div>       
            <div class="form-group">
        <label for="kelas">kelas</label>
           <input type="text" name="kelas_siswa" id="kelas_siswa" value="<?=$data['kelas']?>" readonly>
        </div>       
        
            <div class="form-group">
        <label for="jurusan">jurusan</label>
        <div class="input">
            <input type="text" name="jurusan" id="jurusan" value="<?=$data['jurusan']?>" readonly>
        </div>
    </div>

            <div class="form-group">
        <label for="pelanggaran">pelanggaran</label>
        <div class="input">
            <select name="pelanggaran" id="pelanggaran">
                <option value=""> - Pilih pelanggaran - </option>
                
<?php
$query = "SELECT * FROM pelanggaran";
$result = mysqli_query($con,$query);
while($data = mysqli_fetch_assoc($result)){
    echo "<option value='$data[kode]'> $data[nama_pelanggaran] | $data[poin] </option>";
}
?>

            </select>
        </div>
    </div>
<input type="submit" value="Simpan">
         
 <?php

}

}
?>