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
        <h2 class="judul">RIwayate Wong</h2>
        <a href="?hal=riwayat_tambah" class="tombol">Tambah</a>
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>NIS</th>
              <th>Tanggal Melanggar</th>
              <th>Kode pelanggaran</th>
              <th>Poin</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
                $query = "select * from riwayat_pelanggaran order by id_riwayat desc";
                $result = mysqli_query($con,$query);
                $no = 0;
                while($data = mysqli_fetch_array($result)){
                    $no++;
                
            ?>
            <tr>
              <td><?= $no ?></td>
                <td><?= $data['nis'] ?></td>
                <td><?= $data['tanggal_riw'] ?></td>
                <td><?= $data['kode_pl'] ?></td>
                <td><?= $data['poin_plg'] ?></td>
              <td>
                <a href="?hal=riwayat_edit&id=<?= $data['id_riwayat'] ?>" class="tombol edit"> Edit </a>
                <a href="?hal=riwayat_hapus&id=<?= $data['id_riwayat'] ?>" class="tombol hapus"> Hapus </a>
              </td>
            </tr>
        <?php
        }
        ?>
          </tbody>
        </table>
  </body>
</html>
