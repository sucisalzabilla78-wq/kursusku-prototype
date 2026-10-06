<?php

declare(strict_types=1);

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$course = $_POST['course'] ?? '';
$participantType = $_POST['participant_type'] ?? '';
$interests = $_POST['interests'] ?? [];

$courseNames = [
    'web-dasar' => 'Web Dasar',
    'php-dasar' => 'PHP Dasar',
    'laravel-fundamental' => 'Laravel Fundamental'
];

$courseName = $courseNames[$course] ?? $course;

$interestNames = [];

foreach ($interests as $interest) {
    $interestNames[] = match ($interest) {
        'ui-ux' => 'UI/UX',
        'database' => 'Database',
        'backend' => 'Backend',
        default => $interest
    };
}

$price = match ($course) {
    'web-dasar' => 300000,
    'php-dasar' => 350000,
    'laravel-fundamental' => 500000,
    default => 0
};

$subtotal = $price;
$discount = $subtotal * 0.20;
$total = $subtotal - $discount;

function rupiah(float $number): string
{
    return 'Rp ' . number_format($number, 0, ',', '.');
}

?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pendaftaran Berhasil - KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="utility-page">

<main class="utility-card">

    <span class="eyebrow">
        MILESTONE 6 · RINGKASAN
    </span>

    <h1>
        Pendaftaran Berhasil Diproses
    </h1>

    <div class="summary-grid">

        <div class="summary-box">
            <strong>Nama:</strong>
            <span><?= htmlspecialchars($name) ?></span>
        </div>

        <div class="summary-box">
            <strong>Email:</strong>
            <span><?= htmlspecialchars($email) ?></span>
        </div>

        <div class="summary-box">
            <strong>Kursus:</strong>
            <span><?= htmlspecialchars($courseName) ?></span>
        </div>

        <div class="summary-box">
            <strong>Tipe peserta:</strong>
            <span><?= htmlspecialchars($participantType) ?></span>
        </div>

        <div class="summary-box">
            <strong>Metode:</strong>
            <span>Tatap Muka</span>
        </div>

        <div class="summary-box">
            <strong>Jumlah paket:</strong>
            <span>1</span>
        </div>

    </div>

    <h2>Rincian Biaya</h2>

    <div class="price-box">

        <div>
            <span>Biaya satuan</span>
            <strong><?= rupiah($price) ?></strong>
        </div>

        <div>
            <span>Subtotal</span>
            <strong><?= rupiah($subtotal) ?></strong>
        </div>

        <div>
            <span>Diskon 20%</span>
            <strong>-<?= rupiah($discount) ?></strong>
        </div>

        <div class="total">
            <span>TOTAL AKHIR</span>
            <strong><?= rupiah($total) ?></strong>
        </div>

    </div>

    <h2>Minat</h2>

    <div class="interest-box">
        <?php if (!empty($interestNames)): ?>

            <?php foreach ($interestNames as $interest): ?>
                <span><?= htmlspecialchars($interest) ?></span>
            <?php endforeach; ?>

        <?php else: ?>

            <span>Tidak ada minat tambahan</span>

        <?php endif; ?>
    </div>

    <div class="button-row">
        <a href="registration.php" class="button">
            Kembali ke Form
        </a>

        <a href="index.php" class="button button-secondary">
            Beranda
        </a>
    </div>

</main>

</body>
</html>