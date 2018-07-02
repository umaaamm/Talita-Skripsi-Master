<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "rasio";

$koneksi=mysqli_connect($host,$user,$pass,$db);
if (mysqli_connect_errno()){
		echo "gagal koneksi".mysql_connect_errno();
		 }else{
	
}
session_start();
?>