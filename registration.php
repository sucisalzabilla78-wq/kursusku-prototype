<?php

declare(strict_types=1);
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Kursus - KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="utility-page">

<main class="utility-card form-card">

    <span class="eyebrow">MILESTONE 6 · FORM LANJUTAN</span>

    <h1>Daftar Kursus</h1>

    <p>
        Alur: landing page → form → proses PHP → ringkasan.
        Belum memakai database.
    </p>

    <form action="process-registration.php" method="POST" class="stack-form">

        <input type="hidden" name="source" value="week-06">

        <!-- Nama dan Email -->
        <div class="form-grid">

            <div class="field">
                <label for="name">Nama lengkap</label>

                <input
                    id="name"
                    name="name"
                    type="text"
                    minlength="3"
                    maxlength="100"
                    autocomplete="name"
                    required
                >
            </div>

            <div class="field">
                <label for="email">Email</label>

                <input
                    id="email"
                    name="email"
                    type="email"
                    maxlength="120"
                    autocomplete="email"
                    required
                >
            </div>

        </div>

        <!-- Pilih Kursus -->
        <div class="field">

            <label for="course">Pilih kursus</label>

            <select id="course" name="course" required>

                <option value="">-- Pilih kursus --</option>

                <option value="web-dasar">
                    Web Dasar
                </option>

                <option value="php-dasar">
                    PHP Dasar
                </option>

                <option value="laravel-fundamental">
                    Laravel Fundamental
                </option>

            </select>

        </div>

        <!-- Tipe Peserta -->
        <fieldset class="field">

            <legend>Tipe peserta</legend>

            <div class="choice-row">

                <label>
                    <input
                        type="radio"
                        name="participant_type"
                        value="mahasiswa"
                        required
                    >
                    Mahasiswa
                </label>

                <label>
                    <input
                        type="radio"
                        name="participant_type"
                        value="guru"
                    >
                    Guru
                </label>

                <label>
                    <input
                        type="radio"
                        name="participant_type"
                        value="umum"
                    >
                    Umum
                </label>

            </div>

        </fieldset>

        <!-- Minat Belajar -->
        <fieldset class="field">

            <legend>Minat belajar</legend>

            <div class="choice-row">

                <label>
                    <input
                        type="checkbox"
                        name="interests[]"
                        value="frontend"
                    >
                    Frontend
                </label>

                <label>
                    <input
                        type="checkbox"
                        name="interests[]"
                        value="backend"
                    >
                    Backend
                </label>

                <label>
                    <input
                        type="checkbox"
                        name="interests[]"
                        value="database"
                    >
                    Database
                </label>

                <label>
                    <input
                        type="checkbox"
                        name="interests[]"
                        value="ui-ux"
                    >
                    UI/UX
                </label>

            </div>

        </fieldset>

        <!-- Catatan -->
        <div class="field">

            <label for="note">Catatan</label>

            <textarea
                id="note"
                name="note"
                rows="5"
                maxlength="300"
                placeholder="Tuliskan kebutuhan belajar Anda (opsional)"
            ></textarea>

            <small class="table-note">
                Maksimal 300 karakter.
            </small>

        </div>

        <!-- Tombol -->
        <div class="button-row">

            <button
                class="button"
                type="submit"
            >
                Kirim Pendaftaran
            </button>

            <a
                class="button button-secondary"
                href="index.php"
            >
                Beranda
            </a>

        </div>

    </form>

</main>

</body>
</html>