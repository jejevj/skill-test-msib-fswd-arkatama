<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'arkatama');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// echo "berhasil";
if($link === false){
    die("ERROR: Koneksi Gagal. " . mysqli_connect_error());
}
?>