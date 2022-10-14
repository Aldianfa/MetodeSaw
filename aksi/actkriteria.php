<?php
include "../config.php";

$idkriteria = $_POST['idkriteria'];
$nmkriteria = $_POST['nmkriteria'];
$tipe = $_POST['tipe'];
$sql = "INSERT INTO `tb_kriteria` (`idkriteria`, `nmkriteria`, `tipe`) VALUES ($idkriteria, '$nmkriteria', '$tipe');";
$a = $koneksi->query($sql);
if ($a === true) {
    header('location: ../form/formkriteria.php');
} else {
    var_dump($a);
}


?>
