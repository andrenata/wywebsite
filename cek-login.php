<?php
// Mengaktifkan Session PHP
session_start();

// Menambahkan koneksi ke database
include('koneksi.php');

// Mengambil data dari Form Login.php
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($connect, "SELECT * FROM admin 
        WHERE username='$username' AND password='$password'");

// Cek apakah ada data pada variable query
$cek = mysqli_num_rows($query);

if($cek){
    echo "OK";
}else{
    echo "gagal";
}






