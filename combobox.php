<label>Kota</label>

<select> 

    <!-- ambil data dari database ke combobox -->

    <?php
        include "koneksi.php";
        // query untuk menampilkan semua mata pelajaran dari tabel 
        $query = mysqli_query($koneksi,"select * from kota");
        while ($data = mysqli_fetch_array($query))
        {
            echo "<option value='".$data['id']."'>".$data['namakota']."</option>";
        }
    ?>

</select> 