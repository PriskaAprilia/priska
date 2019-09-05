<?php
$aso =[
    [
       'data' => '<br> Data mobil 0</br>',
       'jenis' => '<br>*</b> volvo',
       'no' => '<br>*</b> 22',
       'no2' => '<br>*</b> 18',
    ],
    [
      'data' => '<br> Data mobil 1 </br>',
       'jenis' => '<br>*</b> Bmw',
       'no' => '<br>*</b> 15',
       'no2' => '<br>*</b> 13',

    ],
    [   'data' => '<br> Data mobil 2</br>',
        'jenis' => '<br>*</b> saab',
        'no' => '<br>*</b> 5',
        'no2' => '<br>*</b> 2',

],
[    'data' => '<br> Data mobil 3</br>',
        'jenis' => '<br>*</b> land lover',
        'no' => '<br>*</b> 17',
        'no2' => '<br>*</b> 15',

],
foreach($aso as $data){
    echo $data ["data"]."<br>";
    echo $data ["harga"]."<br>";
    echo $data ["no"]."<br>";
    echo $data ["no2"]."<br>";
    
}