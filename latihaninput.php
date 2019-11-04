<?php
if (isset($_POST['Input'])){
$nama = $_POST ['a'];
$e = $_POST ['mapel1'];
$z = $_POST ['mapel2'];
echo "nama : <b>$nama</b><br>";
echo "mapel1 : <b>$e</b><br>";
echo "mapel2 : <b>$z</b><br>";
$rata = ($e + $z ) / 2;
echo "rata-rata : <b>".$rata."</b><br>";
}if ($rata >= 75) {
    echo "status : <b>LULUS</b>";
}else{
    echo "status : <b>TIdak lulus</b>";
}
?>









