<?php
include "../admin/cekAdmin.php";

// Ambil ID pengaduan dari parameter URL
$id_pengaduan = $_GET['id'];

// Ambil data pengaduan dari database berdasarkan ID
$query_detail = "SELECT * FROM pengaduan WHERE id = $id_pengaduan";
$result_detail = $koneksi->query($query_detail);

if ($result_detail->num_rows > 0) {
    $data_detail = $result_detail->fetch_assoc();
} else {
    // Tampilkan pesan jika data tidak ditemukan
    echo "Data pengaduan tidak ditemukan.";
    exit();
}
?>

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
        <div class="detail-pengaduan">
            <h1>Detail Pengaduan</h1>
            <div class="isi-detail-pengaduan">
                <dl>
                    <dt>Nama:</dt>
                    <dd>
                        <?= $data_detail['nama']; ?>
                    </dd>

                    <dt>Email:</dt>
                    <dd>
                        <?= $data_detail['email']; ?>
                    </dd>

                    <dt>No. HP:</dt>
                    <dd>
                        <?= $data_detail['nohp']; ?>
                    </dd>

                    <dt>Alamat:</dt>
                    <dd>
                        <?= $data_detail['alamat']; ?>
                    </dd>

                    <dt>Pesan:</dt>
                    <dd>
                        <?= $data_detail['pesan']; ?>
                    </dd>

                    <dt>Tanggal:</dt>
                    <!-- Periksa apakah kunci 'tanggal' ada sebelum mengaksesnya -->
                    <dd>
                        <?= isset($data_detail['waktu_pengaduan']) ? $data_detail['waktu_pengaduan'] : 'Tanggal Tidak Tersedia'; ?>
                    </dd>
                </dl>


                <!-- <table border="1">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. HP</th>
                        <th>Alamat</th>
                        <th>Pesan</th>
                        <th>Tanggal</th>
                    </tr>

                    <tr>
                        <td>
                            <?= $data_detail['nama']; ?>
                        </td>
                        <td>
                            <?= $data_detail['email']; ?>
                        </td>
                        <td>
                            <?= $data_detail['nohp']; ?>
                        </td>
                        <td>
                            <?= $data_detail['alamat']; ?>
                        </td>
                        <td>
                            <?= $data_detail['pesan']; ?>
                        </td>
                        <td>
                            <?= $data_detail['waktu_pengaduan']; ?>
                        </td>
                    </tr>
                </table> -->


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