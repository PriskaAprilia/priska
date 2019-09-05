<?php
// sekarang tanggal 13 april 2006 09:43:49
$arrDay = array ("minggu","senin","selasa","rabu","kamis","jumat","sabtu");
$day = date ("w");      //0 - 6 og day 

echo "hari ini hari : <b>" .$arrDay[$day]."</b>";
?>