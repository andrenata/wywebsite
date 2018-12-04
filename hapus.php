<?php

// KONEKSI KE DATABASE
include('koneksi.php');

// AMBIL ID
$id = $_GET['id'];

// TEST MENAMPILKAN ID
// echo $id;

// QUERY KE TABLE dengan DELETE SQL
$query = mysqli_query($connect, "DELETE from posts WHERE id_post=$id");

// CEK DENGAN IF APAKAH QUERY BERHASIL
if($query) {
    // JIKA BERHASIL REDIRECT KE BERANDA
    header("location:index.php");
}else{
    // JIKA GAGAL MAKA MUNCUL ERROR
    echo"<center>Proses Hapus Gagal, Coba Lagi!</center>";
}



