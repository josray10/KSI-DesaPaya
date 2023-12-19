<?php
include('../admin/cekAdmin.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_gambar = $_POST['nama_gambar'];
    $deskripsi = $_POST['deskripsi'];

    $target_dir = "../image/uploads/";
    $target_file = $target_dir . basename($_FILES['file']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES['file']['tmp_name']);
    if ($check !== false) {
        move_uploaded_file($_FILES['file']['tmp_name'], $target_file);

        $sql = "INSERT INTO galeri (nama_gambar, deskripsi, file_path) VALUES ('$nama_gambar', '$deskripsi', '$target_file')";
        if ($koneksi->query($sql) === TRUE) {
            echo "Gambar berhasil ditambahkan.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "File bukan gambar.";
    }
}
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
                    <h2>Desa Paya</h2>
                    <h4>Kabupaten Pesawaran</h4>
                </div>
            </div>
            <div class="navbar">
                <li><a href="../admin/dashboard.php">Kembali</a></li>
                <li><a href="../admin/create.php">Buat Artikel</a></li>
                <li><a href="../admin/cekpengaduan.php">Layanan Pengaduan</a></li>
                <li><a href="../admin/index.php">Keluar</a></li>
                <li>
            </div>
        </div>
        <div class="form-tambah-galeri">
            <h2>Tambah Gambar</h2>
            <form action="" method="post" enctype="multipart/form-data">
                Nama Gambar: <input type="text" name="nama_gambar" required><br>
                Deskripsi: <textarea name="deskripsi" required></textarea><br>
                Pilih Gambar: <input type="file" name="file" required><br>
                <input type="submit" value="Tambah">
            </form>
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