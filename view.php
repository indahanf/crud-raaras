<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div class="header">
		Data Peminjam Buku
	</div>
	<div class="content">
		<table border="1" align="center">
		<tr>
			<td>Nama</td>
			<td>Nim</td>
			<td>No Telepon</td>
			<td>Judul Buku</td>
			<td>Tanggal Peminjaman</td>
			<td>Tanggal Pengembalian</td>
			<td>Action</td>
		</tr>
		<?php  
			include "koneksi.php";
			$query = mysqli_query($conn, "SELECT * FROM DATA");
			while ($data = mysqli_fetch_array($query)) {
				echo "
					<tr>
						<td>".$data['nama']."</td>
						<td>".$data['nim']."</td>
						<td>".$data['nohp']."</td>
						<td>".$data['judulbuku']."</td>
						<td>".$data['tglpinjam']."</td>
						<td>".$data['tglkembali']."</td>
						<td>
							<a href='form-update.php?nim=".$data['nim']."'>Edit</a> |
							<a href='prosesdelete.php?nim=".$data['nim']."'>Hapus</a>	
						</td>
						
					</tr>";	
			}

		?>

	</table>
	</div>
	
	
	<p align="center"><a href='index.html'>Tambah Data</a>
	
	<div class="footer">
			Copyright &copy;2016. All Rights Reserved
	</div>
</body>
</html>