<h1>Cek Data</h1>
<form action="" method="get">
    <input type="hidden" name="hal" value="riwayat_tambah">
    <input type="number" name="nis" id="nis" placeholder="NIS" value="<?= isset($_GET['nis']) ? $_GET['nis'] : '' ?>">
    <input type="number" name="kode" id="kode" placeholder="Kode" value="<?= isset($_GET['kode']) ? $_GET['kode'] : '' ?>">
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

<form action="prosesdata.php" method="post">
    <div class="form-group">
        <label for="nis">NIS</label>
            <input type="number" name="id" id="id" value="<?=$data['nis']?>" readonly>
        </div>
                
            <div class="form-group">
        <label for="nama">Nama</label>
           <input type="text" name="nama_siswa" id="nama_siswa" value="<?=$data['nama_siswa']?>" readonly>
        </div>       
        
            <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <div class="input">
            <input type="date" name="tanggal" id="tanggal" value="<?=$data['tanggal_lahir']?>" readonly>
        </div>
    </div>

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

        <input type="radio" name="kelas" id="kelas" value="10" <?= $l ?> readonly> 10
        <input type="radio" name="kelas" id="kelas" value="11" <?= $p ?> readonly> 11
        <input type="radio" name="kelas" id="kelas" value="12" <?= $s ?> readonly> 12
    </div>


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

        <input type="radio" name="jurusan" id="jurusan" value="AKL" <?= $ak ?> readonly> AKL
        <input type="radio" name="jurusan" id="jurusan" value="PPLG" <?= $pl ?> readonly> PPLG
    </div>





    <!-- Input Gender -->
    <div class="form-group">
        <label for="gender">Gender</label>

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

        <input type="radio" name="gender" id="gender" value="L" <?= $i ?> readonly> Laki-laki
        <input type="radio" name="gender" id="gender" value="P" <?= $n ?> readonly> Perempuan
    </div>

    </form>

  <?php
        }
         
        }





        if(isset($_GET['kode']) && !empty($_GET['kode'])){
            $kode = $_GET['kode'];

            $query = "SELECT * FROM pelanggaran where kode = '$kode'";
            $result = mysqli_query($con,$query);
            $no = 0;
            if($data = mysqli_fetch_assoc($result)){
                $no++;
        ?>

<form action="?hal=prosesdata.php" method="post">
<!-- Input kode barang -->
<div class="form-group">
    <label for="kode">kode Pl</label>
    <div class="input">
        <input type="text" name="kode" id="kode" value="<?=$data['kode']?>" readonly>
    </div>
</div>

<div class="form-group">
    <label for="nama">Nama Pl</label>
    <div class="input">
        <input type="text" name="nama" id="nama" value="<?=$data['nama_pelanggaran']?>" readonly>
    </div>
</div>


        <div class="form-group">
        <label for="jenis">Jenis Pl</label>
        <div class="input">
            <select name="jenis" id="jenis" value="<?=$data['jenis_pelanggaran']?>" readonly>
                <option value="ringan">Ringan</option>
                <option value="sedang">Sedang</option>
                <option value="berat">Berat</option>
            </select>
        </div>
    </div>


        <div class="form-group">
        <label for="poin">Nama Pl</label>
        <div class="input">
            <input type="number" name="poin" id="poin" value="<?=$data['poin']?>" readonly>
        </div>
    </div>

        <div class="form-group">
        <input type="reset" value="Reset" class="tombol reset">
        <input type="submit" value="Simpan" class="tombol simpan">
    </div>
    
    </form>
    

  <?php
}

}
?>