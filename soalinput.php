<html>
<head><title>TUGAS</title>
</head>
<body>
<FORM ACTION="soalinput.php" METHOD="POST" NAME="input">
<table>
<tr>
<td>NAMA</td>
<td><input type="text" name="nama"></td><br>
</tr>
<tr>
<td>NIS</td>
<td><input type="text" name="nis"></td><br>
</tr>
<tr>
<td>ALAMAT</td>
<td><textarea name="alamat" cols="40"rows="5"></textarea></td><br>
</tr>
<tr>
<td>JENIS KELAMIN</td>
<td><input type="radio" name="kelamin" value="laki-laki">laki-laki</input></td><br>
<td><input type="radio" name="kelamin" value="perempuan">perempuan</input></td><br>
</tr>
<tr>
<td>AGAMA<td> 
<td> <select name="agama"><br>
        <option value="islam">islam</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option><br></select></td>
        </tr>
        <tr>
ASAL SEKOLAH : <input type="text" name="sekolah "><br><br>
NAMA ORANGTUA/WALI:  <input type="text" name="orangtua"><br><br>
MAPEL YANG DISUKAI :
                      <input type="checkbox" name="mapel1" value="MTK"checked>MTK
                      <input type="checkbox" name="mapel2" value="IPA">IPA
                      <input type="checkbox" name="mapel3" value="IPS">IPS
                      <input type="checkbox" name="mapel4" value="PAI">PAI
                      <input type="checkbox" name="mapel4" value="INDO">INDO<br><br>
TOTAL NILAI IJAZAH SMK : <input type="number" name="total"><br><br>
EMAIL :    <input type="email" name="email"><br><br>
<input type="submit" name="Proses" value="Input">
</body>
</html>
