<?php
$host = "localhost"; 
$user = "root";
$password = "";
$database = "proyek"; 
$conn = mysqli_connect("10.33.35.96", "user_naiya", "password_naiya", "phpcrud");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
    // echo "Berhasil"
?>
