<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbbarang_digitalent_proyek3";
    $port = 3306;

    // untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
    // membuat koneksi
    $mysqli = new mysqli($servername, $username, $password, $database) or die(mysqli_error($mysqli));
    // mengecek koneksi
    
?>