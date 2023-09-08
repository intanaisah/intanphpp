<?php
// koneksi database
$conn = mysqli_connect("localhost","root","phpdasarr");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_queery($conn, "SELECT * FROM mahasiswa");

// Ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysql_fetch_assoc() // mengembalikan array assosiative
// mysql_fetch_array() // mengembalikan keduanya
// mysql_fetch_object()

// while( $mhs = mysqli_fetch_assoc($result) ) {
//      var_dump($mhs);
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>NO.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
      
      <tr>
          <td>1</td>
          <td>
              <a href="">ubah</a>
              <a href="">hapus></a>
          </td>
          <td><img src="img/ft1.jpg" width="50"></td>
          <td>3509054103050001</td>
          <td>Intan Nur Aisah</td>
          <td>ntannnn14@gmail.com</td>
          <td>Teknik Informatika</td>
      </tr>
      <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row ): ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
        </td>
        <td><img src="img/<?php echo $row["gambar"] ?>"width="50"></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></d>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

    </table>
</body>
</html>