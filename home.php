<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DSS Rekomendasi BPUM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Aldianfa-170</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>

                        <!-- Drop DOWN Metode -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Metode
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="metodesaw.php">Metode SAW</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="metodewp.php">Metode WP</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="metodetopsis.php">Metode Topsis</a></li>
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
                            <li><a class="dropdown-item" href="form/formalternatif.php">Tabel Alternatif</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="form/formkriteria.php">Tabel Kriteria</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="form/formbobot.php">Tabel Bobot</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="form/formmatrix.php">Tabel Matrix</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="form/formskala.php">Tabel Skala</a></li>
                        </ul>
                    </li>
                    <!-- DROP DOWN TABEL DETAIL -->

                    <!-- DROP DOWN TABEL METODE SAW -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tabel View
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="nilaimax.php">Nilai Maksimum</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="nilaimin.php">Nilai Mininum</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="vmatrixkeputusan.php">Matrix Keputusan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="vnormalisasi.php"> Normalisasi</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="vprarangking.php">Pra Rangking</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="vrangking.php">Rangking</a></li>
                        </ul>
                    </li>
                    <!-- DROP DOWN TABEL METODE SAW -->

                </ul>
                <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        <a class="navbar-brand" href="index.php"> <b>DSS Penerima BPUM 2022</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</nav>
<!-- NAVBAR -->

<body>

    <br>

    <!-- TABEL KRITERIA-->
    <div class="container mt-5">
    
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-dark text-center text-white fs-22">
                <h4>Tabel Utama</h4>
            </div>
        </div>
    </div>
    <br>

        <div class="card mt-3">
            <div class="card-header bg-dark text-center text-white fs-22">
                <h4>Tabel Kriteria</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr class="text-center">
                        <th>Nama Kriteria</th>
                        <th>Id Kriteria</th>
                        <th>Tipe Kriteria</th>
                    </tr>
                    <?php
                    include "config.php";
                    $idkriteria = 1;
                    $a = "SELECT * FROM tb_kriteria";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $idkriteria++; ?></td>
                            <td><?php echo $c['nmkriteria']; ?></td>
                            <td><?php echo $c['tipe']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- TABEL KRITERIA-->

    <!-- TABEL ALTERNATIF-->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-dark text-center text-white fs-22">
                <h4>Tabel Alternatif</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <td>Id Alternatif</td>
                            <td>Nama Alternatif</td>
                        </tr>
                    </thead>
                    <?php
                    include "config.php";
                    $idalternatif = 1;
                    $a = "SELECT * FROM tb_alternatif";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $idalternatif++; ?></td>
                            <td><?php echo $c['nmalternatif']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- TABEL ALTERNATIF-->

    <!-- TABEL BOBOT-->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-dark text-center text-white fs-18">
                <h4>Tabel Kriteria</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <td>Id Bobot</td>
                            <td>Id Kriteria</td>
                            <td>value</td>
                        </tr>
                    </thead>
                    <?php
                    include "config.php";
                    $idbobot = 1;
                    $a = "SELECT * FROM tb_bobot";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $idbobot++; ?></td>
                            <td><?php echo $c['idkriteria']; ?></td>
                            <td><?php echo $c['value']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- TABEL BOBOT-->

    <!-- TABEL MATRIX-->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-dark text-center text-white fs-18">
                <h4>Tabel Matrix</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <td>Id Matrix</td>
                            <td>Id Alternatif</td>
                            <td>Id Bobot</td>
                            <td>Id Skala</td>
                        </tr>
                    </thead>
                    <?php
                    include "config.php";
                    $idmatrix = 1;
                    $a = "SELECT * FROM matrixkeputusan";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $idmatrix++; ?></td>
                            <td><?php echo $c['idalternatif']; ?></td>
                            <td><?php echo $c['idbobot']; ?></td>
                            <td><?php echo $c['idskala']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- TABEL MATRIX-->

    <!-- TABEL SKALA-->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-dark text-center text-white fs-18">
                <h4>Tabel Skala</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <td>Id Skala</td>
                            <td>Value</td>
                            <td>Keterangan</td>
                        </tr>
                    </thead>
                    <?php
                    include "config.php";
                    $idskala = 1;
                    $a = "SELECT * FROM tb_skala";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $idskala++; ?></td>
                            <td><?php echo $c['value']; ?></td>
                            <td><?php echo $c['keterangan']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- TABEL SKALA-->

    <br>
    <div class="footer text-center">
        <p>Aldian Faizzul Anwar-200605110170 &copy; <?php echo date("Y") ?></p> <!-- membuat tahun secara dinamic dengan PHP  -->
    </div>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>