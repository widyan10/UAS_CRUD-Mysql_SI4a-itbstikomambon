<?php
session_start();

if (!isset($_SESSION["login"])){
	header("Location: login.php");
}

require 'functions.php';
//koneksi Ke DBMS
						//alamat	user   password		nama database
$conn = mysqli_connect("localhost", "root","","profilmhs");

//apakah tombol submit sudah di tekan
if( isset($_POST["submit"])){	
	////apakah data berhasil ditambahakan	
	if(ubah($_POST) > 0){
		echo "
			<script>
				alert('data berhasil di ubah');
				document.location.href = 'index.php';
			</script>
			";
	}else{
		echo "<script>
				alert('data gagal di ubah');
				document.location.href = 'index.php';
			</script>
			";
	}
//	//var_dump(mysqli_affected_rows($conn));
//	if(mysqli_affected_rows($conn)> 0){
//		echo "berhasil";
//		
//	}else{
//		echo "gagal";
//		echo "<br>";
//		echo mysqli_error($conn);
//	}

}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>UBAH DATA MAHASISWA</title>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
	
	<div class="card mt-3">
        <div class="card-header bg-white">
            <div class="card-body">
            	<h1 class="text-center card-header bg-info text-white">FORM TAMBAH DATA MAHASISWA</h1>
        <form action="" method="POST" enctype="multipart/form-data">
                    	<div class="form-group">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan Nim" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="emai" placeholder="Masukan Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukan Jurusan" required>
                    </div>
                    <div class="form-group">
                    <input type="file" class="btn btn-info" name="gambar" id="gambar"  placeholder="Masukan Gambar" required>
                   </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-info" name="submit">Submit</button>
                    </div>
        </form>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html> 