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
            <div class="offcanvas-body fs-6">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.php">Home</a>
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
                            <li><a class="dropdown-item" href="metodesaw.php">Metode SAW</a></li>
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
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="hasil.php">Hasil Akhir</a>
                    </li>
                    <li>
                        <hr class="divider">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="referensi.php">Latar Belakang dan Referensi</a>
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


<body>

    <br>

    <!-- TABEL KRITERIA-->
    <div class="container mt-5">

        <div class="container mt-5">
            <div class="card mt-3">
                <div class="card-header bg-dark text-center text-white fs-22">
                    <h4>Tabel Utama</h4>
                </div>
                <div class="card-body text-center">
                    <p></p>
                    <h6> Tabel utama merupakan tabel yang digunakan untuk proses input data yang nantinya akan di proses dalam perhitungan dengan metode SAW. Pada tabel inilah kita bisa melakukan proses CRUD. Terdapat 5 tabel utama pada metode SAW yang saya buat yaitu, Tabel Alternatif, Tabel Kriteria, Tabel Bobot, Tabel Matrix, Tabel Skala </h6>
                </div>
            </div>
        </div>
        <br>

        <div class="card mt-3">
            <div class="card-header bg-dark text-center text-white fs-22">
                <h4>Tabel Kriteria</h4>
            </div>
            <div class="card-body ">
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
                            <td><?php echo $c['nm_kriteria']; ?></td>
                            <td><?php echo $c['tipe']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <a class="btn btn-success fs-5 center" href="form/formkriteria.php">Lihat Tabel</a>

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
                            <td><?php echo $c['nm_alternatif']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>

                </table>
                <a class="btn btn-success fs-5 center" href="form/formalternatif.php">Lihat Tabel</a>
            </div>
        </div>
    </div>
    <!-- TABEL ALTERNATIF-->

    <!-- TABEL BOBOT-->
    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header bg-dark text-center text-white fs-18">
                <h4>Tabel Bobot</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <td>Id Bobot</td>
                            <td>Id Kriteria</td>
                            <td>Nilai Bobot</td>
                        </tr>
                    </thead>
                    <?php
                    include "config.php";
                    $idbobot = 1;
                    // $a = "SELECT * FROM tb_bobot";
                    $a = "SELECT * FROM tb_bobot INNER JOIN tb_kriteria ON tb_bobot.id_kriteria = tb_kriteria.id_kriteria";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $idbobot++; ?></td>
                            <td><?php echo $c['nm_kriteria']; ?></td>
                            <td><?php echo $c['bobot']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <a class="btn btn-success fs-5 center" href="form/formbobot.php">Lihat Tabel</a>
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
                            <td>Nama Alternatif</td>
                            <td>Nama Kriteria</td>
                            <td>bobot</td>
                            <td>keterangan</td>
                        </tr>
                    </thead>
                    <?php
                    include "config.php";
                    $idmatrix = 1;
                    $a = "SELECT * FROM tb_matrix INNER JOIN tb_alternatif ON tb_matrix.id_alternatif = tb_alternatif.id_alternatif INNER JOIN tb_bobot ON tb_matrix.id_bobot = tb_bobot.id_bobot INNER JOIN tb_skala ON tb_matrix.id_skala = tb_skala.id_skala INNER JOIN tb_kriteria ON tb_bobot.id_kriteria = tb_kriteria.id_kriteria";
                    // $a = "SELECT * FROM tb_matrix";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $idmatrix++; ?></td>
                            <td><?php echo $c['nm_alternatif']; ?></td>
                            <td><?php echo $c['nm_kriteria']; ?></td>

                            <td><?php echo $c['bobot']; ?></td>
                            <td><?php echo $c['keterangan'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <a class="btn btn-success fs-5 center" href="form/formmatrix.php">Lihat Tabel</a>
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
                            <td><?php echo $c['value_skala']; ?></td>
                            <td><?php echo $c['keterangan']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <a class="btn btn-success fs-5 center" href="form/formskala.php">Lihat Tabel</a>
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