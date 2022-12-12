<?php
$host = "sql305.byethost24.com"; // Nama hostnya
$username = "b24_32977667"; // Username
$password = "000webhostampas"; // Password (Isi jika menggunakan password)
$database = "b24_32977667_upload_photo"; // Nama databasenya

$connect = mysqli_connect($host, $username, $password, $database); // Koneksi ke MySQL

if( !$connect ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>
