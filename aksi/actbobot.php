<?php
include "../config.php";

$idbobot = $_POST['idbobot'];
$idkriteria = $_POST['idkriteria'];
$nilai = $_POST['nilai'];

$sql = "INSERT INTO `tb_bobot` (`idbobot`, `idkriteria`, `value`) VALUES ('$idbobot', '$idkriteria', '$nilai');";
$a = $koneksi->query($sql);
if ($a === true) {
    header('location: ../form/formbobot.php');
} else {
    var_dump($a);
}


?>
