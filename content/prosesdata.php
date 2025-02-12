<?php

if(!defined('INDEX')) die("");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nis = $_POST['nis'];
    $kode = $_POST['kode'];

    // Ambil data poin berdasarkan kode pelanggaran
    $query_pelanggaran = "SELECT poin FROM pelanggaran WHERE kode = '$kode'";
    $result_pelanggaran = mysqli_query($con, $query_pelanggaran);
    
    if ($data_pelanggaran = mysqli_fetch_assoc($result_pelanggaran)) {
        $poin = $data_pelanggaran['poin'];

        // Simpan ke tabel riwayat (dengan tanggal otomatis)
        $query_insert = "INSERT INTO riwayat (nis, tanggal, kode, poin) VALUES ('$nis', CURRENT_DATE(), '$kode', '$poin')";
        $insert_result = mysqli_query($con, $query_insert);

        if ($insert_result) {
            // Update poin di tabel siswa
            $query_update = "UPDATE siswa SET poin = poin + $poin WHERE nis = '$nis'";
            mysqli_query($con, $query_update);

            // Tampilkan pesan sukses + redirect setelah 2 detik
            echo "Data pelanggaran untuk NIS <b>$nis</b> berhasil disimpan!";
            echo "<meta http-equiv='refresh' content='2; url=?hal=riwayat'>";
        } else {
            echo "Gagal menyimpan data!<br>";
            echo mysqli_error($con);
        }
    } else {
        echo "Kode pelanggaran tidak ditemukan!";
    }
} else {
    echo "Akses tidak valid!";
}
?>

