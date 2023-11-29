<?php
include "logout.php";
include "cekAdmin.php";

$sql = "SELECT * FROM artikel";

// $data = $koneksi -> query ($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Paya</title>
    <link rel="icon" href="image/icon/icolamsel.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
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
        <div class="homepage">
            <img src="image/berandadesa/Hero_image_desa_paya.png" alt="Homepage">
        </div>
        <div class="main">
            <div class="mainfoto">
                <img src="image/berandadesa/home1.png" alt="Tentang Desa">
            </div>
            <div class="maintext">
                <h2>Tentang Desa</h2>
                <p>Desa Paya Kecamatan Padang Cermin, Kabupaten Pesawaran Lampung memiliki mayoritas masyarakat asli
                    Lampung dengan bahasa sehari-hari bahasa Lampung. Pada kemasyarakatan terdapat beberapa Lembaga
                    kemasyarakatan seperti Lembaga adat, karang taruna, badan usaha milik desa dan kelompok gotong
                    royong.
                    Sementara mayoritas mata pencarian masyarakat desa Paya induk adalah buruh. Sebagian lagi ada yang
                    berkebun karena desa Paya memiliki perhutanan yang luas. Beberapa hasil perkebunan yang dimiliki
                    oleh Desa Paya diantaranya perkebunan sayur-sayuran, palawija, cokelat, kopi dan padi.</p>
            </div>
        </div>
        <fieldset class="boxartikel">
            <legend class="title">
                <h2>Artikel Desa</h2>
            </legend>
            <?php
            if ($data->num_rows > 0) {
                while ($artikel = $data->fetch_assoc()) {
                    ?>
                    <a href="lihatartikel.php?artikel=<?= $artikel['id'] ?>">
                        <div class="artikel">
                            <img src="<?= $artikel['gambar'] ?>">
                            <div class="isi">
                                <h4>
                                    <?= $artikel['judul'] ?>
                                </h4>
                                <p>
                                    <?= strlen($artikel['isi']) > 250 ? substr($artikel['isi'], 0, 250) . "..." : $artikel['isi'] ?>
                                </p>
                            </div>
                        </div>
                    </a>
                    <hr>
                    <?php
                }
            } else {
                echo "<h2>Tidak Ada Artikel</h2>";
            }
            ?>
        </fieldset>
        <div class="sectionsejarah">
            <h2>Wilayah Administrasi Desa</h2>
            <div class="sectionsejarahimg">
                <center>
                    <img src="image/berandadesa/maps1.png" alt="Sejarah Desa">
                </center>
            </div>
        </div>
        <div class="mapping">
            <h2>Wilayah Desa</h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12036.967231625287!2d105.11391378213551!3d-5.608559489297915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e412bf491eaa0d9%3A0xce95ce2cd73375d3!2sKantor%20Desa%20paya!5e0!3m2!1sid!2sid!4v1700398964798!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="picfigure">
            <h2>Nama - Nama Dusun yang Ada</h2>
            <div class="fig">
                <figure class="pic1">
                    <img src="image/dusun/house(3).gif" alt="Dusun 1">
                    <figcaption>Dusun 1</figcaption>
                </figure>
                <figure class="pic2">
                    <img src="image/dusun/house(1).gif" alt="Dusun 2">
                    <figcaption>Dusun 2</figcaption>
                </figure>
                <figure class="pic3">
                    <img src="image/dusun/home.gif" alt="Dusun Damarejo">
                    <figcaption>Dusun Damarejo</figcaption>
                </figure>
                <figure class="pic3">
                    <img src="image/dusun/house.gif" alt="Dusun Sinar Jaya">
                    <figcaption>Dusun Sinar Jaya</figcaption>
                </figure>
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
                <p>© Copyright 2023 All Rights Reserve | Dibuat Oleh <a href="" target="_blank">kelompok KSI RC DoaIbu
                        Teknik Informatika ITERA</a></p>
            </div>
        </footer>
    </div>
</body>

</html>