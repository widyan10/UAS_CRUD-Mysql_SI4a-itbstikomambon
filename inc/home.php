<?php
    session_start();
    require 'functions.php';
    if (!isset($_SESSION['username'])) {
        echo "<script>
                alert('Anda Belum Login');
                window.location.href='login.php';
                </script";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PROFIL MAHASISWA</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="index.php?page=mahasiswa">Mahasiswa</a>
                <a class="nav-link" href="#">Kontak</a>
                <a class="nav-link" href="logout.php">Logout</a>

<nav>
    <?php
     if ($_SESSION['level'] == "admin")
     {
    ?>
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
                <a class="nav-link" href="index.php?page=user">Pengguna</a>
                <a class="nav-link" href="#">Kontak</a>
                <a class="nav-link" href="logout.php">Logout</a>
    <?php  
              }
              else
              {
            ?>
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="index.php?page=mahasiswa">Mahasiswa</a>
            <a class="nav-link" href="logout.php">Logout</a>
            <?php } ?>
</nav>
<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html> 