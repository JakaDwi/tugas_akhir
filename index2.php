<?php
//koneksi ke Database
$koneksi = mysqli_connect("localhost", "root", "", "koleksi");

//ambil data dari tabel data_koleksi/ query data_koleksi
$result = mysqli_query($koneksi, "SELECT * FROM data_koleksi");

//ambil data (fetch) dari object result
//mysqli_fetch_row(); //mengembalikan array numerik
//mysqli_fetch_assoc(); //mengambalikan array assosiatif
//mysqli_fetch_array(); //mengembalikan array assosdiaatif dan numerik
//mysqli_fetch_object(); //mengambalikan sebuah objek

/*while ( $klk = mysqli_fetch_assoc($result) ){
    var_dump($klk);
}
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Koleksi Hewan Pribadi</h1>
    
    <table border="1" cellpadding="10" collspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Asal</th>
            <th>Jenis</th>
        </tr>
            <?php $i = 1; ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>

        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">edit</a> |
                <a href="">delete</a>
            </td>
            <td>
                <img src="img/<?= $row['gambar'] ?>" width="50">
            </td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['asal'] ?></td>
            <td><?= $row['jenis'] ?></td>
        </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
    </table>
</body>
</html>