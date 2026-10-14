
<?php
date_default_timezone_set('Asia/Jakarta');
require_once __DIR__ . '/data.php';

function e($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

// Jika dibuka langsung tanpa mengirim formulir
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $directAccess = true;
} else {
    $directAccess = false;

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $courseName = trim($_POST['course'] ?? '');

    $selectedCourse = null;

    foreach ($courses as $item) {
        if ($item['name'] === $courseName || $item['code'] === $courseName) {
            $selectedCourse = $item;
            break;
        }
    }

  if (
    $name === '' ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    $selectedCourse === null
) {
    http_response_code(422);
    $error = 'Data tidak valid. Silakan kembali dan isi formulir dengan benar.';
} else {
    $price = $selectedCourse['price'];
}
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Process Pendaftaran - KursusKu</title>

<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: #eaf7ee;
    color: #1b4332;
    padding: 30px 15px;
    margin: 0;
    min-height: 100vh;
}

.container {
    max-width: 650px;
    margin: 40px auto;
    padding: 30px;
    background: #ffffff;
    border: 1px solid #b7e4c7;
    border-radius: 16px;
    box-shadow: 0 8px 25px rgba(45, 106, 79, 0.12);
}

h1 {
    color: #2d6a4f;
    margin-top: 0;
}

.result {
    background: #eaf7ee;
    border-left: 4px solid #2d6a4f;
    padding: 15px;
    margin: 20px 0;
    border-radius: 6px;
    overflow-wrap: anywhere;
    line-height: 1.6;
}

.result p {
    margin: 10px 0;
}

a {
    display: inline-block;
    margin: 8px 5px 0 0;
    padding: 12px 18px;
    background: #2d6a4f;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    transition: background 0.2s;
}

a:hover {
    background: #1b4332;
}

.secondary {
    background: white;
    color: #2d6a4f;
    border: 1px solid #2d6a4f;
}

.secondary:hover {
    background: #d8f3dc;
    color: #1b4332;
}

@media (max-width: 600px) {
    .container {
        padding: 22px;
        margin: 20px auto;
    }

    h1 {
        font-size: 25px;
    }
}
</style>
</head>

<body>
<div class="container">
<h1>Hasil Proses Pendaftaran</h1>

<?php if ($directAccess): ?>

    <div class="result">
        Halaman process.php berhasil dibuka.
        Untuk memproses pendaftaran, silakan isi formulir terlebih dahulu.
    </div>
    <a href="register.php">Buka Form Pendaftaran</a>

<?php elseif (isset($error)): ?>

    <div class="result"><?= e($error) ?></div>
    <a href="register.php">Kembali ke Form</a>

<?php else: ?>

    <p>Data pendaftaran berhasil diproses.</p>

    <div class="result">
        <p><strong>Nama:</strong> <?= e($name) ?></p>
        <p><strong>Email:</strong> <?= e($email) ?></p>
        <p><strong>Kursus:</strong> <?= e($selectedCourse['name']) ?></p>
        <p><strong>Harga:</strong> Rp<?= number_format($price, 0, ',', '.') ?></p>
        <p><strong>Waktu server:</strong> <?= date('Y-m-d H:i:s') ?> WIB</p>
    </div>

    <a href="register.php">Daftar Lagi</a>
    <a class="secondary" href="index.php">Beranda</a>

<?php endif; ?>
</div>
</body>
</html>
