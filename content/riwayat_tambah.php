<h1>Cek Data</h1>
<form action="" method="get">
    <input type="hidden" name="hal" value="riwayat_tambah">
    <input type="number" name="nis" id="nis" placeholder="NIS">
    <input type="submit" value="Cek">
</form>
<hr>

<h2>Detail</h2>
<form action="prosesdata.php" method="post">
        <?php
        if(isset($_GET['nis'])){
            $nis = $_GET['nis'];

            $query = "SELECT * FROM siswa where nis = '$nis'";
            $result = mysqli_query($con,$query);
            $no = 0;
            while($data = mysqli_fetch_assoc($result)){
                $no++;?>


    <div class="form-group">
        <label for="nis">NIS</label>
            <input type="number" name="id" id="id" value="<?=$data['nis']?>" disabled>
        </div>
                
            <div class="form-group">
        <label for="nama">Nama</label>
           <input type="text" name="nama_siswa" id="nama_siswa" value="<?=$data['nama_siswa']?>" disabled>
        </div>       
        
            <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <div class="input">
            <input type="date" name="tanggal" id="tanggal" value="<?=$data['tanggal_lahir']?>" disabled>
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

        <input type="radio" name="kelas" id="kelas" value="10" <?= $l ?> disabled> 10
        <input type="radio" name="kelas" id="kelas" value="11" <?= $p ?> disabled> 11
        <input type="radio" name="kelas" id="kelas" value="12" <?= $s ?> disabled> 12
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

        <input type="radio" name="jurusan" id="jurusan" value="AKL" <?= $ak ?> disabled> AKL
        <input type="radio" name="jurusan" id="jurusan" value="PPLG" <?= $pl ?> disabled> PPLG
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

        <input type="radio" name="gender" id="gender" value="L" <?= $i ?> disabled> Laki-laki
        <input type="radio" name="gender" id="gender" value="P" <?= $n ?> disabled> Perempuan
    </div>



    

        <?php    
        }
        ?>

<h1>Cek Data</h1>
<form action="" method="get">
    <input type="hidden" name="hal" value="riwayat_tambah">
    <input type="number" name="kode" id="kode" placeholder="kode">
    <input type="submit" value="Cek">
</form>
<hr>

<h2>Detail</h2>
<form action="prosesdata.php" method="post">
        <?php
        if(isset($_GET['kode'])){
            $kode = $_GET['kode'];

            $query = "SELECT * FROM pelanggaran where kode = '$kode'";
            $result = mysqli_query($con,$query);
            $no = 0;
            while($data = mysqli_fetch_assoc($result)){
                $no++;?>


    <div class="form-group">
        <label for="nama">Nama Pl</label>
        <div class="input">
            <input type="text" name="nama_pelanggaran" id="nama_pelanggaran" value="<?=$data['nama_pelanggaran']?>" disabled>
        </div>
    </div>


        <div class="form-group">
        <label for="jenis">Jenis Pl</label>
        <div class="input">
            <select name="jenis" id="jenis" value="<?=$data['jenis_pelanggaran']?>" disabled>
                <option value="ringan">Ringan</option>
                <option value="sedang">Sedang</option>
                <option value="berat">Berat</option>
            </select>
        </div>
    </div>


        <div class="form-group">
        <label for="poin">Nama Pl</label>
        <div class="input">
            <input type="number" name="poin" id="poin" value="<?=$data['poin']?>" disabled>
        </div>
    </div>

    
    
    <!-- Input kode barang -->
    <div class="form-group">
        <label for="kode">kode Pl</label>
        <div class="input">
            <input type="text" name="kode" id="kode" value="<?=$data['kode']?>" disabled>
        </div>
    </div>


<?php
        }
        ?>