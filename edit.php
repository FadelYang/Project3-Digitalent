

<?php
    include 'koneksi.php';

    $no = '';
    $name = '';
    $warna = '';
    $jumlah = '';
    $update = false;

    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM tbbarang WHERE no=$id") or die($mysqli->error);
        if (($result)==true) {
            $row = $result->fetch_array();
            $no = $row['no'];
            $name = $row['nama_merek'];
            $warna = $row['warna'];
            $jumlah = $row['jumlah'];
        }
    }

    if (isset($_POST['perbarui'])) {
        $id =  $_POST['no'];
        $name = $_POST['name'];
        $warna = $_POST['warna'];
        $jumlah = $_POST['jumlah'];

        $mysqli->query("UPDATE tbbarang SET nama_merek='$name', warna='$warna', jumlah=$jumlah WHERE no=$id") or die($mysqli->error);
    }

?>