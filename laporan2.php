<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<!-- Load file CSS Bootstrap offline -->
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	
	<div style="width: 80%; margin-left: 100px;">
		<br>
		<h1>Laporan per Distributor</h1>
		<br>
		<h3>Distributor : Kalbe</h3>
		
<table class="table table-striped">
	<thead>
	<tr class="table-primary">
		<th>No</th>
		<th>Kota</th>
		<th>Apotik</th>
		<th>Tanggal</th>
		<th>Jenis</th>
		<th>Harga</th>
		<th>Satuan</th>
		<th>Tanggal Produksi</th>
		<th>Tanggal Expired</th>
		<th>Harga Jual</th>
		<th>Gol</th>
		<th>Order</th>
		<th>Distributor</th>
		<th>Nama Sales</th>
		<th>Warna Baju</th>
	</tr>
	</thead>
		
<!-- total jumlah -->
<div>
<?php		
include "koneksi.php";
 $sql = mysqli_query($koneksi,"SELECT * FROM penjualan where distributor = 'kalbe' ");
 $tot = 0;
 $tot2 = 0;
while($data = mysqli_fetch_array($sql)){
	$tot += $data['order'];
}
?>
	<h5>Total Order : <?php echo $tot; ?></h5>
</div>

<!-- total gol A -->
<div>
<?php		
include "koneksi.php";
 $sql = mysqli_query($koneksi,"SELECT * FROM penjualan where distributor = 'kalbe' && gol='A' ");
 $tot = 0;
 $tot2 = 0;
while($data = mysqli_fetch_array($sql)){
	$tot += $data['order'];
}
?>
	<h5>Total Order Gol A : <?php echo $tot; ?></h5>
</div>

<!-- total gol B -->
<div>
<?php		
include "koneksi.php";
 $sql = mysqli_query($koneksi,"SELECT * FROM penjualan where distributor = 'kalbe' && gol='B' ");
 $tot = 0;
 $tot2 = 0;
while($data = mysqli_fetch_array($sql)){
	$tot += $data['order'];
}
?>
	<h5>Total Order Gol B : <?php echo $tot; ?></h5>
</div>

<?php 
		
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from penjualan where distributor='kalbe' ");
		while($d = mysqli_fetch_array($data)){
			?>
			<tbody>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kota']; ?></td>
				<td><?php echo $d['apotik']; ?></td>
				<td><?php echo $d['tanggalpesan']; ?></td>
				<td><?php echo $d['jenis']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['satuan']; ?></td>
				<td><?php echo $d['tglproduksi']; ?></td>
				<td><?php echo $d['tglexpired']; ?></td>
				<td><?php echo $d['hargajual']; ?></td>
				<td><?php echo $d['gol']; ?></td>
				<td><?php echo $d['order']; ?></td>
				<td><?php echo $d['distributor']; ?></td>
				<td><?php echo $d['sales']; ?></td>
				<td><?php echo $d['warnabaju']; ?></td>
			</tr>
			</tbody>
			<?php 
		}
		?>

		
</table>
</div>
<br>


	<div style="width: 80%; margin-left: 100px;">

		<h3>Distributor : Indo Farma</h3>
		
<table class="table table-striped">
	<thead>
	<tr class="table-primary">
		<th>No</th>
		<th>Kota</th>
		<th>Apotik</th>
		<th>Tanggal</th>
		<th>Jenis</th>
		<th>Harga</th>
		<th>Satuan</th>
		<th>Tanggal Produksi</th>
		<th>Tanggal Expired</th>
		<th>Harga Jual</th>
		<th>Gol</th>
		<th>Order</th>
		<th>Distributor</th>
		<th>Nama Sales</th>
		<th>Warna Baju</th>
	</tr>
	</thead>

	<div>

<!-- total jumlah -->
<?php		
include "koneksi.php";
 $sql = mysqli_query($koneksi,"SELECT * FROM penjualan where distributor = 'Indo Farma' ");
 $tot = 0;
 $tot2 = 0;
while($data = mysqli_fetch_array($sql)){
	$tot += $data['order'];
}
?>
	<h5>Total Order : <?php echo $tot; ?></h5>
</div>

<!-- total gol A -->
<div>
<?php		
include "koneksi.php";
 $sql = mysqli_query($koneksi,"SELECT * FROM penjualan where distributor = 'Indo Farma' && gol='A' ");
 $tot = 0;
 $tot2 = 0;
while($data = mysqli_fetch_array($sql)){
	$tot += $data['order'];
}
?>
	<h5>Total Order Gol A : <?php echo $tot; ?></h5>
