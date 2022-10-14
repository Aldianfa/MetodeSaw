<html>
    <head>
        <title>View Normalisasi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <h1 class="text text-center">Tabel View Normalisasi</h1>
        <br>
        <table class="table table-striped">
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
            $b = $koneksi -> query($a);
            while ($c = $b -> fetch_array()) {
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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    </body>
</html>