<?php
    session_start();
    include 'db.php';
    if($_SESSION['status-login']!=true){
        echo '<script>window.location="login.php"</script>';
    }

    $kategori= mysqli_query($conn, "SELECT * FROM tb_category WHERE category_id = '".$_GET['id']."'");
    if(mysqli_num_rows($kategori)==0){
        echo '<script>window.location="data-kategori.php"</script>';
    }
    $k= mysqli_fetch_object($kategori);

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
            <h3>Edit Data Kategori</h3>
            <div class="box">
            <form action="" method="POST">
                <input type="text" name="nama" placeholder="Nama Kategori" class="input-control" value= "<?php echo $k-> category_name?>" require>
                <input type="submit" name="submit" value="Submit" class="btn">
            </form>
            <?php
                if(isset($_POST['nama'])){
                    $nama = ucwords($_POST['nama']);

                    $update= mysqli_query($conn, "UPDATE tb_category SET category_name = '".$nama."' WHERE category_id = '".$k->category_id."' ");
                        if($update){
                            echo '<script>alert("Edit data berhasil")</script>';
                            echo '<script>window.location="data-kategori.php"</script>';
                        }else{
                            echo 'gagal' .mysqli_error($conn);
                        }
                }
            ?>
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