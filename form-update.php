<?php

include "koneksi.php";

// kalau tidak ada id di query string
if( !isset($_GET['nim']) ){
    header('Location: view.php');
}

//ambil id dari query string
$nim = $_GET['nim'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM DATA WHERE nim=$nim";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<h1 align="center">Form Edit</h1>
	<hr>
	<div align="center" class="content">
		
		<form name="isi" method="POST" action="edit.php">
			<table border="0" width="250">
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td width="900">
						<input type="text" name="nama" value="<?php echo $data['nama'] ?>" required>
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td width="900"><input type="text" readonly name="nim" value="<?php echo $data['nim'] ?>"></td>
				</tr>
				<tr>
					<td>No Hp</td>
					<td>:</td>
					<td width="800"><input type="text" name="nohp" value="<?php echo $data['nohp'] ?>" required></td>
				</tr>
				<tr>
					<td>Judul Buku</td>
					<td>:</td>
					<td width="800"><input type="text" name="judulbuku" value="<?php echo $data['judulbuku'] ?>" required></td>
				</tr>
				<tr>
					<td>Tanggal peminjaman</td>
					<td>:</td>
					<td width="800"><input type="text" name="tglpinjam" value="<?php echo $data['tglpinjam'] ?>" required></td>
				</tr>
				<tr>
					<td>Tanggal Pengembalian</td>
					<td>:</td>
					<td width="800"><input type="text" name="tglkembali" value="<?php echo $data['tglkembali'] ?>" required></td>
				</tr>
				<tr>
					<td colspan="2"></td>
					<td>
						<input type="submit" name="btnsubmit" class="btnsubmit" id="id_submit" value="Submit"/>
						<button type="button" name="btncnc" class="btncnc" id="id_cnc">Cancel</button>
					</td>	
							
				</tr>	
			</table>
		</form>
		<br /> <br /><a href ='view.php'>Lihat Data</a>
	</div>
	
		
</body>
</html>
