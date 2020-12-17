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
		<h1>Laporan</h1>
		<br>
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
	</tr>
	</thead>

<?php 
		
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from penjualan");
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
			</tr>
			</tbody>
			<?php 
		}
		?>
</table>
</div>
<br>
<br>

