<html>
<head><title>Pengolahan Form</title></head>
<body>
<FORM ACTION="" METHOD="POST" NAME="input">
Nama Anda : <input type="text" name="nama"><br><br>
kelas     : <input type = "text" name="kelas"><br><br><br>
Alamat    : <input type = "text" name="alamat"><br><br><br>
Hobi      : <input type = "text" name="hobi"><br><br><br>
<input type="submit" name="Input" value="Simpan">


</FORM>
</body>
</html>

<?php
if (isset($_POST['Input'])) {
$nama = $_POST['nama'];
$a = $_POST['kelas'];
$b = $_POST['alamat'];
$c = $_POST['hobi'];
echo "Nama Anda : <b>$nama</b><br>";
echo "kelas : <b>$a</b><br>";
echo "alamat : <b>$b</b><br>";
echo "hobi: <b>$c</b><br>";
}
?>
