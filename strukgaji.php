<html>
<head><title>STRUKGAJI</title></head>
<body>
<FORM ACTION="prosesgaji.php" METHOD="POST" NAME="input">
NAMA : <input type="text" name="nama"><br><br>
NIP:   <input type="number" name="total"><br><br>
JENIS KELAMIN :<br><input type="radio" name="kelamin" value="laki-laki" checbox>laki-laki<br><br>
               <input type="radio" name="kelamin" value="perempuan" checbox>perempuan<br><br>

<table>ALAMAT : <table><textarea name="alamat" cols="40"rows="5"></textarea></td><br>
<td>STATUS : </td>
<td><select name="status">
<option value = "menikah">menikah</option>
<option value = " belum menikah">belum menikah</option>
</select></td>

<tr>
<td>JABATAN : </td>
<td><select name="jabatan">
<option value = "HRD">HRD</option>
<option value = " MANAGER">MANAGER</option>
<option value = "STAFF">STAFF</option>
<option value = "KARYAWAN">KARYAWAN</option>
</select></td>

POTONGAN : <input type="checkbox" name="pilihan1" value="checbox"BPJS>BPJS
           <input type="checkbox" name="pilihan2" value="checbox"OPERASI>OPERASI
           <input type="checkbox" name="pilihan3" value="checbox"JAMSOSTEK>JAMSOSTEK

<tr>
<td>GOLONGAN :  </td>
<td><select name="golongan">
<option value = "A1">A1</option>
<option value = "A2">A2</option>
<option value = "A3">A3</option></td>
</tr>
<br><br><input type="submit" name="Input" value="simpan"></br></br>
</form>
</body>
</html>