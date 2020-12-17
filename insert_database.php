<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kota = $_POST['kota'];
$apotik = $_POST['apotik'];
$tanggalpesan = $_POST['tanggalpesan'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$satuan = $_POST['satuan'];
$tglproduksi = $_POST['tglproduksi'];


$gol = $_POST['gol'];

if ($gol == 'A') {
	$tglexpired  = date('Y-m-d', strtotime('+1 year', strtotime($tglproduksi)));
}else{
	$tglexpired  = date('Y-m-d', strtotime('+5 year', strtotime($tglproduksi)));
}

$order = $_POST['order'];
$distributor = $_POST['distributor'];
$sales = $_POST['sales'];
$warnabaju = $_POST['warnabaju'];




if ($apotik == 'Asean' && $gol == 'A') {
	$hargajual = ((35/100 * $harga) + $harga);
}elseif ($apotik =='Asean' && $gol=='B') {
	$hargajual = ((15/100 * $harga) + $harga);
}elseif ($apotik == 'Kimia Farma' && $gol == 'A') {
	$hargajual = ((35/100 * $harga) + $harga);
}elseif ($apotik == 'Kimia Farma' && $gol == 'B') {
	$hargajual = ((13/100 * $harga) + $harga);;
}else{
	$harga;
}

 




// menginput data ke database
mysqli_query($koneksi,"insert into penjualan values('','$kota','$apotik','$tanggalpesan','$jenis','$harga','$satuan','$tglproduksi',
'$tglexpired','$hargajual','$gol','$order','$distributor','$sales','$warnabaju')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>

