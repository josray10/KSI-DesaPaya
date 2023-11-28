<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="image/icon/icolamsel.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/style.css">
<?php
include "cekAdmin.php";
?>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="identitas">
                <div class="headerfoto">
                    <img src="image/Lambang_Kabupaten_Lampung_Selatan.png" alt="Kabupaten Lampung Selatan">
                </div>
                <div class="title">
                    <h2>Desa Paya</h2>
                    <h4>Kabupaten Pesawaran</h4>
                </div>
            </div>
            <div class="navbar">
                <li><a href="create.php">Buat Artikel</a></li>
                <li><a href="index.php">Keluar</a></li>
            </div>
        </div>
        <div class="daftarArtikel">
            <h2>Artikel Desa</h2>
            <?php
            $sql = "SELECT * FROM artikel";
                
            $data = $koneksi -> query ($sql);
            if ($data -> num_rows > 0) {
            ?>
        <center>
            <table class="tabelartikel">
                <tr>
                    <th>Judul Artikel</th>
                    <th>Isi Artikel</th>
                    <th>Aksi</th>
                </tr>
                <?php
                    while ($temp = $data -> fetch_assoc ()) {
                ?>
                <tr>
                    <td><?=$temp['judul']?></td>
                    <td><?=strlen($temp['isi']) > 50 ? substr($temp['isi'], 0, 50) . "..." : $temp['isi']?></td>
                    <td>
                        <a href="edit.php?edit=<?=$temp['id']?>">Edit</a>
                        <a href="dashboard.php?hapus=<?=$temp['id']?>">Hapus</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
                <?php
                } else {
                    echo "<h3>Tidak Ada Artikel</h3>";
                }
                ?>
        </center>
        </div>
        <footer class="footer">
            <hr>
            <div class="title-footer">
                <div class="titledesa">
                    <p>Desa Campang Tiga</p>
                </div>
                <p>Kabupaten Lampung Selatan</p>
            </div>
            <div class="copyright">
                <p>© Copyright 2022 All Rights Reserve | Dibuat Oleh <a href="https://instagram.com/kkncampangtiga119?igshid=Yzg5MTU1MDY=" target="_blank">KKN ITERA 119</a></p>
            </div>
        </footer>
    </div>
</body>
</html>
<?php
if (isset($_GET['hapus'])) {
    $sql = "SELECT gambar FROM artikel WHERE id = " . $_GET['hapus'];
    $data = ($koneksi -> query ($sql)) -> fetch_assoc ();
    unlink($data['gambar']);

    $sql = "DELETE FROM artikel WHERE id = " . $_GET['hapus'];
    $koneksi -> query ($sql);
    header("location: dashboard.php");
}
?>