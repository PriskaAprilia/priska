<?php
$arrNilai = array 
("Ajeng" => 90, "Mamat" => 70, "ucup" => 87,
"aang" => 95,"syahrul" => 75);
foreach ($arrNilai as $nama=> $nilai){
    echo"<pre>";
if ($nilai > 85) {
    echo "nama : $nama , Nilai : $nilai, grade A<br>";
}elseif ($nilai > 75) {
    echo "nama : $nama , Nilai : $nilai, grade B<br>";
}elseif ($nilai > 65) {
    echo "nama : $nama , Nilai : $nilai, grade C<br>";
     
    }
    echo"</pre>";
}