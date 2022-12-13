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

    <div class="container">
        <!-- CARD -->
        <div class="container mt-5">
            <div class="row m-5">
                <div class="col-lg-4 col-md-4 col-sm-2 col-4 mt-3">
                    <div class="card text-center">
                        <img src="img/baru.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4>DSS Rekomendasi BPNT Metode WP</h4>
                            <p>Informatic and Computational Intelegent Journal
                                Vol. 3, No. 2, November 2021, 55-69
                                P-ISSN: 2657-0424, E-ISSN: 2657-0432</p>
                            <a href="https://drive.google.com/file/d/1nt5U0rPIBsYLwuDGmcAv3WZbxoO9ghYr/view?usp=share_link" target="_blank" class="btn btn-primary d-grid">Referensi Pertama</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-4 mt-3">
                    <div class="card text-center">
                        <img src="img/baru.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4>SPK Rekomendasi Bantuan UMKM</h4>
                            <p>Techno Xplore
                                Jurnal Ilmu Komputer dan Teknologi Informasi
                                ISSN: 2503-054X
                                Vol. 7 No: 2, Oktober 2022</p>
                            <a href="https://drive.google.com/file/d/1EIQ5uLfmNUjJwkJE2C0s-k3Ys5FLwVgz/view?usp=share_link" target="_blank" class="btn btn-primary d-grid">Referensi Kedua</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-4 mt-3">
                    <div class="card text-center">
                        <img src="img/baru.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4>SPK Penerima Bantuan UMKM Metode MAUT</h4>
                            <p>Jurnal Nasional Komputasi dan Teknologi Informasi
                                Vol. 5 No. 2, April 2022
                                P-ISSN 2620-8342
                                E-ISSN 2621-3052</p>
                            <a href="https://drive.google.com/file/d/1KXbWMEC7LdwR3ZO_ojjBegEQPUoFrA4O/view?usp=share_link" target="_blank"  class="btn btn-primary d-grid">Referensi Kedua</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CARD -->
    </div>

    <br>
    <div class="footer text-center">
        <p>Aldian Faizzul Anwar-200605110170 &copy; <?php echo date("Y") ?></p> <!-- membuat tahun secara dinamic dengan PHP  -->
    </div>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>