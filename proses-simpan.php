
<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	$npm            = mysql_real_escape_string(trim($_POST['npm']));
	$nama           = mysql_real_escape_string(trim($_POST['nama']));
	$kelas			= $_POST['kelas'];

	

	$prodi = $_POST['prodi'];
	$matkul1         = $_POST['matkul1'];
	$matkul2         = $_POST['matkul2'];


	
	$query = mysql_query("INSERT INTO is_siswa(	npm,
											 	nama,
												kelas,
												prodi,
												matkul1,
												matkul2)	
										VALUES(	'$npm',
												'$nama',
												'$kelas',
												'$prodi',
												'$matkul1',
												'$matkul2')");		

// cek hasil query
	if ($query) {
		
		echo "Data berhasil disimpan, <a href='index.php'>Lihat Data</a>";
	} else {
		
		echo "GAGAL!";
	}						
}
?>