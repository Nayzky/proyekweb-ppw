koneksi database ke php 
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];

    // Simpan data ke database atau lakukan operasi lainnya

    // Kirim respons ke JavaScript
    echo 'Data berhasil disimpan.';
}
?>
