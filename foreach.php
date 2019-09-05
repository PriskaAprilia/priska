<?php
$array = array('saya <br>',20);
$aso = [
    [
       'nama' => 'priska',
       'kelas' => 'XI RPl 2',

    ],
    [ 
        'nama' => 'anya',
        'kelas' => 'XI RPL 2',

    ]


];
foreach ($aso as $value) {
    echo $value["nama"] . "<br>";
    echo $value["kelas"] . "<br>";

}
echo '<hr>';
$countaso = count($aso);
for ($i=0; $i <$countaso; $i++){
    echo $aso[$i]["nama"] . "<br>";
    echo $aso[$i]["kelas"] . "<br>";
}
?>