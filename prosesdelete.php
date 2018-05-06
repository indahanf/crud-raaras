<?php 


	include "koneksi.php";
	if (isset($_GET['nim']) ) {
		$nim = $_GET['nim'];

		$query = mysqli_query($conn, "DELETE FROM DATA WHERE nim=$nim");

		if ($query) {
			echo "Data Berhasil didelete";
		} else {
			echo "Data Gagal didelete";
		}
		echo "<br /> <br /><a href ='view.php'>Lihat Data</a>";

	} else {
		die("akses dilarang");
	}
	

	
	
?>