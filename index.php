<?php
require 'functions.php';
$koleksi = query("SELECT * FROM data_koleksi");
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
            <?php foreach ($koleksi as $row) : ?>
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
            <?php endforeach; ?>
    </table>
</body>
</html>