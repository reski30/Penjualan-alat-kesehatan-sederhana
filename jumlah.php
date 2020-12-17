 
<?php

include "koneksi.php";

 $sql = mysqli_query($koneksi,"SELECT * FROM penjualan");
 $tot = 0;
 $tot2 = 0;

while($data = mysqli_fetch_array($sql)){
	$tot += $data['order'];

}
?>

<?php echo $tot; ?>

 
