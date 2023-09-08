<?php
// SUPERGLOBALS
// variabel global milik php
// merupakan array associative

// $_GET
$mahasiswa = [
    [
    "nama" => "INTANS TAN NUR AISAHHHHHHHH",
    "nrp" => "3509054103050001",
    "email" => "ntannnn14@gmail.com",
    "jurusan" => "REKAYASA PERANGKAT LUNAKSSS WAK",
    "gambar" => "ft1.jpg"
    ],
    [
        "nama" => "EFISSSANTISSS LAKSONOSSSS",
        "nrp" => "350905183060001",
        "email" => "efiantilaksono@gmail.com",
        "jurusan" => "REKAYASA  PERANGKAT LUNAK",
        "gambar" => "ft2.jpg"
        ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs ) : ?>
        <li>
        <a href="kendali2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>

</body>
</html>