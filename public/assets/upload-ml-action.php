<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['fileMicrowaveLink']['name']) ;
move_uploaded_file($_FILES['fileMicrowaveLink']['tmp_name'], $target);
 
// beri permisi agar file xls dapat di baca
chmod($_FILES['fileMicrowaveLink']['name'],0777);
 
// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['fileMicrowaveLink']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);
 
// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){
 
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	// $id     = $data->val($i, 1);
	$client_name   = $data->val($i, 1);
	$curr_lic_num  = $data->val($i, 2);
	$link_id  = $data->val($i, 3);
	$tanggal  = $data->val($i, 4);
	$metode  = $data->val($i, 5);
	$no_risalah_hasil  = $data->val($i, 6);
	$stn_name  = $data->val($i, 7);
	$stasiun_lawan  = $data->val($i, 8);
	$koor_long  = $data->val($i, 9);
	$koor_lat  = $data->val($i, 10);
	$tx_mhz  = $data->val($i, 11);
	$rx_mhz  = $data->val($i, 12);
	$bw_mhz  = $data->val($i, 13);
	$merk_perangkat  = $data->val($i, 14);
	$sertifikat  = $data->val($i, 15);
	$status  = $data->val($i, 16);
	$keterangan  = $data->val($i, 17);

	if($id != "" && $client_name != "" && $curr_lic_num != "" && $link_id != "" && $tanggal != "" && $metode != "" && $no_risalah_hasil != "" && $stn_name != "" && $stasiun_lawan != "" && $koor_long != "" && $koor_lat != "" && $tx_mhz != "" && $rx_mhz != "" && $bw_mhz != "" && $merk_perangkat != "" && $sertifikat != "" && $status != "" && $keterangan != ""){
		// input data ke database (table data_pegawai)
		mysqli_query($koneksi,"INSERT into microwave_links values('$id','$client_name','$curr_lic_num', '$link_id', '$tanggal', '$metode', '$no_risalah_hasil', '$stn_name', '$stasiun_lawan', '$koor_long', '$koor_lat', '$tx_mhz', '$rx_mhz', '$bw_mhz', '$merk_perangkat', '$sertifikat', '$status', '$keterangan')");
		$berhasil++;
	}
}
 
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['fileMicrowaveLink']['name']);
 
// alihkan halaman ke index.php
header("location:index.php?berhasil=$berhasil");
?>