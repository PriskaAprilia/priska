<?php
echo "<fieldset>";
echo "<center><h1>ANYA</center></h1>";
if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat']; 
    $jenis= $_POST['jenis'];
    $tanggal = $_POST['tanggal'];
    $jumlah= $_POST['jumlah'];
    $kode = $_POST['kode'];
    $jumlah= $_POST['jumlah'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $buku= $_POST['buku'];
    $harga = $_POST['harga'];
    $nomer= 0;

    foreach ($nama as $data => $x){
        echo "Nama                        : " . $nama[$data] ."<br>";
        echo "Alamat                       : " . $alamat[$data] ."<br>"; 
        echo "Jenis kelamin                : " . $jenis[$data] ."<br>";
        echo "Tanggal pembelian            : ". $tanggal[$data] ."<br>";
        
    }
    echo "<hr>";
    echo "<h2> Daftar buku yang dibeli</h2>";
    foreach ($judul as $key => $value){
        echo "Judul buku                         : " . $judul[$key] . "<br>";
        echo "kode buku                         : " . $kode[$key] . "<br>";
        echo "pengarang                         : " . $pengarang[$key] . "<br>";
        echo "Jenis buku                         : " . $jenis[$key] . "<br>";
        echo "Harga buku                         : " . $harga[$key] . "<br>";
        echo"<hr>";
    
    }
    echo "<hr>";
    echo "<h3>Total pembayaran</h3>";
    for ($i=0; $i < count($harga) ; $i++){
        $hasil = $harga[$i]+$hasil;
    }
    echo"<pre>";
    echo "subtotal : $hasil <br>";
    if ($judul >= 3){
        $discon = $hasil * 5/100;
        $total = $hasil - $discon;
        echo "diskon (5%)       : $diskon<br>";
        echo "total pembayaran  : $total<br>";
    }elseif
    ($judul >= 5){
        $discon2 = $hasil * 10/100;
        $total2 =$hasil - $discon2;
        echo "diskon (10%)  : $discon2<br>";
    }else{
        $a=0;
        echo "diskon(0%)       : $a <br>";
        echo "total pembayaran : $hasil <br>";
    }
    echo "</pre>"
}
echo "<fieldset>";
?>