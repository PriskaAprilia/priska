<?php
$a = [
    ['nama' => 'ujang','kelas' => 'XI RPL2','alamat'=> 'rancamayar'],
    ['nama' => 'Mahmud', 'kelas' => 'XI RPL2','alamat'=> 'Bojong sayang'],
    ['nama' => 'Ucok', 'kelas'=> 'XI RPL2','alamat' => 'Bojong kukun']

];

echo"<pre>";
print_r ($a);
echo"</pre>";
$mode = current ($a[2]);
echo $mode."<br>";
$mode = current ($a[1]); 
echo $mode."<br>";
next($a);
$mode = key ($a);
echo $mode."<br>";
reset($a);
$mode = current ($a[1]);
echo $mode."<br>";

