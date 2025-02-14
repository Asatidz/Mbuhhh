<?php
if (!defined('INDEX')) die();
// Pastikan form telah terkirim
$id       = $_POST['id'];
$nis      = $_POST['nis'];  // Pastikan id dikirim dalam form POST
$tgl      = date('Y-m-d H:i:s'); // Menggunakan fungsi PHP untuk mendapatkan tanggal saat ini
$kode     = $_POST['pelanggaran'];  // Ambil kode pelanggaran dari form
// Periksa apakah kode pelanggaran ada dalam database
// var_dump($_POST);   
// Mengambil poin dari tabel pelanggaran berdasarkan kode
$query = "SELECT poin FROM pelanggaran WHERE kode = '$kode'";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);
$poin = $data['poin'];  // Ambil poin dari pelanggaran

// Menyimpan riwayat pelanggaran
$query = "INSERT INTO riwayat_pelanggaran (nis, tanggal_riw, poin_plg, kode_pl) VALUES ('$nis', '$tgl', '$poin', '$kode')";
$result = mysqli_query($con, $query);
// var_dump($poin, $ida);

// Update poin siswa
$query = "UPDATE siswa SET poin_sis = poin_sis + 5 WHERE id_siswa = '$id'";
$result = mysqli_query($con, $query);

// Menampilkan hasil
if ($result) {
    echo "Jabatan <b>$nis</b> berhasil disimpan!";
    echo "<meta http-equiv='refresh' content='2; url=?hal=riwayat'>";
} else {
    echo "Tidak dapat menyimpan data!<br>";
    echo mysqli_error($con);
}
?>
