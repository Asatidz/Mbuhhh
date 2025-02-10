<?php
session_start();
ob_start();

include "library/config.php";

if(empty($_SESSION['username']) OR empty($_SESSION['password'])) {
    echo "<p align='center'>Anda Harus Login Sek Brohh!!</p>";
    echo "<meta http-equiv='refresh' content='2; url=login.php'>";
}else{
    define('INDEX', true);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <title>Login Aplikasi</title> -->
    <!-- HTML Meta Tags -->
    <title>sIPPPPPPPPPPPPPPPPPPPPPPPP</title>

    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="header">
        System Informasi Pelaporan Pelanggaran
    </div>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li><a href="?hal=dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="?hal=pelanggaran"><i class="fas fa-exclamation-triangle"></i> Pelanggaran</a></li>
                <li><a href="?hal=siswa"><i class="fas fa-user-graduate"></i> Data Siswa</a></li>
                <li><a href="?hal=riwayat"><i class="fas fa-history"></i> Riwayat</a></li>
                <li><a href="?hal="><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>
    </div>  
      <!-- content -->
      <section class="main">
        <?php include "konten.php" ?>
      </section>
    <div class="footer">
        By Made <i class="fas fa-heart"></i> by TechnoMancers <span>© 2025</span>
    </div>
  </body>
</html>

<?php
}
?>
