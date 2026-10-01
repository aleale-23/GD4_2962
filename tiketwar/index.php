<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tiket War</title>
</head>
<body>
    <?php
    echo "Selamat Datang di Tiket War!";
    ?>

    <?php
    echo "Tiket akan segera dibuka!";
    ?>

    <?php
    $namaKonser = "Coldplay - Music of the Spheres Tour";
    $hargaTiket = 1500000; 
    $sisaTiker = 25;
    $sudahSoldOut = false;
    $kategoriTiket = "Festival";
    ?>

    <p>Konser: <?php echo $namaKonser; ?></p>
    <p>Harga Tiket: Rp <?php echo $hargaTiket; ?></p>
    <p>Sisa Tiket: <?php echo $sisaTiker; ?></p>
    <p>Kategori Tiket: <?php echo $kategoriTiket; ?></p>

    <?php
    $namaArtis = "NCT Dream";
    echo "KOnser " . $namaArtis;
    ?>
</body>
</html>