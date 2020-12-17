
<?php
$mulai = date('2017-04-20'); // waktu mulai
$exp = date('2017-04-26'); // batas waktu
if (!(strtotime($mulai) <= time() AND time() >= strtotime($exp))) {
echo "<b>Batas waktu sudah berakhir</b>";
} else {
echo "<b>Masih dalam jangka waktu</b>";
}
?>