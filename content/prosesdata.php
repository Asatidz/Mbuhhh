<?php
if (!defined('INDEX')) die();

$id       = $_POST['id'];  // Pastikan id dikirim dalam form POST
$tgl      = date('Y-m-d'); // Menggunakan fungsi PHP untuk mendapatkan tanggal saat ini
$poin     = $_POST['poin']; 
$kode     = $_POST['kode'];

// Mengambil poin dari tabel pelanggaran berdasarkan kode
$query = "SELECT poin FROM pelanggaran WHERE kode = '$kode'";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);
$poin = $data['poin'];  // Ambil poin dari pelanggaran

// Menyimpan riwayat pelanggaran
$query = "INSERT INTO riwayat_pelanggaran (tanggal, poin, kode) VALUES ('$tgl', '$poin', '$kode')";
$result = mysqli_query($con, $query);

// Update poin siswa
$query = "UPDATE siswa SET poin = poin + $poin WHERE id_siswa = '$id'";
$result = mysqli_query($con, $query);

// Menampilkan hasil
if ($result) {
    echo "Jabatan <b>$id</b> berhasil disimpan!";
    echo "<meta http-equiv='refresh' content='2; url=?hal=pelanggaran'>";
} else {
    echo "Tidak dapat menyimpan data!<br>";
    echo mysqli_error($con);
}
?>
