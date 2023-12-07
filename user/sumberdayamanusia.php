<?php
include "../admin/logout.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDM Desa Paya</title>
    <link rel="icon" href="../image/icon/icolamsel.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="identitas">
                <div class="headerfoto">
                    <img src="../image/berandadesa/logo_kab_pesawaran.png" alt="Kabupaten Pesawaran">
                </div>
                <div class="title">
                    <h2>Desa Paya, Padang Cermin</h2>
                    <h4>Kabupaten Pesawaran</h4>
                </div>
            </div>
            <div class="navbar">
                <li><a href="../user/index.php"><b>Beranda</b></a></li>
                <li><a href="../user/strukturdesa.php">Struktur Desa</a></li>
                <li><a href="../user/profildesa.php">Profil Desa</a></li>
                <li><a href="../user/layananpengaduan.php">Layanan Pengaduan</a></li>
            </div>
        </div>
        <div class="lembaga">
            <div class="isilembaga">
                <div class="sectionlembaga">
                    <div class="sectiontitle">
                        <h1>Sumber Daya Manusia</h1>
                    </div>

                    <div class="content-img">
                        <img src="../image/sumberdayamanusia/jumlah_penduduk.png" alt="jumlah penduduk">
                        <img src="../image/sumberdayamanusia/pendidikan.png" alt="jumlah penduduk">
                        <img src="../image/sumberdayamanusia/mata_pencaharian_pokok.png" alt="mata pencaharian pokok">


                    </div>

                </div>
            </div>
            <div class="secnavlembaga">
                <div class="navlembaga">
                    <li><a href="../user/profildesa.php">Profil</a></li>
                    <li><a href="../user/sumberdayamanusia.php"><b>Sumber Daya Manusia</b></a></li>
                    <li><a href="../user/saranadanprasarana.php">Sarana dan Prasarana</a></li>
                    <li><a href="../user/galeri.php">Galeri</a></li>
                </div>
                <div class="secimage">
                    <img src="../image/lembagadesa/kwt2,1.png" alt="KWT" class="norm">
                    <img src="../image/lembagadesa/kwt2,2.png" alt="KWT" class="norm">
                </div>
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
                <li><a href="../user/index.php"><b>Beranda</b></a></li>
                <li><a href="../user/strukturdesa.php">Struktur Desa</a></li>
                <li><a href="../user/profildesa.php">Profil Desa</a></li>
                <li><a href="../user/layananpengaduan.php">Layanan Pengaduan Desa</a></li>
            </div>
            <div class="login">
                <a href="../admin/login.php">Your an Administrator?</a>
            </div>
            <div class="copyright">
                <p>© Copyright 2023 All Rights Reserve | Dibuat Oleh <a href="" target="_blank">kelompok KSI RC DoaIbu
                        Teknik Informatika ITERA</a></p>
            </div>
        </footer>
    </div>
    <script src="../JavaScript/script.js"></script>
</body>

</html>