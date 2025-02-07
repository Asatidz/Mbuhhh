<?php
    if(!defined('INDEX')) die("");
    switch ($_SESSION['role']) {
        case '55':
            $role = "Administrator";
            break;
        case '66':
            $role = "Operator";
            break;
        case '77':
            $role = "Owner";
            break;
        default:
            $role = "User";
            break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <h1>Selamat Datang di Aplikasi Manajemen Pegawai</h1>
    <h3>Hai <?=$_SESSION['nama']?></h3>
    <h3>Anda login sebagai <?= $role ?></h3>


        <div class="main-content">
            <h1>Dashboard</h1>
            <div class="stats">
                <div class="stat-box">
                    <h3>Jumlah siswa</h3>
                    <p>5</p>
                </div>
                <div class="stat-box">
                    <h3>Jumlah pelanggaran</h3>
                    <p>5</p>
                </div>
            </div>
            <div class="tables">
                <div class="table-container">
                    <h3>Top Pelanggaran</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pelanggaran</th>
                                <th>Total Pelanggaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Seragam Tidak Rapi</td>
                                <td>10</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-container">
                    <h3>Top Siswa</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Siswa</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Anindya Zilfara</td>
                                <td>10</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>


