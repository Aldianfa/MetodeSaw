<html>

<head>
    <title>Metode WP</title>
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


    <br>
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-primary text-center text-white fs-22">
                <h4>Metode WP</h4>
            </div>
        </div>
    </div>

    <!-- WP Jumlah Bobot-->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-primary text-center text-white fs-22">
                <h4>Jumlah Bobot</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    
                        <tr class="text-center">
                            <th>Jumlah</th>
                        </tr>
                    
                    <?php
                    include "config.php";
                    $a = "SELECT SUM(VALUE) AS jumlah FROM tb_bobot";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $c['jumlah']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- WP Jumlah Bobot -->

    <!-- WP Nilai S -->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-primary text-center text-white">
                <h4>Nilai S</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    
                        <tr class="text-center">
                            <th>Id Alternatif</th>
                            <th>Nama Alternatif</th>
                            <th>Nilai S</th>

                        </tr>
                    
                    <?php
                    include "config.php";
                    // $idkriteria = 1;
                    $a = "SELECT * FROM wp_nilais";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $c['idalternatif']; ?></td>
                            <td><?php echo $c['nmalternatif']; ?></td>
                            <td><?php echo $c['nilaiS']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- WP Nilai S -->

    <!-- WP Nilai V -->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-primary text-center text-white">
                <h4>WP Nilai V</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id Alternatif</th>
                            <th>Nama Alternatif</th>
                            <th>Nilai V</th>
                        </tr>
                    </thead>
                    <?php
                    include "config.php";
                    // $idkriteria = 1;
                    $a = "SELECT * FROM wp_nilaiv";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_array()) {
                    ?>
                        <tr>

                            <td><?php echo $c['idalternatif']; ?></td>
                            <td><?php echo $c['nmalternatif']; ?></td>
                            <td><?php echo $c['nilaiV']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- WP Nilai V -->

    <!-- WP Normalisasi -->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-primary text-center text-white">
                <h4>WP Normalisasi Terbobot</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    
                        <tr>
                            <th>Id Bobot</th>
                            <th>Id Kriteria</th>
                            <th>Value</th>
                            <th>jumlah</th>
                            <th>Normalisasi_w</th>
                        </tr>
                    
                    <?php
                    include "config.php";
                    // $idkriteria = 1;
                    $a = "SELECT * FROM wp_normalisasiterbobot";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $c['idbobot']; ?></td>
                            <td><?php echo $c['idkriteria']; ?></td>
                            <td><?php echo $c['value']; ?></td>
                            <td><?php echo $c['jumlah']; ?></td>
                            <td><?php echo $c['normalisasi_w']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- WP Normalisasi -->

    <!-- WP Pangkat -->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-primary text-center text-white">
                <h4>WP Pangkat</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                
                        <tr>
                            <th>Id Matrix</th>
                            <th>Id Alternatif</th>
                            <th>Nama Alternatif</th>
                            <th>Id Kriteria</th>
                            <th>Nama Kriteria</th>
                            <th>Tipe</th>
                            <th>Id Bobot</th>
                            <th>Value</th>
                            <th>Nilai</th>
                            <th>Keterangan</th>
                            <th>Normalisasi_W</th>
                            <th>Pangkat</th>
                        </tr>
                    
                    <?php
                    include "config.php";
                    // $idkriteria = 1;
                    $a = "SELECT * FROM wp_pangkat";
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
                            <td><?php echo $c['normalisasi_w']; ?></td>
                            <td><?php echo $c['pangkat']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- WP Pangkat -->

    <!-- WP SumS -->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-primary text-center text-white">
                <h4>WP Sums</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                
                        <tr>
                            <th>jumlah Sum S</th>
                        </tr>
                    
                    <?php
                    include "config.php";
                    // $idkriteria = 1;
                    $a = "SELECT * FROM wp_sums";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $c['jum']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- WP SumS -->

    <br>
    <div class="footer text-center">
        <p>Aldian Faizzul Anwar-200605110170 &copy; <?php echo date("Y") ?></p> <!-- membuat tahun secara dinamic dengan PHP  -->
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>

</html>