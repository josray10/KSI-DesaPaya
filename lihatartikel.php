<?php
include "logout.php";

$sql = "SELECT dilihat FROM artikel WHERE id = " . $_GET['artikel'];
$data = (($koneksi -> query ($sql)) -> fetch_assoc ())['dilihat'];
$data++;

$sql = "UPDATE artikel SET dilihat = '".$data."' WHERE id = " . $_GET['artikel'];
$koneksi -> query ($sql);

$sql = "SELECT * FROM artikel WHERE id = " . $_GET['artikel'];
$data = ($koneksi -> query ($sql)) -> fetch_assoc ();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['judul']?></title>
    <link rel="icon" href="image/icon/icolamsel.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="identitas">
                <div class="headerfoto">
                    <img src="image/berandadesa/logo_kab_pesawaran.png" alt="Kabupaten Pesawaran">
                </div>
                <div class="title">
                    <h2>Desa Paya, Padang Cermin</h2>
                    <h4>Kabupaten Pesawaran</h4>
                </div>
            </div>
            <div class="navbar">
                <li><a href="index.php"><b>Beranda</b></a></li>
                <li><a href="strukturdesa.php">Struktur Desa</a></li>
                <li><a href="profildesa.php">Profil Desa</a></li>
                <li><a href="layananpengaduan.php">Layanan Pengaduan</a></li>
            </div>
        </div>
        <div class="show">
            <h2><?=$data['judul']?></h2>
            <div class="image">
                <img src="<?=$data['gambar']?>" alt="<?=$data['judul']?>">
            </div>
            <div class="detail">
                <p>Penulis : <b><?=$data['penulis']?></b></p>
                <p><?=$data['waktu']?></p>
                <img src="image/icon/icons8-seen-100.png" alt="Seen">
                <p><?=$data['dilihat']?> kali dilihat</p>
            </div>
            <div class="content">
                <p>
                    <?php
                    $isi = str_split($data['isi']);
                    foreach ($isi as $value) {
                        if ($value == "\n") {
                            echo "<br>";
                        } else {
                            echo $value;
                        }
                    }
                    ?>
                </p>
            </div>
        </div>
        <footer class="footer">
            <hr>
            <div class="title-footer">
                <div class="titledesa">
                    <p>Desa Paya, Padang Cermin</p>
                </div>
                <p>Kabupaten Pesawaran</p>
            </div>
            <div class="navbar-footer">
                <li><a href="index.php"><b>Beranda</b></a></li>
                <li><a href="strukturdesa.php">Struktur Desa</a></li>
                <li><a href="profildesa.php">Profil Desa</a></li>
                <li><a href="layananpengaduan.php">Layanan Pengaduan Desa</a></li>
            </div>
            <div class="login">
                <a href="login.php">Your an Administrator?</a>
            </div>
            <div class="copyright">
                <p>© Copyright 2023 All Rights Reserve | Dibuat Oleh <a
                        href="" target="_blank">kelompok KSI RC DoaIbu
                        Teknik Informatika ITERA</a></p>
            </div>
        </footer>
    </div>
</body>
</html>