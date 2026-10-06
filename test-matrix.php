<?php
$testMatrix = [
    [
        'no' => 1,
        'scenario' => 'Mahasiswa, Web Dasar, 1 paket',
        'actual' => 'Rp 240.000',
        'expected' => 'Rp 240.000',
        'status' => 'PASS'
    ],
    [
        'no' => 2,
        'scenario' => 'Guru, PHP Dasar, 1 paket',
        'actual' => 'Rp 280.000',
        'expected' => 'Rp 280.000',
        'status' => 'PASS'
    ],
    [
        'no' => 3,
        'scenario' => 'Umum, Laravel Dasar, 1 paket',
        'actual' => 'Rp 400.000',
        'expected' => 'Rp 400.000',
        'status' => 'PASS'
    ],
    [
        'no' => 4,
        'scenario' => 'Mahasiswa, Web Dasar, 2 paket',
        'actual' => 'Rp 480.000',
        'expected' => 'Rp 480.000',
        'status' => 'PASS'
    ],
    [
        'no' => 5,
        'scenario' => 'Nama kosong',
        'actual' => 'Nama wajib diisi.',
        'expected' => 'Nama wajib diisi.',
        'status' => 'PASS'
    ],
    [
        'no' => 6,
        'scenario' => 'Email tidak valid',
        'actual' => 'Email tidak valid.',
        'expected' => 'Email tidak valid.',
        'status' => 'PASS'
    ],
    [
        'no' => 7,
        'scenario' => 'Minat kosong',
        'actual' => 'Belum memilih minat.',
        'expected' => 'Belum memilih minat.',
        'status' => 'PASS'
    ],
    [
        'no' => 8,
        'scenario' => '3 minat',
        'actual' => 'Frontend, Backend, Database',
        'expected' => 'Frontend, Backend, Database',
        'status' => 'PASS'
    ],
    [
        'no' => 9,
        'scenario' => 'Metode offline',
        'actual' => 'Tatap Muka',
        'expected' => 'Tatap Muka',
        'status' => 'PASS'
    ],
    [
        'no' => 10,
        'scenario' => 'Metode hybrid',
        'actual' => 'Hybrid',
        'expected' => 'Hybrid',
        'status' => 'PASS'
    ],
    [
        'no' => 11,
        'scenario' => 'GET process.php',
        'actual' => 'Redirect ke register.php',
        'expected' => 'Redirect ke register.php',
        'status' => 'PASS'
    ],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Matrix Pertemuan 6</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 40px;
            font-family: Arial, sans-serif;
            background: #f5f7f6;
            color: #243044;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }

        .eyebrow {
            font-size: 13px;
            font-weight: bold;
            color: #438b82;
            letter-spacing: 1px;
            margin-bottom: 12px;
        }

        h1 {
            margin: 0 0 25px;
            font-size: 32px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        th {
            background: #e5f0eb;
            text-align: left;
            padding: 14px 12px;
            font-size: 13px;
            text-transform: uppercase;
        }

        td {
            padding: 14px 12px;
            border-bottom: 1px solid #e5e7eb;
            vertical-align: middle;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            background: #dff2df;
            color: #43834b;
            font-size: 12px;
            font-weight: bold;
        }

        .no {
            width: 55px;
        }

        .scenario {
            width: 30%;
        }

        .actual {
            width: 25%;
        }

        .expected {
            width: 25%;
        }

        .status-col {
            width: 90px;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="eyebrow">EVIDENCE WEEK 06</div>

    <h1>Test Matrix Pertemuan 6</h1>

    <div class="table-wrapper">
        <table>

            <thead>
                <tr>
                    <th class="no">No</th>
                    <th class="scenario">Scenario</th>
                    <th class="actual">Actual</th>
                    <th class="expected">Expected</th>
                    <th class="status-col">Status</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($testMatrix as $data): ?>

                    <tr>
                        <td>
                            <?= $data['no'] ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($data['scenario']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($data['actual']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($data['expected']) ?>
                        </td>

                        <td>
                            <span class="status">
                                <?= htmlspecialchars($data['status']) ?>
                            </span>
                        </td>
                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>
    </div>

</div>

</body>
</html>