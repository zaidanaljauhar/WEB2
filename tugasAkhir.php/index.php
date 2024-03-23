<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "katalogpropertirumah");

// ambil data dari tabel 
$result = mysqli_query($koneksi, "SELECT * from properti");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>
<body>
  <h1>Daftar katalog Rumah</h1>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>id_propertirumah</th>
        <th>alamat</th>
        <th>tipe_rumah</th>
        <th>luas_tanah</th>
        <th>luas_bangunan</th>
        <th>harga</th>
        <th>jumlah_kamar</th>
      </tr>

      <?php $i=1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $row['id_PropertiRumah'] ?></td>
            <td><?= $row['alamat'] ?></td>
            <td><?= $row['tipe_rumah'] ?></td>
            <td><?= $row['luas_tanah'] ?></td>
			      <td><?= $row['luas_bangunan'] ?></td>
			      <td><?= $row['harga'] ?></td>
			      <td><?= $row['jumlah_kamar'] ?></td>
        </tr>
        <?php $i++ ?>
        <?php endwhile ?>      
    </table>
</body>
</html>
