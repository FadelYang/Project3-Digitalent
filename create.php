<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Data Barangs</title>
</head>
<body>
<?php
include 'koneksi.php';
if(isset($_POST['tambah'])) {

    $no = $_POST['no'];
    $name = $_POST['name'];
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];        // $mysqli_query("INSERT INTO tbbarang  VALUES ('$no', '$name', '$warna', '$jumlah')");

    if ($no != null) {
        $mysqli->query("INSERT INTO tbbarang  VALUES ($no, '$name', '$warna', $jumlah)") or 
            die($mysqli->error);    
    } else {
        $mysqli->query(("INSERT INTO tbbarang (nama_merek, warna, jumlah) VALUES ('$name', '$warna', $jumlah)")) or
            die($mysqli->error);
    }
}
?>

<?php
include 'read.php';
?>
</body>
</html>