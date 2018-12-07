<?php

// PANGGIL KONEKSI KE DATABASE
include "koneksi.php";

// ambil data dari form input edit.php
$id = $_POST['id'];
$judul = $_POST['judul'];
$artikel = $_POST['artikel'];

// JALANKAN QUERY EDIT SQL
$query = mysqli_query($connect, "UPDATE posts SET 
                    title_post='$judul', article='$artikel'
                    WHERE id_post='$id'");

// CEK APAKAH BERHASIL
if($query){
    // REDIRECT KE HALAMAN BERANDA SETELAH INPUT DATA: TRUE
    header("location:index.php");
}else{
    // JIKA GAGAL: FALSE
    echo "<center>SIMPAN DATA GAGAL, COBA ULANGI LAGI</center>";
}





