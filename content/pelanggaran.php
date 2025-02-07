<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>



      <!-- content -->
      <section class="main">
        <h2 class="judul">Data Jabatan</h2>
        <a href="?hal=jabatan_tambah" class="tombol">Tambah</a>
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama pelanggaran</th>
              <th>Jenis pelanggaran</th>
              <th>Poin</th>
              <th>Kode pelanggaran</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
                $query = "select * from pelanggaran order by id_pelanggaran desc";
                $result = mysqli_query($con,$query);
                $no = 0;
                while($data = mysqli_fetch_array($result)){
                    $no++;
                
            ?>
            <tr>
              <td><?= $no ?></td>
                <td><?= $data['nama_pelanggaran'] ?></td>
                <td><?= $data['jenis_pelanggaran'] ?></td>
                <td><?= $data['poin'] ?></td>
                <td><?= $data['kode_pelanggaran'] ?></td>
              <td>
                <a href="?hal=pelanggaran_edit&id=<?= $data['id_pelanggaran'] ?>" class="tombol edit"> Edit </a>
                <a href="?hal=pelanggaran_hapus&id=<?= $data['id_pelanggaran'] ?>" class="tombol hapus"> Hapus </a>
              </td>
            </tr>
        <?php
        }
        ?>
          </tbody>
        </table>
  </body>
</html>
