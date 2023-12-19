<?php
include '../admin/cekAdmin.php'; // Pastikan file ini berisi kode untuk koneksi ke database

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kirim'])) {
    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];
    $pesan = $_POST['pesan'];

    // Masukkan data ke dalam tabel 'pengaduan'
    $query = $koneksi->prepare("INSERT INTO pengaduan (nama, email, nohp, alamat, pesan) VALUES (?, ?, ?, ?, ?)");
    $query->bind_param("sssss", $nama, $email, $nohp, $alamat, $pesan);

    if ($query->execute()) {
        $pesan_sukses = "Data pengaduan berhasil dikirim.";
        echo '<script>window.location.href="layananpengaduan.php";</script>';
    } else {
        $pesan_gagal = "Gagal mengirim pengaduan. Error: " . $query->error;
    }

    $query->close();
}
?>