<?php
if(!defined('INDEX')) die();

$id = $_GET['id'];
$query = "DELETE FROM pelanggaran WHERE id_pelanggaran = '$id'";
$result = mysqli_query($con, $query);

if ($result) {
    echo "pelanggaran berhasil dihapus!";
    echo "<meta http-equiv='refresh' content='2; url=?hal=pelanggaran'>";
} else {
    echo "Tidak dapat menghapus data!!<br>";
    echo mysqli_error();
}
?>