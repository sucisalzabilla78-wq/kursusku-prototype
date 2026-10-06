<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Kursus - KursusKu</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            background: #ffffff;
            color: #222;
        }

        .container {
            width: 80%;
            max-width: 800px;
            margin: 30px auto;
        }

        .menu {
            margin-bottom: 20px;
        }

        .menu a {
            color: #0645ad;
            text-decoration: underline;
            margin-right: 5px;
        }

        .judul-kecil {
            color: #b05a70;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        h1 {
            font-size: 30px;
            margin: 0 0 12px 0;
        }

        .deskripsi {
            margin-bottom: 25px;
        }

        .form-box {
            border: 1px solid #d5d5d5;
            border-radius: 15px;
            padding: 25px;
        }

        .row {
            display: flex;
            gap: 15px;
            margin-bottom: 18px;
        }

        .form-group {
            flex: 1;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 7px;
        }

        input[type="text"],
        input[type="email"],
        select,
        textarea {
            width: 100%;
            padding: 11px 13px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-family: Georgia, "Times New Roman", serif;
            font-size: 14px;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #999;
        }

        .full-width {
            margin-bottom: 18px;
        }

        fieldset {
            border: 1px solid #ccc;
            margin: 0 0 18px 0;
            padding: 10px 15px 15px 15px;
        }

        legend {
            font-weight: bold;
            padding: 0 5px;
        }

        .radio-group,
        .checkbox-group {
            display: flex;
            gap: 25px;
        }

        .radio-group label,
        .checkbox-group label {
            font-weight: normal;
            display: inline;
            margin-left: 3px;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        .button {
            margin-top: 5px;
        }

        button {
            padding: 10px 25px;
            border: none;
            border-radius: 8px;
            background: #b05a70;
            color: white;
            font-family: Georgia, "Times New Roman", serif;
            cursor: pointer;
        }

        button:hover {
            background: #93485b;
        }

        @media (max-width: 600px) {
            .container {
                width: 92%;
            }

            .row {
                flex-direction: column;
                gap: 0;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <!-- Menu -->
    <div class="menu">
        <a href="index.php">KursusKu</a><br>
        <a href="index.php">Beranda</a>
        <a href="catalog.php">Katalog</a>
        <a href="registration.php">Daftar</a>
    </div>

    <!-- Judul -->
    <div class="judul-kecil">
        PENDAFTARAN KURSUS
    </div>

    <h1>Mulai belajar bersama KursusKu</h1>

    <p class="deskripsi">
        Gunakan data latihan. Field bertanda wajib harus diisi.
    </p>

    <!-- Form -->
    <form action="process-registration.php" method="POST">

        <div class="form-box">

            <!-- Nama & Email -->
            <div class="row">

                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        required
                    >
                </div>

            </div>

            <!-- Nomor HP & Program Studi -->
            <div class="row">

                <div class="form-group">
                    <label for="no_hp">Nomor HP</label>
                    <input
                        type="text"
                        id="no_hp"
                        name="no_hp"
                        placeholder="Contoh: 081234567890"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="prodi">Program Studi</label>
                    <input
                        type="text"
                        id="prodi"
                        name="prodi"
                        required
                    >
                </div>

            </div>

            <!-- Kursus -->
            <div class="full-width">

                <label for="kursus">Kursus yang Dipilih</label>

                <select id="kursus" name="kursus" required>

                    <option value="">
                        -- Pilih kursus --
                    </option>

                    <option value="UI/UX">
                        UI/UX
                    </option>

                    <option value="Database">
                        Database
                    </option>

                    <option value="Backend">
                        Backend
                    </option>

                </select>

            </div>

            <!-- Jenis Peserta -->
            <fieldset>

                <legend>Jenis Peserta</legend>

                <div class="radio-group">

                    <div>
                        <input
                            type="radio"
                            id="mahasiswa"
                            name="jenis_peserta"
                            value="Mahasiswa"
                            required
                        >
                        <label for="mahasiswa">Mahasiswa</label>
                    </div>

                    <div>
                        <input
                            type="radio"
                            id="umum"
                            name="jenis_peserta"
                            value="Umum"
                        >
                        <label for="umum">Umum</label>
                    </div>

                </div>

            </fieldset>

            <!-- Minat Tambahan -->
            <fieldset>

                <legend>Minat Tambahan</legend>

                <div class="checkbox-group">

                    <div>
                        <input
                            type="checkbox"
                            id="uiux"
                            name="minat[]"
                            value="UI/UX"
                        >
                        <label for="uiux">UI/UX</label>
                    </div>

                    <div>
                        <input
                            type="checkbox"
                            id="database"
                            name="minat[]"
                            value="Database"
                        >
                        <label for="database">Database</label>
                    </div>

                    <div>
                        <input
                            type="checkbox"
                            id="backend"
                            name="minat[]"
                            value="Backend"
                        >
                        <label for="backend">Backend</label>
                    </div>

                </div>

            </fieldset>

            <!-- Catatan -->
            <div class="full-width">

                <label for="catatan">Catatan</label>

                <textarea
                    id="catatan"
                    name="catatan"
                    placeholder="Tuliskan catatan jika ada..."
                ></textarea>

            </div>

            <!-- Tombol -->
            <div class="button">
                <button type="submit">
                    Daftar Kursus
                </button>
            </div>

        </div>

    </form>

</div>

</body>
</html>