<?php
session_start();
if(!isset($_SESSION["admin"])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tiket</title>
</head>
<body>
    <h1>Tambah Tiket</h1>
    <form action="prosesTambahTiket.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="nama">Nama Tiket:</label>
            <input type="text" name="nama" required>
        </p>
        <p>
            <label for="kategori">Kategori:</label>
            <input type="text" name="kategori" required>
        </p>
        <p>
            <label for="harga">Harga:</label>
            <input type="number" name="harga" required>
        </p>
        <p>
            <label for="bukti">Bukti Pembayaran:</label>
            <input type="file" name="bukti" accept=".jpg,.jpeg,.png" required>
        </p>
        <button type="submit">Tambah Tiket</button>
    </form>
</body>
</html>