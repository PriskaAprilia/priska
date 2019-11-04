<?php
if (isset($_POST['Input'])) {
    $p = $_POST['nama'];
    $r = $_POST['nip'];
    $i = $_POST['jenis'];
    $s = $_POST['alamat'];
    $k = $_POST['status'];
    $a = $_POST['jabatan'];
    $n = $_POST['potongan'];
    $z = $_POST['golongan'];
    echo "nama : $p <br>";
    echo "nip : $r<br>";
    echo "jenis :$i<br>";
    echo "alamat :$s<br>";
    echo "status :$k<br>";
    echo "jabatan :$a<br>";
    echo "potongan :$n<br>";
    echo "golongan :$z<br>";
    if (isset($_POST[''])){
        echo"status : menikah dapat tunjangan Rp. 100.000<br>";
    }if (isset($_POST[''])){
        echo"status : belum menikah dapat tunjangan Rp. 50.000<br>";
    }
    

}
?>