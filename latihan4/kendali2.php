<?php 
// $mahasiswa = [
//  ["intan nur aisah", "3509054103050001", "ntannnn@gmail.com", "Rekayasa Perangkat Lunak"],
//  ["efianti laksono", "350905183060001", "efiantilaksono@gmail.com", "Rekayasa Perangkat Lunak"],
// ];

//Array associative
//key-nya adalah string yang kita buat sendiri
//definisinya sama seperti array numerik, kecuali

$mahasiswa = [
    [
    "nama" => "INTAN NUR AISAH",
    "nrp" => "3509054103050001",
    "email" => "ntannnn14@gmail.com",
    "jurusan" => "REKAYASA PERANGKAT LUNAK",
    "gambar" => "ft1.jpg"
    ];
    [
        "nama" => "EFIANTI LAKSONO",
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
   <h1>Data Mahasiswa</h1>

   <?php foreach($mahasiswa as $mhs ) : ?>
   
   <ul>
    <li>
        <img src="img/<?= $mhs["gambar"];?>" width="150px">
    </li>
    <li>Nama :<?= $mhs["nama"]; ?></li>
    <li>NRP :<?= $mhs["nrp"]; ?></li>
    <li>Email:<?= $mhs["email"]; ?></li>
    <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
   </ul>
   <?php endforeach; ?>

   
</body>
</html>