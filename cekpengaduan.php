<?php
include("cekAdmin.php");

$query_pengaduan = "SELECT * FROM pengaduan";
$result_pengaduan = $koneksi->query($query_pengaduan);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="image/icon/icolamsel.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/style.css?v=<?php echo time(); ?>">
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
                <li><a href="cekpengaduan.php">Layanan Pengaduan</a></li>
                <li><a href="index.php">Keluar</a></li>
                <li>
            </div>
        </div>
        <div class="data-pengaduan">
            <h1>Data Pengaduan</h1>
            <div class="isi-data-pengaduan">
                <!-- Tampilkan data pengaduan dalam tabel -->
                <table border=" 1">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal Pengaduan</th>
                        <th>Detail</th>
                    </tr>

                    <?php
                    if ($result_pengaduan->num_rows > 0) {
                        $no = 1;
                        while ($row = $result_pengaduan->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $no . "</td>";
                            echo "<td>" . $row['nama'] . "</td>";
                            echo "<td>" . $row['waktu_pengaduan'] . "</td>";

                            echo "<td><a href='detailpengaduan.php?id=" . $row['id'] . "' class='detail-link' >Detail<a></td>";
                            echo "</tr>";
                            $no++;
                        }
                    } else {
                        echo "<tr><td colspan='6'>Tidak ada data pengaduan</td></tr>";
                    }
                    ?>
                </table>

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
            <div class="copyright">
                <p>© Copyright 2023 All Rights Reserve | Dibuat Oleh <a href="" target="_blank">kelompok KSI RC DoaIbu
                        Teknik Informatika ITERA</a></p>
            </div>
        </footer>
    </div>
</body>

</html>
<?php
if (isset($_GET['hapus'])) {
    $sql = "SELECT gambar FROM artikel WHERE id = " . $_GET['hapus'];
    $data = ($koneksi->query($sql))->fetch_assoc();
    unlink($data['gambar']);

    $sql = "DELETE FROM artikel WHERE id = " . $_GET['hapus'];
    $koneksi->query($sql);
    header("location: dashboard.php");
}
?>