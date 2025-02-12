<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'mencoba_crud';

try {
    $conn = mysqli_connect($hostname, $username, $password, $database);
} catch (Exception $e) {
    echo "<B>koneksi Gagal : </B>". $e;
}