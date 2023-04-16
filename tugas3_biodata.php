<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
</head>
<body>
	<h2>Input Biodata</h2>
	<form method="post" action="">
		<label for="nama">Nama:</label>
		<input type="text" id="nama" name="nama"><br><br>
        <label for="tempat_lahir">Tempat Lahir:</label>
		<input type="text" id="tempat_lahir" name="tempat_lahir"><br><br>
        <label for="tanggal_lahir">Tanggal Lahir:</label>
		<input type="date" id="tanggal_lahir" name="tanggal_lahir"><br><br>
        <label for="jenis_kelamin">Jenis Kelamin:</label>
		<input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki">
		<label for="laki-laki">Laki-laki</label>
		<input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
		<label for="perempuan">Perempuan</label><br><br>
		<label for="umur">Umur:</label>
		<input type="number" id="umur" name="umur"><br><br>
		<label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat"></textarea><br><br>
        <label for="hobi">Hobi:</label>
		<input type="text" id="hobi" name="hobi"><br><br>
		<input type="submit" value="Submit">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$nama = $_POST["nama"];
            $tempat_lahir = $_POST["tempat_lahir"];
            $tanggal_lahir = $_POST["tanggal_lahir"];
            $jenis_kelamin = $_POST["jenis_kelamin"];
			$umur = $_POST["umur"];
			$alamat = $_POST["alamat"];
            $hobi = $_POST["hobi"];

			echo "<h2>Biodata</h2>";
			echo "<p>Nama: $nama</p>";
            echo "<p>Tempat Lahir: $tempat_lahir</p>";
			echo "<p>Tanggal Lahir: $tanggal_lahir</p>";
			echo "<p>Jenis Kelamin: $jenis_kelamin</p>";
			echo "<p>Umur: $umur tahun</p>";
			echo "<p>Alamat: $alamat</p>";
            echo "<p>Hobi: $hobi</p>";
		}
	?>
</body>
</html>