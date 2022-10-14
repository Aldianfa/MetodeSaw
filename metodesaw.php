<html>

<head>
    <title>Nilai Maksimum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                        </li>
                        <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Detail Tabel
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
                        <!-- Batas -->
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
                        <!-- Batas -->

                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <a class="navbar-brand" href="#"> <b>DSS Penerima BPUM 2022</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>
    <!-- NAVBAR -->

    <br>

    <!-- TABEL MAKSIMUM-->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-dark text-center text-white fs-22">
                Nilai Maksimum
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <td>Id Kriteria</td>
                            <td>Nama Kriteria</td>
                            <td>Maksimum</td>

                        </tr>
                    </thead>
                    <?php
                    include "config.php";
                    $idkriteria = 1;
                    $a = "SELECT * FROM nilaimax";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $idkriteria++; ?></td>
                            <td><?php echo $c['nmkriteria']; ?></td>
                            <td><?php echo $c['maksimum']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- TABEL -->

    <!-- TABEL MINIMUM-->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-dark text-center text-white fs-22">
                Nilai Minimum
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <td>Id Kriteria</td>
                            <td>Nama Kriteria</td>
                            <td>Minimum</td>

                        </tr>
                    </thead>
                    <?php
                    include "config.php";
                    $idkriteria = 1;
                    $a = "SELECT * FROM nilaimin";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $idkriteria++; ?></td>
                            <td><?php echo $c['nmkriteria']; ?></td>
                            <td><?php echo $c['minimum']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- TABEL -->

    <!-- TABEL MATRIX-->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-dark text-center text-white fs-22">
                View Matrix Keputusan
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Id Matrix</td>
                            <td>Id Alternatif</td>
                            <td>Nama Alternatif</td>
                            <td>Id Kriteria</td>
                            <td>Nama Kriteria</td>
                            <td>Tipe</td>
                            <td>Id Bobot</td>
                            <td>Value</td>
                            <td>Nilai</td>
                            <td>Keterangan</td>
                        </tr>
                    </thead>
                    <?php
                    include "config.php";
                    // $idkriteria = 1;
                    $a = "SELECT * FROM vmatrixkeputusan";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $c['idmatrix']; ?></td>
                            <td><?php echo $c['idalternatif']; ?></td>
                            <td><?php echo $c['nmalternatif']; ?></td>
                            <td><?php echo $c['idkriteria']; ?></td>
                            <td><?php echo $c['nmkriteria']; ?></td>
                            <td><?php echo $c['tipe']; ?></td>
                            <td><?php echo $c['idbobot']; ?></td>
                            <td><?php echo $c['value']; ?></td>
                            <td><?php echo $c['nilai']; ?></td>
                            <td><?php echo $c['keterangan']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- TABEL -->

    <!-- TABEL NORMALISASI-->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-dark text-center text-white fs-22">
                View Normalisasi
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Id Matrix</td>
                            <td>Id Alternatif</td>
                            <td>Nama Alternatif</td>
                            <td>Id Kriteria</td>
                            <td>Nama Kriteria</td>
                            <td>Tipe</td>
                            <td>Id Bobot</td>
                            <td>Value</td>
                            <td>Nilai</td>
                            <td>Keterangan</td>
                            <td>Normalisasi</td>
                        </tr>
                    </thead>
                    <?php
                    include "config.php";
                    // $idkriteria = 1;
                    $a = "SELECT * FROM vnormalisasi";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $c['idmatrix']; ?></td>
                            <td><?php echo $c['idalternatif']; ?></td>
                            <td><?php echo $c['nmalternatif']; ?></td>
                            <td><?php echo $c['idkriteria']; ?></td>
                            <td><?php echo $c['nmkriteria']; ?></td>
                            <td><?php echo $c['tipe']; ?></td>
                            <td><?php echo $c['idbobot']; ?></td>
                            <td><?php echo $c['value']; ?></td>
                            <td><?php echo $c['nilai']; ?></td>
                            <td><?php echo $c['keterangan']; ?></td>
                            <td><?php echo $c['normalisasi']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- TABEL -->

    <!-- TABEL PraRangking-->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-dark text-center text-white fs-22">
                View Pra Rangking
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Id Matrix</td>
                            <td>Id Alternatif</td>
                            <td>Nama Alternatif</td>
                            <td>Id Kriteria</td>
                            <td>Nama Kriteria</td>
                            <td>Tipe</td>
                            <td>Id Bobot</td>
                            <td>Value</td>
                            <td>Nilai</td>
                            <td>Keterangan</td>
                            <td>Normalisasi</td>
                            <td>Pra Rangking</td>
                        </tr>
                    </thead>
                    <?php
                    include "config.php";
                    // $idkriteria = 1;
                    $a = "SELECT * FROM vprarangking";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $c['idmatrix']; ?></td>
                            <td><?php echo $c['idalternatif']; ?></td>
                            <td><?php echo $c['nmalternatif']; ?></td>
                            <td><?php echo $c['idkriteria']; ?></td>
                            <td><?php echo $c['nmkriteria']; ?></td>
                            <td><?php echo $c['tipe']; ?></td>
                            <td><?php echo $c['idbobot']; ?></td>
                            <td><?php echo $c['value']; ?></td>
                            <td><?php echo $c['nilai']; ?></td>
                            <td><?php echo $c['keterangan']; ?></td>
                            <td><?php echo $c['normalisasi']; ?></td>
                            <td><?php echo $c['prarangking']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- TABEL -->

    <!-- TABEL Rangking-->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-dark text-center text-white fs-22">
                View Rangking
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>

                            <td>Id Alternatif</td>
                            <td>Nama Alternatif</td>
                            <td>Rangking</td>
                        </tr>
                    </thead>
                    <?php
                    include "config.php";
                    // $idkriteria = 1;
                    $a = "SELECT * FROM vrangking";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $c['idalternatif']; ?></td>
                            <td><?php echo $c['nmalternatif']; ?></td>
                            <td><?php echo $c['rangking']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- TABEL -->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>

</html>