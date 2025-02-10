<?php
if(!defined('INDEX')) die();

$id   = $_GET['id'];
$foto = $_GET['foto'];

if(file_exists("images/$foto")){
    unlink("images/$foto");
}

$query  = "DELETE FROM siswa WHERE id_siswa = '$id'";
$result = mysqli_query($con,$query);

if($result){
    echo "Data siswa berhasil dihapus!";
    echo "<meta http-equiv='refresh' content='1; url=?hal=siswa'>";
}else{
    echo "Tidak dapat menghapus data siswa!<br>";
    echo mysqli_error();
}

?>