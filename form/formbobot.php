<?php 
include "../config.php";
error_reporting(0);


if(isset($_POST['simpan'])){

    if($_GET['hal'] == "edit")
    {

    //data di edit
        $edit = $koneksi -> query("UPDATE tb_bobot SET id_bobot = '$_POST[idbobot]', id_kriteria = '$_POST[idkriteria]', 
                                bobot = '$_POST[bobot]' WHERE id_bobot = '$_GET[id]'");

        if ($edit == true){
            echo "<script>alert('Edit SUKSES');
                window.location.href=('formbobot.php');</script>";
        }else{
        echo "<script>alert('Edit GAGAL');
            window.location.href=('formbobot.php');</script>";
        }

    }else{

    //data disimpan baru
        $insert = $koneksi -> query("INSERT INTO `tb_bobot` (id_bobot, id_kriteria, bobot) 
                                        VALUES ('$_POST[idbobot]', '$_POST[idkriteria]', '$_POST[bobot]');");

        if ($insert == true){
            echo "<script>alert('Input SUKSES');
                window.location.href=('formbobot.php');</script>";
        }else{
        echo "<script>alert('Input GAGAL');
            window.location.href=('formbobot.php');</script>";
        }
    }
}

if(isset($_GET['hal']))
{
    //Pengujian jika edit
    if($_GET['hal'] == "edit")
    {
        $tampil = mysqli_query($koneksi, "SELECT * FROM tb_bobot WHERE id_bobot='$_GET[id]'");
        $data = mysqli_fetch_array($tampil);
        if($data)
        {
            $idbobot = $data['id_bobot'];
            $kriteria = $data['id_kriteria'];
            $bobot = $data['bobot'];       
            
            
        }
    }else if($_GET['hal'] == "hapus"){
        $hapus = mysqli_query($koneksi, "DELETE FROM tb_bobot WHERE id_bobot = '$_GET[id]'");

        if($hapus){
            echo "<script>alert('Hapus Data SUKSES');
                window.location.href=('formbobot.php');</script>";
        }
    }
}
?>


<html>

<head>
    <title>Tabel Bobot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Aldianfa-170</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body fs-6">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../home.php">Home</a>
                        </li>
                        <li>
                            <hr class="divider">
                        </li>


                        <!-- Drop DOWN Metode -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Metode
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="../metodesaw.php">Metode SAW</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item disabled" href="metodewp.php">Metode WP</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item disabled" href="metodetopsis.php">Metode Topsis</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item disabled" href="metodemultimoora.php">Metode Multimoora</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        </li>
                        <!-- DROP DOWN METODE -->

                        <!-- Drop DOWN TABEL DETAIL -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tabel Utama
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="formalternatif.php">Tabel Alternatif</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="formkriteria.php">Tabel Kriteria</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="formbobot.php">Tabel Bobot</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="formmatrix.php">Tabel Matrix</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="formskala.php">Tabel Skala</a></li>
                            </ul>
                        </li>
                        <!-- DROP DOWN TABEL DETAIL -->

                        <!-- DROP DOWN VIEW -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tabel View
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="../nilaimax.php">Nilai Maksimum</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../nilaimin.php">Nilai Mininum</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../vmatrixkeputusan.php">Matrix Keputusan</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../vnormalisasi.php"> Normalisasi</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../vprarangking.php">Pra Rangking</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../vrangking.php">Rangking</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="../hasil.php">Hasil Akhir</a>
                        </li>
                        <li>
                            <hr class="divider">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="../referensi.php">Latar Belakang dan Referensi</a>
                        </li>
                        <!-- DROP DOWN TABEL METODE SAW -->

                    </ul>
                    <!-- <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form> -->
                </div>
            </div>
            <a class="navbar-brand" href="index.php"> <b>DSS Penerima BPUM 2022</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>
    <!-- NAVBAR -->

    <br>
    <!-- INPUT FORM -->
    <div class="container mt-5">
        <br>
        <div class="card mt-1">
            <div class="card-header bg-dark text-center text-white fs-22">
                <h2>Input Bobot</h2>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="row">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Id Bobot</label>
                            <input type="text" class="form-control" name="idbobot" required="" placeholder="idbobot" value="<?=@$idbobot?>" >

                            <label for="exampleInputEmail1" class="form-label mt-4">Id Kriteria - <b>DATA TIDAK BISA DI EDIT</b></label>
                            <select class="form-select" name="idkriteria" value="<?=@$kriteria?>">
                                <option>----</option>
                                <?php
                                include "../config.php";
                                $a = "SELECT * FROM tb_kriteria";
                                $b = $koneksi->query($a);
                                while ($c = $b->fetch_array()) {
                                    echo "<option value=$c[id_kriteria]> $c[nm_kriteria] </option>";
                                }
                                ?>
                            </select>

                            <label for="exampleInputEmail1" class="form-label mt-4">value</label>
                            <input type="text" class="form-control" name="bobot" required="" placeholder="value" value="<?=@$bobot?>">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-success" name="simpan">Input</button>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="reset" class="btn btn-danger">Hapus</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- INPUT FORM -->

    <!-- TABEL ALTERNATIF-->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-dark text-center text-white fs-22">
                Tabel Bobot
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <td>Id Bobot</td>
                            <td>Id Kriteria</td>
                            <td>Value Bobot</td>
                        </tr>
                    </thead>
                    <?php
                    include "../config.php";
                    $idbobot = 1;
                    $a = "SELECT * FROM tb_bobot";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $idbobot++; ?></td>
                            <td><?php echo $c['id_kriteria']; ?></td>
                            <td><?php echo $c['bobot']; ?></td>
                            <td>
                                <a href="formbobot.php?hal=edit&id=<?=$c['id_bobot']?> " class="btn btn-warning">Edit</a>
                                <a href="formbobot.php?hal=hapus&id=<?=$c['id_bobot']?>" onclick="return confirm('Yakin Tabel Ini Dihapus?')" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- TABEL ALTERNATIF-->

    <br>
    <div class="footer text-center">
        <p>Aldian Faizzul Anwar-200605110170 &copy; <?php echo date("Y") ?></p> <!-- membuat tahun secara dinamic dengan PHP  -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>

</html>