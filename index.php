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
    <?php include 'header.php'; ?>

    <div class="topnav"></div>

    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>Daftar Barang</h2>

                <table style="width:100%">

                    <?php
                    include 'db.php';

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
                    echo "<th>" . "Harga" . "</th>";
                    echo "<th style='width:6%'>" . "Stok" . "</th>";
                    echo "</tr>";

                    for ($i = 0; $i < lengthArray($gudang); $i++) {

                        echo "<tr>";
                        echo "<td>" . $gudang[$i]['id'] . "</td>";
                        echo "<td>" . $gudang[$i]['nama'] . "</td>";
                        echo "<td>" . $gudang[$i]['harga'] . "</td>";
                        echo "<td>" . $gudang[$i]['stok'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
        <?php include 'sidebar.php' ?>
    </div>
    <div class="footer">
        <p>@Copyright <b><a href="https://github.com/Meng-Alpro" target="_blank">Meng-Alpro 2023</a></b></p>
    </div>

</body>

</html>