<?php
if(isset($_POST['pilih'])){
    $nama= $_POST ['nama'];
    $nis=$_POST ['nis'];
    $alamat=$_POST ['alamat'];
    $jeniskelamin=$_POST ['agama'];
    $agama=$_POST ['kelamin'];
    $asalsekolah=$_POST ['sekolah'];
    $namaorgtua=$_POST ['orangtua'];
    $totalijazahsmk=$_POST ['total'];
    $email=$_POST ['email'];
    echo "nama : <b>$nama<br></b>";
    echo "nis: <b>$nis<br></b>";
    echo "alamat: <b>$nalamt<br></b>";
    echo "jeniskelamin : <b>$jeniskelamin<br></b>";
    echo "Agama : <b>$agama<br></b>";
    echo "asalsekolah: <b>$asalsekolah<br></b>";
    echo "namaorgtua: <b>$namaorgtua<br></b>";
    echo "totalijazah : <b>$totalijazahsmk<br></b>";
    echo "email : <b>$email<br></b>";
    }
?>