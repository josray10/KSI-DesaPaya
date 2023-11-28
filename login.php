<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dashboard</title>
    <link rel="icon" href="image/icon/icolamsel.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/style.css">
    <?php
    include "logout.php";
    ?>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="identitas">
                <div class="headerfoto">
                    <img src="image/berandadesa/logo_kab_pesawaran.png" alt="Kabupaten Lampung Selatan">
                </div>
                <div class="title">
                    <h2>Desa Paya</h2>
                    <h4>Kabupaten Pesawaran</h4>
                </div>
            </div>
            <div class="navbar">
                <li><a href="index.php">Kembali</a></li>
            </div>
        </div>
        <div class="maincenter">
            <h2>Selamat Datang di Dashboard</h2>
            <fieldset class="formlogin">
                <form action="login.php" method="POST">
                    <label for="username" class="label">Username</label>
                    <input type="text" placeholder="Masukkan Username" id="username" name="username" class="inputtext"
                        required>
                    <label for="pass" class="label">Password</label>
                    <input type="password" placeholder="Masukkan Password" id="pass" name="pass" class="inputtext"
                        required>
                    <button type="submit" class="tombol">Masuk</button>
                </form>
                <?php
                $sql = 'SELECT * FROM admin';
                $temp = $koneksi->query($sql);
                while ($data = $temp->fetch_assoc()) {
                    if (!empty($_POST)) {
                        if ($_POST['username'] === $data['username'] && $_POST['pass'] === $data['password']) {
                            $sql = $koneksi->prepare("UPDATE admin SET status = ? WHERE username = ?");
                            $sql->bind_param("is", $status, $username);
                            $status = 1;
                            $username = $_POST['username'];
                            $sql->execute();
                            echo "<script>window.location.href='dashboard.php'</script>";
                        }
                    }
                }
                ?>
            </fieldset>
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
                <p>© Copyright 2022 All Rights Reserve | Dibuat Oleh <a
                        href="https://instagram.com/kkncampangtiga119?igshid=Yzg5MTU1MDY=" target="_blank">KKN ITERA
                        119</a></p>
            </div>
        </footer>
    </div>
</body>

</html>