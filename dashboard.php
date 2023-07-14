<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Caesar+Dressing" rel="stylesheet">
    <style>
    .header h1 {
        font-family: 'Caesar Dressing';
        letter-spacing: 5px;
    }
    </style>
</head>

<body>
    <div class="header">
        <h1>IniElektronik</h1>
        <p>Menyediakan Berbagai Macam Alat yang Bisa Membuat Anda Tersetrum</p>
    </div>

    <div class="topnav">
        <a href="index.php" style="float:right">Halaman Utama</a>
    </div>

    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>Pesanan Barang</h2>

                <table style="width:100%">

                    <?php
                    include 'beli.php';

                    function lengthArray($arr) {
                        $index = 0;
                        while(isset($arr[$index])) {
                            $index = $index + 1;
                        }
                        return $index;
                    }

                    echo "<tr>";
                    echo "<th style='width:4%'>" . "ID" . "</th>";
                    echo "<th>" . "Nama" . "</th>";
                    echo "<th style='width:10%'>" . "Jumlah" . "</th>";
                    echo "<th style='width:15%'>" . "Harga" . "</th>";
                    echo "</tr>";

                    $item = 0;
                    for ($i = 0; $i < lengthArray($beli); $i++) {
                        $item++;

                        echo "<tr>";
                            echo "<td>" . $beli[$i]['id'] . "</td>";
                            echo "<td>" . $beli[$i]['nama'] . "</td>";
                            echo "<td>" . $beli[$i]['jumlah'] . "</td>";
                            echo "<td>" . $beli[$i]['harga'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
                <br>
                <b>Jumlah Pesanan: <?php echo $item ?></b>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="card">
                <h2>Tentang Kami</h2>
                <p>Toko <b>IniElektronik</b> menyediakan berbagai macam barang elektronik kebutuhan Anda</p>
            </div>
            <div class="card">
                <h3>Media Sosial</h3>
                <a href="https://github.com/yorsyd">GitHub</a>
                <a href="https://instagram.com/yorsyd">Instagram</a>
            </div>
        </div>
    </div>
    
    <div class="footer">
        <p>@Copyright <b><a href="https://github.com/yorsyd/responsi-pweb/" target="_blank">IniElektronik 2023</a></b></p>
    </div>

</body>

</html>