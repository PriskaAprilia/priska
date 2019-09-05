<?php
$arrNilai = array ("Ani" => 80, "otim" => 90, "Sri" => 75,"Budi" => 85);
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

sort ($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan sort()</br>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

rsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengukuran dengan rsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>