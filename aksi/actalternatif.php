<?php
include "../config.php";

$idalternatif = $_POST['idalternatif'];
$nmalternatif = $_POST['nmalternatif'];
$sql = "INSERT INTO `tb_alternatif` (`idalternatif`, `nmalternatif`) VALUES ($idalternatif, '$nmalternatif');";
$a = $koneksi->query($sql);
if ($a === true) {
    header('location: ../form/formalternatif.php');
} else {
    var_dump($a);
}


?>
