<?php
$mahasiswa =[ 
    ["intan nur aisah ", "3509054103050001", "Rekayasa Perangkat Lunak", "ntannnn14@gmail.com"],
    ["efianti laksono", "350905183060001", "Rekayasa Perangkat Lunak", "efiantilaksono@gmail.com"],
    ["fajar setiawan", "3509110611920003", "Rekayasa Perangkat Lunak", "fajaraja@gmail.com"],


];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
<ul>
    <li>Nama :<?= $mhs[0]; ?></li>
    <li>NRP :<?= $mhs[1]; ?></li>
    <li>Jurusan :<?= $mhs[2]; ?></li>
    <li>Email :<?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

    </body>
    </html>