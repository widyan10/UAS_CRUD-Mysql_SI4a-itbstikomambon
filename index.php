<?php
session_start();

if (!isset($_SESSION["login"])){
	header("Location: login.php");
}
require 'functions.php';

//penghalamanan
//konfigurasi
$jumlahDataPerHalaman = 5;
$jumlahData =count(query("SELECT * FROM mahaiswa"));
$jumlahHalaman =ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"]))? $_GET["halaman"] :1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
//


$mahasiswa =query ("SELECT * FROM mahaiswa LIMIT $awalData, $jumlahDataPerHalaman");

//tombol cari di tekan
if (isset($_POST["cari"])){
	$mahasiswa = cari($_POST["keyword"]);
}



//ambil data dari mahasiswa/ atau query
//$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil  data (fatch) mahasiswa dari objec result
//mysqli_fetch_row() 	// mengembalikan array numerik
//mysqli_fetch_assoc() 	// mengembalikna array assosiatif
//mysqli_fetch_array() 	// mengembalikan keduanya
//mysqli_fetch_object()

//while($mhs = mysqli_fetch_assoc($result)){
//	var_dump(!$mhs);
//}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PROFIL MAHASISWA</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    
    <div class="container">
<h1 class="text-center card-header bg-info text-white">PROFIL MAHASISWA</h1>
    <form action="" method="post">
    <input type="text" name="keyword" autofocus placeholder="Masukan Kata Kunci" id="keyword">
        <button type="submit" name="cari" id="tombol-cari" class="btn btn-info glyphicon glyphicon-search"></button>
        <a href="tambah.php" class="btn btn-info glyphicon glyphicon-plus"></a>
        <a href="logout.php" class="btn btn-info glyphicon glyphicon-log-out"></a>
	</form>
    <br>
    <br>
    <table class="table table-striped">

            <tr  class="info">
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
<?php $i =1; ?>
<?php foreach ( $mahasiswa as $row) : ?>           
            <tr>
                <td><?= $i ?></td>
                <td>
                	<a href="ubah.php?id=<?= $row ["id"]; ?>" class="glyphicon glyphicon-pencil"></a>
					<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin');" class="glyphicon glyphicon-trash"></a>
                </td>
                <td><img src="<?= $row ["gambar"]; ?>" width="50"></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>

            </tr>
<?php $i++; ?>
<?php endforeach; ?>

        </table>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html> 