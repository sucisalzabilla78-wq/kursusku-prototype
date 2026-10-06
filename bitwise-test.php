<?php

$READ = 1;
$WRITE = 2;
$DELETE = 4;

$permission = $READ | $WRITE;

$canRead = ($permission & $READ) === $READ;
$canWrite = ($permission & $WRITE) === $WRITE;
$canDelete = ($permission & $DELETE) === $DELETE;

?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Bitwise Test</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7f6;
            padding: 40px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
        }

        h1 {
            margin-top: 0;
        }

        .result {
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            background: #e8f5e9;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Bitwise Permission Test</h1>

    <p>Hasil pengecekan permission:</p>

    <div class="result">
        READ:
        <?= $canRead ? 'PASS' : 'FAIL' ?>
    </div>

    <div class="result">
        WRITE:
        <?= $canWrite ? 'PASS' : 'FAIL' ?>
    </div>

    <div class="result">
        DELETE:
        <?= $canDelete ? 'PASS' : 'FAIL' ?>
    </div>

</div>

</body>
</html>