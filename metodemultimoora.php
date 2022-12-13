<html>

<head>
    <title>Metode Multimoora</title>
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
                                <li><a class="dropdown-item" href="metodemultimoora.php">Metode Multimoora</a></li>
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
            <a class="navbar-brand" href="#"> <b>DSS Penerima BPUM 2022</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>
    <!-- NAVBAR -->

    <br>
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-success text-center text-white fs-22">
                <h4>Metode Multimoora</h4>
            </div>
        </div>
    </div>

    <!-- MULTIMOORA 1-->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-success text-center text-white fs-22">
                <h4>Multimoora 1</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                
                        <tr class="text-center">
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
                            <th>Pra</th>
                        </tr>
                    
                    <?php
                    include "config.php";
                    // $idkriteria = 1;
                    $a = "SELECT vmatrixkeputusan.*,SQRT(SUM(POW(vmatrixkeputusan.nilai,2))) AS pra FROM vmatrixkeputusan GROUP BY vmatrixkeputusan.idkriteria";
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
                            <td><?php echo $c['pra']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- TABEL -->

    <!-- MULTIMOORA 2-->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-success text-center text-white fs-22">
                <h4>Multimoora 2</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                
                        <tr class="text-center">
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
                            <th>Pra</th>
                            <th>Normalisasi</th>
                        </tr>
                    
                    <?php
                    include "config.php";
                    // $idkriteria = 1;
                    $a = "SELECT vmatrixkeputusan.*,multimoora_1.pra, (vmatrixkeputusan.nilai/multimoora_1.pra) AS normalisasi FROM vmatrixkeputusan,multimoora_1 WHERE multimoora_1.idkriteria=vmatrixkeputusan.idkriteria GROUP BY vmatrixkeputusan.idmatrix ";
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
                            <td><?php echo $c['pra']; ?></td>
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

    <!-- MULTIMOORA 3-->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-success text-center text-white fs-22">
                <h4>Multimoora 3</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                
                        <tr class="text-center">
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
                            <th>Pra</th>
                            <th>Normalisasi</th>
                            <th>Normalisasi bobot</th>
                        </tr>
                    
                    <?php
                    include "config.php";
                    // $idkriteria = 1;
                    $a = "SELECT multimoora_2.*,(multimoora_2.normalisasi*multimoora_2.value) AS normalisasibobot FROM multimoora_2 GROUP BY multimoora_2.idmatrix ";
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
                            <td><?php echo $c['pra']; ?></td>
                            <td><?php echo $c['normalisasi']; ?></td>
                            <td><?php echo $c['normalisasibobot']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- TABEL -->

    <!-- MULTIMOORA 4-->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-success text-center text-white fs-22">
                <h4>Multimoora 4</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                
                        <tr class="text-center">
                            <th>Id Alternatif</th>
                            <th>Hasil</th>
                        </tr>
                    
                    <?php
                    include "config.php";
                    // $idkriteria = 1;
                    $a = "SELECT multimoora_3.idalternatif,SUM(multimoora_3.normalisasibobot) AS hasil FROM multimoora_3 GROUP BY multimoora_3.idalternatif ";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $c['idalternatif']; ?></td>
                            <td><?php echo $c['hasil']; ?></td>
                            
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- TABEL -->



    

    <br>
    <div class="footer text-center">
        <p>Aldian Faizzul Anwar-200605110170 &copy; <?php echo date("Y") ?></p> <!-- membuat tahun secara dinamic dengan PHP  -->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>

</html>