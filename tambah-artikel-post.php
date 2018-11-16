<?php

    include('koneksi.php');

    $judul = $_POST["judul"];
    $artikel = $_POST["artikel"];

    // QUERY
    $sql = "INSERT INTO posts(title_post, article) VALUES('$judul', '$artikel')";
    $query = mysqli_query($connect, $sql);

    header("location:index.php");


?>