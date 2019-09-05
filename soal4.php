<?php
$array = array ('barang','harga','berat');
$aso = [
    'barang' => 'buku tulis',
    'harga' => 'harga',
    'berat' => '100 gram',
]

];
foreach($aso as $data ){
    echo $array[0].':'.$data ["barang"]."<br>";
    echo $array[1].':'.$data ["harga"]."<br>";
    echo $array[2].':'.$data ["berat"]."<br>";
}