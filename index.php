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
    <!-- header -->
    <header>Syinpewa</header>

    <div class="container">
      <!-- menu -->
      <aside>
        <ul class="menu">
          <li><a href="?hal=dashboard" class="aktif">Dashboard</a></li>
          <li><a href="?hal=pelanggaran">Plg</a></li>
          <li><a href="?hal=jabatan">Data Jabatan</a></li>
          <li><a href="?hal=logout.php">Keluar</a></li>
        </ul>
      </aside>

      <!-- content -->
      <section class="main">
        <?php include "konten.php" ?>
      </section>
    </div>

    <!-- footer -->
    <footer>Copyright &copy; Asatidzal Hakiim</footer>
  </body>
</html>

<?php
}
?>
