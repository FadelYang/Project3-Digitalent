<?php include 'koneksi.php' ?>
<?php include 'read.php' ?>

<?php
    session_start();

    if (isset($_GET['delete'])) {
        $no = $_GET['delete'];
        $mysqli->query("DELETE FROM tbbarang WHERE no=$no") or die($mysqli->error);

        $_SESSION['message'] = "Data berhasil dihapus";
        $_SESSION['msg_type'] = "danger";

        header("location: read.php");

    }
?>