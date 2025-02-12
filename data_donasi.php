<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Donasi Kita</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark sticky-top">
        <div class="container">
            <a href="index.php" class="navbar-brand text-white fw-bold">UMS Peduli</a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </nav>

    <div class="container">
    <center><h1>Data Donasi</h1></center>
    <a href="tambah_donasi.php" class="btn btn-primary">Tambah Donasi</a>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Nomer</th>
                <th>Nama Donatur</th>
                <th>Nominal</th>
                <th>Tanggal Diterima</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';

            session_start();
            if ($_SESSION['is_login' != true]){
                header("Location:login.php?pesan=Silahkan Login Terlebih dahulu");
            }

            $query = "SELECT * FROM donasi";
            $result = mysqli_query($conn, $query);

            $no = 0;
            
            while ($row = mysqli_fetch_array($result)) {
                $no++; ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $row['nama']?></td>
                <td>Rp. <?= $row['nominal']?>,-</td>
                <td><?= $row['tgl_diterima']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <script src="js/bootstrap.min.js"></script>
    </div>
</body>
</html>