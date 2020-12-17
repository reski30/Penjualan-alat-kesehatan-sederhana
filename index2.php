<!DOCTYPE html>
<html>
<head>
 <!-- Load file CSS Bootstrap offline -->
<link rel="stylesheet" href="css/bootstrap.min.css">
  
</head>
<body>
<div class="container" style="margin-left: 400px">
<h1>Penjualan Alat kesehatan</h1>
<br>

<div style="width: 50%;">
<form action="insert_database.php" method="post">
     
 <div class="form-group">
    <select class="form-control" id="kota" name="kota">
      	<option>Pilih Kota ---</option>
		<option value="pekanbaru">Pekanbaru</option>
		<option value="semarang">Semarang</option>
    </select>
  </div>

 <div class="form-group">
    <select class="form-control" id="apotik" name="apotik">
      <option value="">Pilih Apotik ---</option>
    </select>
  </div>
   
 <div class="form-group">
 		<label>Tanggal Hari ini :</label>
       <input type="text" name="tanggalpesan" class="form-control" value=" <?php echo date('Y-d-m'); ?> ">
 </div>

<div class="form-group">
    <select class="form-control" id="jenis" name="kota">
      <option>Pilih Jenis Alat---</option>
		 <option value="sarungtangan">Sarung Tangan</option>
		 <option value="masker">Masker</option>
		 <option value="handsanitizer">Hand Sanitizer</option>
    </select>
  </div>

 <div class="form-group">
       <input type="number" name="harga" class="form-control" placeholder="Harga Alat">
 </div>

 <div class="form-group">
    <select class="form-control" id="satuan" name="satuan">
      <option>Pilih Satuan ---</option>
		  	<option value="box">Box</option>
		  	<option value="100ml">100 ml</option>
		  	<option value="set">Set</option>
    </select>
  </div>

   <div class="form-group">
   	<label>Pilih Tanggal Produksi : </label>
       <input type="date" name="tglproduksi" class="form-control" placeholder="Pilih Tanggal Produksi---" >
 </div>

 <div class="form-group">
    <select class="form-control" id="gol" name="gol">
      <option>Pilih Gol ---</option>
		  	<option value="A">A</option>
		  	<option value="B">B</option>
    </select>
  </div>

 <div class="form-group">
       <input type="number" name="order" class="form-control" placeholder="Jumlah Order---" >
 </div>

 <div class="form-group">
    <select class="form-control" id="distributor" name="distributor">
      <option>Pilih Distributor---</option>
		  	<option value="Kalbe">Kalbe</option>
		  	<option value="Indo Farma">Indo Farma</option>
		  	<option value="Sanbe">Sanbe</option>
    </select>
  </div>
 

<button type="submit" class="btn btn-primary">Simpan</button>

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

</div>

</div>
</body>
</html> 

<div style="width: 80%; margin-left: 100px;">
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

