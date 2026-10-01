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

    <?php
    $namaKonser = "Dewa 19 - The Greatest Hits Tour";
    echo "Konser " . $namaKonser;
    ?>

    <?php
    $daftarKonser = [
        [
            "nama" => "Coldplay - Music of the Spheres Tour",
            "harga" => 1500000,
            "tanggal" => "2026-03-15",
            "kategori" => "Festival"
        ],
        [
            "nama" => "NCT Dream - The Dream Show",
            "harga" => 1000000,
            "tanggal" => "2026-04-20",
            "kategori" => "K-Pop"
        ],
        [
            "nama" => "Dewa 19 - The Greatest Hits Tour",
            "harga" => 2000000,
            "tanggal" => "2026-05-10",
            "kategori" => "Rock"
        ]
    ];
    ?>

    <p>Konser terdekat: <?php echo $daftarKonser[0]['nama']; ?></p>
    <p>Tanggal: <?php echo $daftarKonser[0]['tanggal']; ?></p>

</body>
</html>