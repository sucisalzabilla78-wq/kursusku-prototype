<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>KursusKu</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff;
            color: #333;
        }

        /* HEADER */
        .header {
            background: linear-gradient(135deg, #d41445, #e52d5b);
            color: white;
            text-align: center;
            padding: 25px 20px 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 30px;
        }

        .header p {
            margin: 6px 0 0;
            font-size: 14px;
        }

        /* NAVIGASI */
        .nav {
            background: #b91543;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            padding: 10px;
        }

        .nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
        }

        .nav a:hover {
            text-decoration: underline;
        }

        /* KONTEN */
        .container {
            width: 90%;
            max-width: 900px;
            margin: 30px auto;
        }

        .hero {
            text-align: center;
        }

        .hero h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .hero p {
            color: #666;
        }

        .hero img {
            width: 100%;
            max-width: 700px;
            height: auto;
            border-radius: 10px;
            margin-top: 20px;
        }

        /* RESPONSIVE */
        @media (max-width: 600px) {

            .header h1 {
                font-size: 26px;
            }

            .nav {
                gap: 15px;
            }

            .nav a {
                font-size: 13px;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <h1>KursusKu</h1>
        <p>Belajar Teknologi, Bangun Masa Depan</p>
    </header>

    <!-- NAVIGASI -->
    <nav class="nav">
        <a href="index.php">Beranda</a>
        <a href="catalog.php">Katalog</a>
        <a href="registration.php">Daftar Kursus</a>
    </nav>

    <!-- KONTEN -->
    <main class="container">

        <section class="hero">

            <h2>Selamat Datang di KursusKu</h2>

            <p>
                Temukan kursus teknologi yang sesuai dengan kebutuhan Anda.
            </p>

            <!-- Jika mempunyai gambar, ubah nama file di bawah -->
            <img src="assets/img/gambar mahasiswa belajar coding.png" alt="KursusKu">

        </section>

    </main>

</body>
</html>