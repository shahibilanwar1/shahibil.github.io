<?php
    session_start();
    if($_SESSION['status-login']!=true){
        echo '<script>window.location="login.php"</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bukawarung</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Shizuru&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
        <h1><a href="dashboard.php">Bukawarung</a></h1>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="data-kategori.php">Data Kategori</a></li>
            <li><a href="product.php">Data Product</a></li>
            <li><a href="keluar.php">Keluar</a></li>
        </ul>
        </div>
    </header>

    <!-- contentfff -->
    <div class="section">
        <div class="container">
            <h3>Dasboard</h3>
            <div class="box">
                <h4>Selamat Datang <?php
                echo $_SESSION ['a_global']->admin_user ?> Di toko online</h4>
            </div>
        </div>
    </div>

    <!-- footerf -->
    <footer>
        <div class="container">
            <small>Copyright &copy; bukawarung 2022</small>
        </div>
    </footer>
</body>
</html>