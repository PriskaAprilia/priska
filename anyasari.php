<shtml>
<html>
<head>
	<title>Anya suka</title>
</head>
<body>
<form action="" method="GET">
	<center><h2>Soal ulangan</h2></center>
	<fieldset>
		<legend>Soal ulangan</legend>
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="textarea" name="alamat" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jenis" value="Laki-laki" checked>Laki-laki</td>
				<td><input type="radio" name="jenis" value="Perempuan">Perempuan</td>
			</tr>
			<tr>
				<td>Tanggal Beli</td>
				<td><input type="date" name="tanggal" required></td>
			</tr>
			<tr>
				<td>Jumlah Pembelian buku</td>
				<td><input type="number" min="1" name="jumlah" required></td>
			</tr>
		</table>
		<ol><input type="submit" name="input" value="Simpan"></ol>
		</form>
		<form action="ulangan2.php" method="POST">
			<?php
				if (isset($_GET['input'])) {
					$jlm = $_GET['jumlah']; ?>		
				<table>
					<tr>
						<td><label for=>Judul Buku</label></td>
						<td><input type="text" name="judul[]" required><br></td>
					</tr>
					<tr>
						<td><label for=>Kode Buku</label></td>
						<td><input type="text" name="kode[]" required></td>
					</tr>
					<tr>
						<td><label for=>Pengarang Buku</label></td>
						<td><input type="text" name="pengarang[]" required></td>
					</tr> 
					<tr>
						<td><label for=>Jenis Buku</label></td>
						<td><select name="buku[]" id="">
							<option value="Novel">Novel</option>
							<option value="Fiksi">Fiksi</option>
							<option value="Horror">Horror</option>
							<option value="Cergam">Cergam</option>
							<option value="Komik">Komik</option>
						</select>
					</tr>
					<tr>
						<td><label for=>Harga Buku</label></td>
						<td><input type="number" name="harga[]" required></td>
					</tr>
				</table>
				<br>
				<?php } ?>
				<input type="submit" name="save" value="Simpan">
				<input type="reset" value="Reset">
		</form>
		
	</fieldset>
</body>
</html>