<?php

include 'config.php';

$koneksi = new mysqli($server, $user, $pass, $database);

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}

$sql = "SELECT * FROM admin";

$temp = $koneksi->query($sql);

$cek = false;
while ($data = $temp->fetch_assoc()) {
    if ($data['status'] == 1) {
        $cek = true;
    }
}

if (!$cek) {
    header("location: login.php");
}

?>