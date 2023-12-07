<?php
include "../admin/cekAdmin.php";

if (!isset($_GET['edit'])) {
    header("location: ../admin/dashboard.php");
}

$sql = "SELECT * FROM artikel WHERE id = " . $_GET['edit'];

$data = ($koneksi->query($sql))->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                    <h2>Desa Campang Tiga</h2>
                    <h4>Kabupaten Lampung Selatan</h4>
                </div>
            </div>
            <div class="navbar">
                <li><a href="dashboard.php">Kembali</a></li>
            </div>
        </div>
        <div class="maincenter">
            <h2>Edit Artikel</h2>
            <fieldset class="createbox">
                <img src="<?= $data['gambar'] ?>" alt="">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="judul" class="label">Judul</label>
                    <input type="text" value="<?= $data['judul'] ?>" placeholder="Masukkan Judul Artikel" id="judul"
                        name="judul" class="inputtext" required>

                    <label for="gambar" class="label">Gambar</label>
                    <input type="file" accept="../image/*" id="gambar" name="gambar" class="inputgambar" required>

                    <label for="penulis" class="label">Penulis</label>
                    <input type="text" value="<?= $data['penulis'] ?>" placeholder="Masukkan Penulis Artikel"
                        id="penulis" name="penulis" class="inputtext" required>

                    <label for="isi" class="label">Isi Artikel</label>
                    <textarea placeholder="Masukkan Isi Artikel" name="isi" id="isi" class="inputtext"
                        required><?= $data['isi'] ?></textarea>

                    <input type="submit" name="login" value="Ubah" class="tombol">
                </form>
            </fieldset>
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
                <li><a href="../user/index.php">Beranda</a></li>
                <li><a href="../user/strukturdesa.php">Struktur Desa</a></li>
                <li><a href="../user/profildesa.php">Lembaga Desa</a></li>
                <li><a href="../user/layananpengaduan.php">Lainnya</a></li>
            </div>
            <div class="copyright">
                <p>© Copyright 2023 All Rights Reserve | Dibuat Oleh <a href="" target="_blank">kelompok KSI RC DoaIbu
                        Teknik Informatika ITERA</a></p>
            </div>
        </footer>
    </div>
</body>

</html>

<?php
error_reporting(0);

if (isset($_POST["login"])) {
    $imagedir = "../image/artikel/";
    if (!file_exists($imagedir)) {
        mkdir($imagedir, 0755);
    }

    unlink($data['gambar']);

    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $data['gambar'])) {
        $sql = "UPDATE artikel SET judul = '" . $_POST['judul'] . "', penulis = '" . $_POST['penulis'] . "', isi = '" . $_POST['isi'] . "' WHERE id = " . $_GET['edit'];
        $koneksi->query($sql);
        header("location: ../admin/dashboard.php");
    }
}
?>