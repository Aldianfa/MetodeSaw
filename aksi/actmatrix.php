<?php
include ("../config.php");
$idmatrix =$_POST["idmatrix"];
var_dump($idmatrix);
$idalternatif =$_POST["idalternatif"];
var_dump($idalternatif);
$idbobot =$_POST["idbobot"];
var_dump($idbobot);
$idskala =$_POST["idskala"];
var_dump($idskala);

$query_sql="INSERT INTO matrixkeputusan (idmatrix, idalternatif, idbobot, idskala)
VALUES ('$idmatrix','$idalternatif','$idbobot','$idskala')";

if(mysqli_query($koneksi, $query_sql)){
    header('location:../form/formmatrix.php');
}else{
    echo "Pendaftaran gagal : ".mysqli_error($koneksi);
}
?>
