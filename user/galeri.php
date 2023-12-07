<?php
include "../admin/logout.php";
include "../admin/cekAdmin.php";

$sql = "SELECT * FROM galeri";
$result = $koneksi->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lembaga Desa Campang Tiga</title>
    <link rel="icon" href="../image/icon/icolamsel.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/style.css?v=<?php echo time(); ?>">
    <!-- library CSS fancybox -->
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css">
    <!-- library JS -->
    <script src="//code.jquery.com/jquery-3.2.0.min.js"></script>
    <!-- library JS fancybox -->
    <script src="fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript">
        $("[data-fancybox]").fancybox({});
    </script>
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
                        <h1>Galeri Desa Paya, Padang Cermin</h1>
                    </div>
                    <div class="galery">
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<div class='image-container'>";
                                echo "<img src='" . $row['file_path'] . "' alt='" . $row['nama_gambar'] . "' class='gallery-image' onclick='openOverlay(this)'>";
                                echo "<div class='overlay'>";
                                echo "<div class='overlay-text'>" . $row['deskripsi'] . "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                        } else {
                            echo "Galeri kosong.";
                        }
                        ?>
                    </div>

                    <div id="imageOverlay" class="overlay-container" onclick="closeOverlay()">
                        <span class="close-button" onclick="closeOverlay()">&times;</span>
                        <img id="overlayImage" class="overlay-image">
                        <div id="overlayText" class="overlay-text"></div>
                    </div>
                </div>
            </div>
            <div class="secnavlembaga">
                <div class="navlembaga">
                    <div class="navlembaga">
                        <li><a href="profildesa.php"><b>Profil</b></a></li>
                        <li><a href="sumberdayamanusia.php">Sumber Daya Manusia</a></li>
                        <li><a href="saranadanprasarana.php">Sarana dan Prasarana</a></li>
                        <li><a href="galeri.php">Galeri</a></li>
                    </div>
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