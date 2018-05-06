<?php

include "koneksi.php";
if(isset($_POST['btnsubmit'])){

    // ambil data dari formulir
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $judulbuku = $_POST['judulbuku'];
    $tglpinjam = $_POST['tglpinjam'];
    $tglkembali = $_POST['tglkembali'];
    

    // buat query update
    $sql = "UPDATE data SET nama='$nama', nohp='$nohp', judulbuku='$judulbuku', tglpinjam='$tglpinjam', tglkembali='$tglkembali' WHERE nim=$nim";
    $query = mysqli_query($conn, $sql);
    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: view.php');
    } else {
        // kalau gagal tampilkan pesan
        echo $sql;
        die("Gagal menyimpan perubahan...");
        echo $sql;
    }


} else {
    die("Akses dilarang...");
}

?>