</div>

<!-- total gol B -->
<div>
<?php		
include "koneksi.php";
 $sql = mysqli_query($koneksi,"SELECT * FROM penjualan where distributor = 'Indo Farma' && gol='B' ");
 $tot = 0;
 $tot2 = 0;
while($data = mysqli_fetch_array($sql)){
	$tot += $data['order'];
}
?>
	<h5>Total Order Gol B : <?php echo $tot; ?></h5>
</div>



<?php 
		
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from penjualan where distributor='Indo Farma' ");

		while($d = mysqli_fetch_array($data)){
			?>
			<tbody>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kota']; ?></td>
				<td><?php echo $d['apotik']; ?></td>
				<td><?php echo $d['tanggalpesan']; ?></td>
				<td><?php echo $d['jenis']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['satuan']; ?></td>
				<td><?php echo $d['tglproduksi']; ?></td>
				<td><?php echo $d['tglexpired']; ?></td>
				<td><?php echo $d['hargajual']; ?></td>
				<td><?php echo $d['gol']; ?></td>
				<td><?php echo $d['order']; ?></td>
				<td><?php echo $d['distributor']; ?></td>
				<td><?php echo $d['sales']; ?></td>
				<td><?php echo $d['warnabaju']; ?></td>
			</tr>
			</tbody>
			<?php 
		}
		?>
</table>
</div>
<br>


<div style="width: 80%; margin-left: 100px;">

		<h3>Distributor : Sanbe</h3>
		
<table class="table table-striped">
	<thead>
	<tr class="table-primary">
		<th>No</th>
		<th>Kota</th>
		<th>Apotik</th>
		<th>Tanggal</th>
		<th>Jenis</th>
		<th>Harga</th>
		<th>Satuan</th>
		<th>Tanggal Produksi</th>
		<th>Tanggal Expired</th>
		<th>Harga Jual</th>
		<th>Gol</th>
		<th>Order</th>
		<th>Distributor</th>
		<th>Nama Sales</th>
		<th>Warna Baju</th>
	</tr>
	</thead>

	<div>

<!-- total jumlah -->
<?php		
include "koneksi.php";
 $sql = mysqli_query($koneksi,"SELECT * FROM penjualan where distributor = 'Sanbe' ");
 $tot = 0;
 $tot2 = 0;
while($data = mysqli_fetch_array($sql)){
	$tot += $data['order'];
}
?>
	<h5>Total Order : <?php echo $tot; ?></h5>
</div>
<!-- total gol A -->
<div>
<?php		
include "koneksi.php";
 $sql = mysqli_query($koneksi,"SELECT * FROM penjualan where distributor = 'Sanbe' && gol='A' ");
 $tot = 0;
 $tot2 = 0;
while($data = mysqli_fetch_array($sql)){
	$tot += $data['order'];
}
?>
	<h5>Total Order Gol A : <?php echo $tot; ?></h5>
</div>

<!-- total gol B -->
<div>
<?php		
include "koneksi.php";
 $sql = mysqli_query($koneksi,"SELECT * FROM penjualan where distributor = 'Sanbe' && gol='B' ");
 $tot = 0;
 $tot2 = 0;
while($data = mysqli_fetch_array($sql)){
	$tot += $data['order'];
}
?>
	<h5>Total Order Gol B : <?php echo $tot; ?></h5>
</div>



<?php

	$jumlah = mysqli_query($koneksi,"select count from penjualan where distributor='Sanbe' ");				
	include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from penjualan where distributor='Sanbe' ");
		while($d = mysqli_fetch_array($data)){
			?>
			<tbody>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kota']; ?></td>
				<td><?php echo $d['apotik']; ?></td>
				<td><?php echo $d['tanggalpesan']; ?></td>
				<td><?php echo $d['jenis']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['satuan']; ?></td>
				<td><?php echo $d['tglproduksi']; ?></td>
				<td><?php echo $d['tglexpired']; ?></td>
				<td><?php echo $d['hargajual']; ?></td>
				<td><?php echo $d['gol']; ?></td>
				<td><?php echo $d['order']; ?></td>
				<td><?php echo $d['distributor']; ?></td>
				<td><?php echo $d['sales']; ?></td>
				<td><?php echo $d['warnabaju']; ?></td>
			</tr>
			</tbody>
			<?php 
		}
		?>
</table>
</div>
<br>


<div style="width: 50%; margin-left: 550px;">
	<a href="index.php" class="btn btn-primary btn-lg">Kembali ke Form</a>
	<br>
	<br>
	<br>
</div>

?>

