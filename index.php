<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
    <title>Document</title>
</head>
<body class="container">
        <?php include 'edit.php' ?>
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-<?=$_SESSION["msg_type"]?>">

                <?php  
                    echo $_SESSION["message"];
                    unset($_SESSION["message"]);
                ?>

            </div>
        <?php endif ?>

    <nav class="row align-items-center">
        <div class="col">
            <h1>Manajemen Barang</h1>
        </div>
        <!-- <div class="col-1 justify-content-end">
            <h4>Home</h4>
        </div> -->
        <div class="col-2 justify-content-end">
            <a href="./read.php"><h4>Daftar Barang</h4></a>
        </div>
    </nav>

    <main>
            <h3>Tambahkan Data Barang</h3>

            <form action="create.php" method="POST">
                <div class="mb-3">
                    <label for="no" class="form-label">No</label>
                    <input type="number" value="<?php echo $no ?>" name="no" id="no" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">Nama Merek</label>
                    <input type="text" name="name" id="for" value="<?php echo $name ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <div class="form-label" for="warna">Warna</div>
                    <input type="text" name="warna" id="warna" class="form-control" value="<?php echo $warna ?>" required>
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input class="form-control" name="jumlah" id="jumlah" type="number"value="<?php echo $jumlah ?>" required>
                </div>
                <?php if ($update == true): ?>
                    <button type="submit" name="perbarui" class="btn btn-info">update</button>

                <?php else: ?>
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                <?php endif ?>
            </form>
    </main>

    <?php
        require_once 'koneksi.php';
    ?>
</body>
</html>