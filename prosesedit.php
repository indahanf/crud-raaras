<?php

	$nim = $_REQUEST['nim'];

	include "koneksi.php";
	$query = mysqli_query($conn, "SELECT * FROM DATA where nim=' " .$nim . " ' ");
	
	$nama = "";
	$nohp = "";
	$judulbuku = "";
	$tglpinjam = "";
	$tglkembali = "";

	while ($data = mysqli_fetch_array($query)) {
		$nama = $data['nama'];
		$nohp = $data['nohp'];
		$judulbuku = $data['judulbuku'];
		$tglpinjam = $data['tglpinjam'];
		$tglkembali = $data['tglkembali'];
	}


?>

<html>
<head>
	<title></title>
</head>
<body>
	<div align="center" style="background-color: lightblue; width: 1000px; padding: 1px;">
			<h1 style="text-align: center;">Form Edit</h1>
			<form name="isi" method="POST" action="">
				<table border="0" width="250">
					<tr>
						<td>Nama Lengkap</td> 
						<td>:</td>
						<td><input type="text" name="nama" value="<?php echo $data['nim'] ?>"></td>
					</tr>
					<tr>
						<td>NIM</td>
						<td>:</td>
						<td><input type="text" name="nim" value="<?php echo $data['nama'] ?>"></td>
					</tr>
					<tr>
						<td>Nomor Telepon/HP</td>
						<td>:</td>
						<td><input type="text" name="nohp" value="<?php echo $data['nohp'] ?>"></td>
					</tr>
					<tr>
						<td>Judul Buku</td>
						<td>:</td>
						<td><input type="text" name="judulbuku" value="<?php echo $data['judulbuku'] ?>"></td>
					</tr>
					<tr>
						<td>Hari dan Tanggal Peminjaman</td>
						<td>:</td>
						<td><input type="text" name="tglpinjam" value="<?php echo $data['tglpinjam'] ?>"></td>
					</tr>
					<tr>
						<td>Hari dan Tanggal Pengembalian</td>
						<td>:</td>
						<td><input type="text" name="tglkembali" value="<?php echo $data['tglkembali'] ?>"></td>
					</tr>	
				</table>
			</form>
			
		</div>

		<script type="text/javascript">
			function simpan() {
				$('#edit').attr("action","edit.php?nim=<?php echo $nim; ?>");
				$('edit').submit;
			}
		</script>
</body>
</html>
