
<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_GET['id'])) {

	$npm = $_GET['id'];

	// perintah query untuk menghapus data pada tabel is_siswa
	$query = mysql_query("DELETE FROM is_siswa WHERE npm='$npm'");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil delete data
		//header('location: index.php?alert=4');
		echo "Data berhasil dihapus, <a href='index.php'>Lihat Data</a>";
	} else {
		// jika gagal tampilkan pesan kesalahan
		//header('location: index.php?alert=1');
		echo "KWDIRIT";
	}	
}						
?>