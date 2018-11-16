<?php

    // PANGGIL KONEKSI KE DATABASE
    include('koneksi.php');

    // MENGAMBIL DATA YANG DI-INPUT
    $judul = $_POST["judul"];
    $artikel = $_POST["artikel"];

    // QUERY
    $sql = "INSERT INTO posts(title_post, article) VALUES('$judul', '$artikel')";
    $query = mysqli_query($connect, $sql);

    // REDIRECT KE HALAMAN BERANDA SETELAH INPUT DATA
    header("location:index.php");


?>