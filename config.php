
        <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "backup";
        $koneksi = mysqli_connect($host, $username, $password, $database);
        if ($koneksi){
        } else {
            echo "Server not Connected";
        }
        ?>
