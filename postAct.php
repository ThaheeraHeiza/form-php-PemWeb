<?php
$nama = $_POST['nama'];
$email = $_POST['email'];

// Redirect ke halaman error jika nama atau email kosong
if (empty($nama) || empty($email)) {
    header("Location: error.php");
    exit();
}

// Ambil tanggal dan waktu
date_default_timezone_set("Asia/Jakarta");
$jam = date("H:i:s");
$hari = date("l"); // Contoh: Monday
$tanggal = date("d-m-Y");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Data Login</h2>
        <div class="alert alert-success">
            <p><strong>Nama:</strong> <?php echo $nama; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Jam Login:</strong> <?php echo $jam; ?></p>
            <p><strong>Hari Ini:</strong> <?php echo $hari; ?></p>
            <p><strong>Tanggal:</strong> <?php echo $tanggal; ?></p>
        </div>
    </div>
</body>
</html>
