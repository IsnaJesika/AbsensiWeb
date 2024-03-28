<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presensi Mahasiswa - Success</title>
    <style>
        body {
            background-color: #47a447;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            color: #333;
            max-width: 400px;
            width: 90%;
            margin-top: 20px; /* Tambahkan margin-top agar tidak terlalu dekat dengan atas */
        }
        h2 {
            color: #47a447;
            margin-bottom: 20px;
        }
        p {
            margin-bottom: 8px;
        }
        .success-info {
            background-color: #dff0d8;
            padding: 10px;
            border-radius: 4px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Presensi Berhasil</h2>
        <?php
            if (isset($_POST['nim']) && isset($_POST['nama']) && isset($_POST['kode_dosen'])) {
                $nim = $_POST['nim'];
                $nama = $_POST['nama'];
                $kode_dosen = $_POST['kode_dosen'];
                echo "<p>NIM: $nim</p>";
                echo "<p>Nama: $nama</p>";
                echo "<p>Kode Unik Dosen: $kode_dosen</p>";
                echo '<div class="success-info"><p>Terima kasih, presensi Anda telah tercatat.</p></div>';
            } else {
                echo '<p>Terjadi kesalahan!</p>';
            }
        ?>
    </div>
</body>
</html>
