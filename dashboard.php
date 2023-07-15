<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Caesar+Dressing" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/img/logo.ico">
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
        <!-- <p>Menyediakan Berbagai Macam Alat yang Bisa Membuat Anda Tersetrum</p> -->
    </div>

    <div class="topnav">
        <a href="index.php" style="float:right">Log Out</a>
    </div>

    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>Pesanan Barang</h2>

                <table style="width:100%">

                    <?php
                    $fp = fopen("db.txt", "r");

                    echo "<tr>";
                    echo "<th style='width:4%'>" . "ID" . "</th>";
                    echo "<th>" . "Nama" . "</th>";
                    echo "<th style='width:10%'>" . "Jumlah" . "</th>";
                    echo "<th style='width:15%'>" . "Harga" . "</th>";
                    echo "</tr>";

                    $item = 0;
                    while($isi = fgets($fp, 1000)) {
                        $item++;
                        $cetak = explode("|", $isi);

                        echo "<tr>";
                            echo "<td>" . $cetak[0] . "</td>";
                            echo "<td>" . $cetak[1] . "</td>";
                            echo "<td>" . $cetak[2] . "</td>";
                            echo "<td>" . $cetak[3] . "</td>";
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
                <p>Toko <b>IniElektronik</b> menyediakan berbagai macam barang elektronik yang bisa membuat Anda kesetrum</p>
            </div>
            <div class="card">
                <h3>Kontak</h3>
                <a href="https://github.com/yorsyd" target="_blank">GitHub</a>
                <a href="https://instagram.com/yorsyd" target="_blank">Instagram</a>
            </div>
        </div>
    </div>
    
    <div class="footer">
        <p>@Copyright <b><a href="https://github.com/yorsyd/responsi-pweb/" target="_blank">IniElektronik 2023</a></b></p>
    </div>

</body>

</html>