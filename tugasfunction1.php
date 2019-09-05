<?php
function lingkaran($jari ="8" , $V= "3.14"){
    echo "<b> luas lingkaran </b><br>";
    echo "jarijari : ". $jari. "<br>";
    echo "V : ".$V. "<br>.";
    echo "luas lingkaran adalah : 
    ". 3.14 * $jari * $jari."<hr>";
} 
$b = 30;
$d = 10;
lingkaran();

function keliling($V = "3.14",$diameter = "6"){
    echo "<b> keliling lingkaran</b><br>";
    echo "V : ".$V."<br>";
    echo "diamete : ".$diameter. "<br>";
    echo "jadi, keliling lingkaran adalah : ".$V *$diameter; 
}
$r = 12;
$t = 13;
keliling();

?>