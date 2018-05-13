
<?php
// Panggil koneksi database

require_once "config/database.php";

if (isset($_POST['simpan'])) {
	if (isset($_POST['npm'])) {
		$npm            = mysql_real_escape_string(trim($_POST['npm']));
		$nama           = mysql_real_escape_string(trim($_POST['nama']));
		$kelas			= $_POST['kelas'];
	
		/*$tanggal       = $_POST['tanggal_lahir'];
		$tgl           = explode('-',$tanggal);
		$tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0]; */
	
		$prodi = $_POST['prodi'];
		$matkul1         = $_POST['matkul1'];
		$matkul2         = $_POST['matkul2'];

		// perintah query untuk mengubah data pada tabel is_siswa
		$query = mysql_query("UPDATE is_siswa SET nama 			= '$nama',
												  kelas 		= '$kelas',
												  prodi			= '$prodi',
												  matkul1		= '$matkul1',
												  matkul2 		= '$matkul2'
										    WHERE npm 			= '$npm'");		

		// cek query
		if ($query) {
			// jika berhasil tampilkan pesan berhasil update data
			//header('location: index.php?alert=3');
		echo "Data berhasil diubah, <a href='index.php'>Lihat Data</a>";
		} else {
			// jika gagal tampilkan pesan kesalahan
			//header('location: index.php?alert=1');
			echo "DATA GAGAL DIUBAH, <a href='index.php'>Kembali ke Menu Awal</a>";
		}
						
	}
}	


?>