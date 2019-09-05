
<!-- cetak logika
total cetak gol >= 10 "mendali emas"
total cetak gol <= 8 "mendali perak"
total cetak gol >= 4 "mendali perunggu"
total cetak gol <= 4 "mengendali emas ngambang" 
-->


<?php
// if
$gol = 9;

if ($gol > 10){
    echo "mendali emas,dengan total cetak gol : " .$gol;
}elseif ($gol <= 8){
    echo "mendali perak,dengan total cetak gol : ".$gol;
}elseif ($gol >= 4){
    echo "mendali perunggu,dengan total cetak gol : ".$gol;
}
?>