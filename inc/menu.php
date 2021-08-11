<!DOCTYPE html>
<meta charset="utf-8">
<title>Menu</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">ITB-STIKOM AMBON</strong></a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Profil mahasiswa</a>
            </li>
            <li class="nav-item">
        <div class="navbar-nav">
         
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

                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="index.php?page=mahasiswa">Mahasiswa</a>
                <a class="nav-link" href="index.php?page=user">Pengguna</a>
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
            <a class="nav-link" href="#">Kontak</a>
            <a class="nav-link" href="logout.php">Logout</a>
            <?php } ?>
?>
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
            </li>
        </ul>
        <div class="d-flex">
            <a class="nav-link" href="logout.php">Logout</a>
            <?php  ?>
        </div>
      </div>
    </div>
</nav> 
</nav>


</body>
</html> 