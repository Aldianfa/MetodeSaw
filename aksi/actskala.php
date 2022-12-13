<?php
include "../config.php";

$idskala = $_POST['idskala'];
$value = $_POST['value'];
$keterangan = $_POST['keterangan'];
$sql = "INSERT INTO `tb_skala` (`id_skala`, `value`, `keterangan`) VALUES ($idskala, '$value', '$keterangan');";
$a = $koneksi->query($sql);
if ($a === true) {
    header('location: ../form/formskala.php');
} else {
    var_dump($a);
}
?>
