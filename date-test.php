<?php

$start = new DateTimeImmutable('2026-09-15');

$now = new DateTimeImmutable(
    'now',
    new DateTimeZone('Asia/Jakarta')
);
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Date/Time Test</title>
</head>

<body>

<h1>Date/Time Test</h1>

<p>
    Tanggal mulai:
    <?= $start->format('d-m-Y') ?>
</p>

<p>
    Waktu sekarang:
    <?= $now->format('d-m-Y H:i:s') ?>
</p>

</body>
</html>