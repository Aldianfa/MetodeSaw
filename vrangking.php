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
                    
                    <td>Id Alternatif</td>
                    <td>Nama Alternatif</td>
                    <td>Rangking</td>
                </tr>
            </thead>
            <?php
            include "config.php";
            // $idkriteria = 1;
            $a = "SELECT * FROM vrangking";
            $b = $koneksi -> query($a);
            while ($c = $b -> fetch_array()) {
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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    </body>
</html>