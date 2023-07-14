<?php
include 'db.php';
include 'beli.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST["id-product"]);
    $jumlah = ($_POST["stock-product"]);
    for ($i = 0; $i < sizeof($gudang); $i++){
        if($id == $gudang[$i]['id']){
            $input_name = $gudang[$i]['nama'];
            $input_id = $gudang[$i]['id'];
            $input_harga = $gudang[$i]['harga'];
            $input_jumlah = $jumlah;
        }   
    }

    $i = count($beli);
    
    $addProduct = array(
        $beli[$i]['nama'] = $input_name,
        $beli[$i]['id'] = $input_id,
        $beli[$i]['harga'] = $input_harga,
        $beli[$i]['jumlah'] = $input_jumlah
    );

    // Sebelum
    // echo "<pre>";
    // print_r($gudang);
    // echo "</pre>";

    header("Location: index.php");

    file_put_contents('beli.php', '<?php $beli = ' . var_export($beli, true) . ';');
}
?>