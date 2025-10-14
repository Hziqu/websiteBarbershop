<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "BarberShop";
$db_name;

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    // echo "koneksi berhasil";
}
?>