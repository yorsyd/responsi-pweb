<?php
include 'db.php';

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
    
    header("Location: index.php");
    
    $fp = fopen("db.txt", "a+");
    fputs($fp, "$input_id | $input_name | $input_harga | $input_jumlah\n");
    fclose($fp);
}
?>