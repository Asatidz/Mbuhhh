<?php
if(!defined('INDEX')) die();
?>

<h2 class="judul">Data Siswa</h2>
<a href="?hal=siswa_tambah" class="tombol">Tambah</a>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Tanggal Lahir</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Gender</th>
            <th>Poin</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM siswa ORDER BY id_siswa DESC";
        $result = mysqli_query($con,$query);
        $no = 0;
        while($data = mysqli_fetch_array($result)){
            $no++;
        ?>

<tr>
    <td><?=$no?></td>
    <td><img src="images/<?=$data['foto']?>" alt="" width="100"></td>
    <td><?=$data['nama_siswa']?></td>
    <td><?=$data['nis']?></td>
    <td><?=$data['tanggal_lahir']?></td>
    <td><?=$data['kelas']?></td>
    <td><?=$data['jurusan']?></td>
    <td><?=$data['gender']?></td>
    <td><?=$data['poin_sis']?></td>
    <td>
        <a href="?hal=siswa_edit&id=<?=$data['id_siswa']?>"
        class="tombol edit">Edit</a>
        <a href="?hal=siswa_hapus&id=<?=$data['id_siswa']?>&foto=<?=$data['foto']?>"
        class="tombol hapus">Hapus</a>
    </td>
</tr>

<?php
}
?>
    </tbody>
</table>