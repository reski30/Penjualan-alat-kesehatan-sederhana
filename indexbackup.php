<!DOCTYPE html>
<html>
<head>
	<title>UJIKOM</title>
</head>
<body>


<form action="insert_database.php" method="post">

	<table>
		<tr>
		<label>Kota :</label>
		<select id="kota" name="kota">
		  	<option value="pekanbaru">Pekanbaru</option>
		  	<option value="semarang">Semarang</option>
		</select>
		<br>

		<label>Apotik : </label>
		<select id="apotik" name="apotik">
		    <option value="">Pilih ..</option>
		</select>

		<br>

		<label>Tanggal : </label>
		<input type="text" name="tanggalpesan" id="tanggalpesan" value=" <?php echo date('Y-d-m'); ?>">
		<br>

		<label>Jenis :</label>
		<select id="jenis" name="jenis">
		  	<option value="sarungtangan">Sarung Tangan</option>
		  	<option value="masker">Masker</option>
		  	<option value="handsanitizer">Hand Sanitizer</option>
		</select>
		<br>

		<label>Harga : </label>
		<input type="number" name="harga" id="harga">
		<br>

		<label>Satuan :</label>
		<select id="satuan" name="satuan">
		  	<option value="box">Box</option>
		  	<option value="100ml">100 ml</option>
		  	<option value="set">Set</option>
		</select>
		<br>

		<label>Tanggal Produksi : </label>
		<input type="date" name="tglproduksi" id="tglproduksi" value="">
		<br>

		<label>Gol : </label>
		<select id="gol" name="gol">
		  	<option value="A">A</option>
		  	<option value="B">B</option>
		</select>
		<br>

		<label>Order : </label>
		<input type="number" name="order" id="order" value="">
		<br>

		<label>Distributor : </label>
		<select id="distributor" name="distributor">
		  	<option value="Kalbe">Kalbe</option>
		  	<option value="Indo Farma">Indo Farma</option>
		  	<option value="Sanbe">Sanbe</option>
		</select>
		<br>

		<button type="submit">Simpan</button>
	
	</table>
</form>

<script
	src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous">
</script>

<script>
$(document).ready(function(){
    $('#kota').change(function() {
        let kota = $(this).val();

        $('#apotik').html('');

        if (kota == 'pekanbaru') {
            $('#apotik').append(`<option value="Asean">Asean</option>`);
            $('#apotik').append(`<option value="Kimia">Kimia</option>`);
           				
        } else if (kota == 'semarang') {
            $('#apotik').append(`<option value="keluarga">Keluarga</option>`);   
            $('#apotik').append(`<option value="revina">Revina</option>`);  
        }
    });
});

</script>
</body>
</html>


<table border="1">
	<tr>
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
<?php 
		
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from penjualan");
		while($d = mysqli_fetch_array($data)){
			?>
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
			<?php 
		}
		?>
</table>







