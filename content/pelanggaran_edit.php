<?php
if(!defined('INDEX')) die();

$id = $_GET['id'];
$query = "SELECT * FROM pelanggaran WHERE id_pelanggaran = '$id'";
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);
?>

<h2 class="judul">Edit Pl</h2>
<form action="?hal=pelanggaran_update" method="post" ">

    <!-- Input ID -->
    <input type="hidden" name="id" value="<?=$data['id_pelanggaran']?>">

    <!-- Input Nama Barang -->
    <div class="form-group">
        <label for="nama">Nama Pl</label>
        <div class="input">
            <input type="text" name="nama_pelanggaran" id="nama_pelanggaran" value="<?=$data['nama_pelanggaran']?>">
        </div>
    </div>

        <div class="form-group">
        <label for="jenis">Jenis Pl</label>
        <div class="input">
            <select name="jenis" id="jenis" value="<?=$data['jenis_pelanggaran']?>">
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


    <!-- Input Jabatan
    <div class="form-group">
        <label for="jabatan">Kategori</label>
        <div class="input">
            <select name="kategori" id="kategori">
                <option value=""> - Pilih kategori - </option>
<!- <?php
// $queryj = "SELECT * FROM kategori";
// $resultj = mysqli_query($con,$queryj);
// while($j = mysqli_fetch_assoc($resultj)){
//     echo "<option value='$j[id_kategori]'";
//     if($j['id_kategori'] == $data['id_kategori']) echo " selected";
//     echo "> $j[nama_kategori] </option>";

?> -->
            <!-- </select>
        </div>
    </div>  -->


    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="reset" value="Batal" class="tombol reset">
    </div>
</form>