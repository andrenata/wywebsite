<?php 


// KONEKSI KE DATABASE
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'mywebsite';

$connect = new mysqli($dbhost, $dbuser, 
	$dbpassword, $dbname);

if($connect->connect_error){
	die('Maaf koneksi gagal :'.$connect->connect_error);
}













