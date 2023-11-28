<?php
include "logout.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Pengaduan Desa Paya</title>
    <link rel="icon" href="image/icon/icolamsel.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/style.css?v=<?php echo time(); ?>">
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
        <div class="maincenter">
            <div class="formlayananpengaduan">
                <h1>Layanan Pengaduan Warga</h1>
                <form action="#">
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="phone">No. HP:</label>
                    <input type="tel" id="phone" name="phone" required>

                    <label for="address">Alamat:</label>
                    <textarea id="address" name="address" required></textarea>

                    <label for="message">Isi Pesan:</label>
                    <textarea id="message" name="message" required></textarea>

                    <button type="submit">Kirim</button>
                </form>
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