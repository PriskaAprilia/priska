<!--
    $lopp = 1 = aku data ke ke- ".$i." "dan mendapatkan emas";
    $lopp = 2 = aku data ke ke- ".$i." "dan mendapatkan perak";
    $lopp = 3 = aku data ke ke- ".$i." "dan mendapatkan perunggu";
    $lopp = 4 s/d 6 ="aku data ke-".$i."dan mendapatkan tas laptop<br>";
    $lopp = 7 s/d 9 ="aku data ke-".$i."dan mendapatkan tas karung<br>";
    $lopp >= 10 ="aku data ke-".$i."tidak mendapatkan apaapa";
-->

<?php
$loop=10;
$num=1;
for ($i=0 ;$i <= $loop ; $i++){
    if ($i == 1){
        echo "aku data ke-".$num++."dan mendapatkan hadiah emas<br>";
    }elseif($i == 2){
        echo "aku data ke-".$num++."dan mendapatkan hadiah perak<br>";
    }elseif($i == 3){
        echo "aku data ke-".$num++."dan mendapatkan hadiah perunggu<br>";
    }elseif($i >= 4 && $i <= 6){
        echo "aku data ke-".$num++."dan mendapatkan hadiah tas laptop<br>";
    }elseif($i >= 7 && $i <= 9){
        echo "aku data ke-".$num++."dan mendapatkan hadiah tas karung<br>";
    }else{
        echo "aku data ke-".$num++."dan tidak mendapatkan apaapa<br>";
    }
}
?>