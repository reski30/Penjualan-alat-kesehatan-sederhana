
<input type="date" name="tanggal">


<?php
$tgl1 = "2013-01-23";// pendefinisian tanggal awal
$tgl2 = date('d-m-Y', strtotime('+5 years', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
echo $tgl2; //print tanggal
?>

<body>
<form id="form1" name="form1" method="post" action="">
  <label>
  <input type="text" name="tes" />
  </label>
  <label>
  <input type="submit" name="Submit" value="Submit" />
  </label>
</form>

<?
$input=$_POST[tes];
echo"Inputan yang didapat : $input";
?>
</body>

<html>
<head>
<title>Penjualan</title>
    <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('#diskon').keyup(function(){
            <!-- Ambil nilai bayar dan diskon !-->
            var bayar=parseInt($('#bayar').val());
            var diskon=parseInt($('#diskon').val());
 
            <!-- Perhitungan bayar-(diskon/100 x bayar) !-->
            var total_bayar=bayar-(diskon/100)*bayar;
            $('#Tbayar').val(total_bayar);
            });
        });
        </script>
</head>
    <body>
        <table border="0" cellpadding="5" align="center">
            <form action="" method="post">
            <tr>
                <td>Total Bayar</td> <td> : </td> <td><input type="text" name="bayar" id="bayar" /> (dalam Rp)</td>
            </tr>
            <tr>
                <td>Diskon</td> <td> : </td> <td><input type="text" name="diskon" id="diskon" /> % </td>
            </tr>
            <tr>
                <td>Total Bayar (sesudah diskon)</td> <td> : </td>
                <td><input type="text" name="Tbayar" id="Tbayar"  readonly="readonly" /> (dalam Rp)</td>
            </tr>
            </tr>
            </form>
        </table>
    </body>
</html>