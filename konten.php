<?php
if (!defined('INDEX')) die();

$halaman = [
    "dashboard",
    "pelanggaran",
    "pelanggaran_tambah",
    "pelanggaran_insert",
    "pelanggaran_edit",
    "pelanggaran_update",
    "pelanggaran_hapus",
    "list",
    "list_tambah",
    "list_insert",
    "list_edit",
    "list_update",
    "list_hapus",
    "list_tebus",
    "list_proses"
];

if (isset($_GET['hal'])) {
    $hal = $_GET['hal'];
} else {
    $hal = 'dashboard';
}

foreach($halaman as $h) {
    if ($hal == $h) {
        include "content/$h.php";
        break;
    }
}
?>