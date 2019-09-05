<?php
$array = array('judul ','penulis');
$aso =[
    [
       'judul' => 'Belajar PHP & MYSQL untuk pemula',
       'penulis' => 'admin SMK',

    ],
    [
       'judul' => 'Tutorial PHP dari Nol hingga Mahir',
       'penulis' => 'admin SMK',  
    ],
    [
        'judul:' => 'Membuat Aplikasi Web dengan PHP',
        'penulis :' => 'admin SMK',  
    ],

];
foreach ($aso as $data){
    echo $data["judul"] . "<br>";
    echo $data["penulis"] . "<br>";
}
echo '<hr>';
$countaso = count($aso);
for ($i=0; $i <$countaso; $i++){
    echo $aso[$i]["judul"] . "<br>";
    echo $aso[$i]["penulis"] . "<br>";
}
?>