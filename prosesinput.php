<html>
	<head>
		<title>
			Data Peminjaman Buku
		</title>
		<link rel="stylesheet" type="text/css" href="index.css">
	<head>
	<body>
		<div class="header">
			Data Peminjam
		</div>
		
		<div style="padding-left: 100px;" align="left" class="content">
			<?php 
				include "koneksi.php";
				$nama = $_POST['nama'];
				$nim = $_POST['nim'];
				$nohp = $_POST['nohp'];
				$judulbuku = $_POST['judulbuku'];
				$tglpinjam = $_POST['tglpinjam'];
				$tglkembali = $_POST['tglkembali'];
				$query = mysqli_query($conn, "INSERT INTO data (nama, nim, nohp, judulbuku, tglpinjam, tglkembali) VALUES ('$nama','$nim','$nohp','$judulbuku','$tglpinjam','$tglkembali')");
				
				if ($query) {
					echo "Nama : $nama
					<br> Nim : $nim
					<br> No Telepon : $nohp
					<br> Judul Buku : $judulbuku
					<br> Tanggal Peminjaman : $tglpinjam
					<br> Tanggal Pengembalian : $tglkembali";
				} else {
					echo "Data Gagal diinput";
				}
				echo "<br /> <br /><a href ='view.php'>Lihat Data</a>";
				
			?>
		</div>
		
		<div class="footer">
			Copyright &copy;2016. All Rights Reserved
		</div>
	</body>
</html>