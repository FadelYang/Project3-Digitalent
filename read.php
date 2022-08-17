<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
    <title>Document</title>
</head>
<body>
    <?php include 'koneksi.php' ?>
    <?php include 'edit.php' ?>
    <?php
        function pre_r( $array ) {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
        $result = $mysqli->query("SELECT * FROM tbbarang") or die($mysqli->error);
        // pre_r($result);
        // pre_r($result->fetch_assoc());
    ?>

    <div class="notification">
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-<?=$_SESSION["msg_type"]?>"></div>

            <?php  
                echo $_SESSION["message"];
                unset($_SESSION["message"]);
            ?>
        <?php endif ?>
    </div>

    <div class="container">
    <nav class="row align-items-center">
        <div class="col">
            <h1>Manajemen Barang</h1>
        </div>
        <div class="col-2 justify-content-end">
            <a href="./index.php"><h4>Tambah Barang</h4></a>
        </div>
        <!-- <div class="col-2 justify-content-end">
            <a href="./read.php"><h4>Daftar Barang</h4></a>
        </div> -->
    </nav>

    </div>
    <div class="container">
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <th>No</th>
                    <th>Nama Merk</th>
                    <th>Warna</th>
                    <th>Jumlah</th>
                    <th colspan="2">Action</th>
                </thead>
            <?php 
                while ($row = $result->fetch_assoc()): ?>

                <tr>
                    <td><?php echo $row['no'];  ?></td>
                    <td><?php echo $row['nama_merek'];  ?></td>
                    <td><?php echo $row['warna'];  ?></td>
                    <td><?php echo $row['jumlah'];  ?></td>
                    <td>
                        <a href="index.php?edit=<?php echo $row['no']; ?>"
                            class="btn btn-primary">Edit</a>
                        <a href="delete.php?delete=<?php echo $row['no'] ?>"
                            class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>


            </table>
        </div>
    </div>
</body>
</html>