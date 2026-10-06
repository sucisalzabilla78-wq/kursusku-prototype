<?php

$data_pendaftaran = [
    [
        'nama' => 'Suci',
        'kursus' => 'Web Dasar',
        'total' => 'Rp 240.000'
    ],
    [
        'nama' => 'Beni Guru',
        'kursus' => 'PHP Dasar',
        'total' => 'Rp 280.000'
    ],
    [
        'nama' => 'Citra',
        'kursus' => 'Laravel Dasar',
        'total' => 'Rp 400.000'
    ],
    [
        'nama' => 'Dani',
        'kursus' => 'Web Dasar',
        'total' => 'Rp 240.000'
    ]
];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>History Pendaftaran</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f7f6;
            color: #172033;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 50px auto;
            background: white;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .eyebrow {
            color: #168b7a;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        h1 {
            font-size: 40px;
            margin: 15px 0;
        }

        .description {
            color: #555;
            margin-bottom: 25px;
        }

        h2 {
            font-size: 25px;
            margin-bottom: 8px;
        }

        .sub-description {
            color: #666;
            margin-bottom: 20px;
        }

        /* TABEL */
        .data-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            overflow: hidden;
            border-radius: 12px;
            margin-top: 20px;
        }

        .data-table th {
            background: #e5f1e9;
            padding: 16px;
            text-align: left;
            font-size: 14px;
            font-weight: bold;
        }

        .data-table td {
            padding: 16px;
            border-top: 1px solid #eeeeee;
            background: white;
        }

        .data-table tr:hover td {
            background: #f8faf9;
        }

        .buttons {
            margin-top: 25px;
            display: flex;
            gap: 12px;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-primary {
            background: #168b7a;
            color: white;
        }

        .btn-secondary {
            border: 1px solid #168b7a;
            color: #168b7a;
            background: white;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="eyebrow">
        MILESTONE 6 · FOREACH
    </div>

    <h1>History Pendaftaran</h1>

    <p class="description">
        Data ini adalah latihan array + looping, bukan database dan bukan CRUD.
    </p>

    <h2>Data Pendaftaran</h2>

    <p class="sub-description">
        Riwayat peserta yang telah melakukan pendaftaran kursus.
    </p>

    <table class="data-table">

        <thead>
            <tr>
                <th>NO.</th>
                <th>NAMA</th>
                <th>KURSUS</th>
                <th>TOTAL</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($data_pendaftaran as $no => $data): ?>

                <tr>
                    <td>
                        <?= $no + 1 ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($data['nama']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($data['kursus']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($data['total']) ?>
                    </td>
                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

    <div class="buttons">
        <a href="registration.php" class="btn btn-primary">
            Daftar Kursus
        </a>

        <a href="index.php" class="btn btn-secondary">
            Beranda
        </a>
    </div>

</div>

</body>
</html>