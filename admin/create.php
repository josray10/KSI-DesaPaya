<?php
include "../admin/cekAdmin.php";
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
                    <h2>Desa Paya, Padang Cermin</h2>
                    <h4>Kabupaten Pesawaran</h4>
                </div>
            </div>
            <div class="navbar">
                <li><a href="../admin/dashboard.php">Kembali</a></li>
            </div>
        </div>
        <div class="maincenter">
            <h2>Tambah Artikel</h2>
            <fieldset class="createbox">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="judul" class="label">Judul</label>
                    <input type="text" placeholder="Masukkan Judul Artikel" id="judul" name="judul" class="inputtext"
                        required>

                    <label for="gambar" class="label">Gambar</label>
                    <input type="file" accept="../image/*" id="gambar" name="gambar" class="inputgambar" required>

                    <label for="penulis" class="label">Penulis</label>
                    <input type="text" placeholder="Masukkan Penulis Artikel" id="penulis" name="penulis"
                        class="inputtext" required>

                    <label for="isi" class="label">Isi Artikel</label>
                    <textarea placeholder="Masukkan Isi Artikel" name="isi" id="isi" class="inputtext"
                        required></textarea>

                    <input type="submit" name="login" value="Tambah" class="tombol">
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

    $sql = "SELECT id FROM artikel";
    $data = ($koneksi->query($sql))->num_rows + 1;
    $ext = end(explode(".", $_FILES['gambar']['name']));
    $filePath = $imagedir . basename("Gambar" . $data . "." . $ext);

    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $filePath)) {
        $date = date("Y-m-d");
        $viewers = 0;
        $sql = "INSERT INTO artikel (id, judul, gambar, penulis, waktu, dilihat, isi) VALUES ('" . $data . "', '" . $_POST['judul'] . "', '" . $filePath . "', '" . $_POST['penulis'] . "', '" . $date . "', '" . $viewers . "', '" . $_POST['isi'] . "')";
        $koneksi->query($sql);
        header("location: ../admin/dashboard.php");
    }
}
?>