<html>
<head><title>TUGASPIRAMIDTERBALIK</title>
</head>
<body>
<FORM ACTION="" METHOD="POST" NAME="input">
masukan bilangan : <input type="number" name="blg"><br>
<input type="submit" name="pilih" value="simpan"><br>
</body>
</html>
<br>

<?php
if( isset($_POST['pilih'])){
    $b = $_POST['blg'];
    echo"total bintang :$b<br>";
    for ($i=0; $i <= $b; $i++){
        for ($z=1; $z <=  $i; $z++){
       echo "&nbsp;&nbsp;";
        }
        for ($v=1; $v <= $b -$i; $v++){
            echo "*&nbsp;&nbsp;";
        }
        echo "<br>";
    }
}
?>

