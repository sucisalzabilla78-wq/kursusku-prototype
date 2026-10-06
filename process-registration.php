
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran - KursusKu</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            background: #fff;
            color: #222;
        }

        .container {
            width: 80%;
            max-width: 800px;
            margin: 40px auto;
        }

        .hasil-header {
            background: #f8e5ef;
            border-left: 5px solid #d14b8f;
            padding: 25px;
            margin-bottom: 20px;
        }

        .hasil-header h1 {
            margin: 0 0 10px;
            font-size: 30px;
        }

        .hasil-header p {
            margin: 0;
        }

        .hasil-box {
            border: 1px solid #ddd;
            border-radius: 12px;
            padding: 30px;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table td {
            padding: 5px 0;
            vertical-align: top;
        }

        .data-table td:first-child {
            width: 150px;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 18px;
            background: #d14b8f;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .btn:hover {
            background: #b83d78;
        }

        @media (max-width: 600px) {
            .container {
                width: 92%;
            }

            .hasil-header h1 {
                font-size: 25px;
            }

            .hasil-box {
                padding: 20px;
            }

            .data-table td:first-child {
                width: 120px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="hasil-header">
        <h1>Pendaftaran Diterima untuk Diproses</h1>
        <p>Periksa kembali data latihan berikut.</p>
    </div>

    <div class="hasil-box">

        <table class="data-table">

            <tr>
                <td>Nama</td>
                <td><?= htmlspecialchars($_POST['nama'] ?? '') ?></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><?= htmlspecialchars($_POST['email'] ?? '') ?></td>
            </tr>

            <tr>
                <td>Nomor HP</td>
                <td><?= htmlspecialchars($_POST['no_hp'] ?? '') ?></td>
            </tr>

            <tr>
                <td>Program Studi</td>
                <td><?= htmlspecialchars($_POST['prodi'] ?? '') ?></td>
            </tr>

            <tr>
                <td>Kursus</td>
                <td><?= htmlspecialchars($_POST['kursus'] ?? '') ?></td>
            </tr>

            <tr>
                <td>Jenis Peserta</td>
                <td><?= htmlspecialchars($_POST['jenis_peserta'] ?? '') ?></td>
            </tr>

            <tr>
                <td>Minat</td>
                <td>
                    <?= isset($_POST['minat'])
                        ? htmlspecialchars(implode(', ', $_POST['minat']))
                        : ''
                    ?>
                </td>
            </tr>

            <tr>
                <td>Catatan</td>
                <td><?= htmlspecialchars($_POST['catatan'] ?? '') ?></td>
            </tr>

        </table>

        <a href="registration.php" class="btn">
            Kembali ke Form
        </a>

    </div>

</div>

</body>
</html>