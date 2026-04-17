<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eksplorasi Kota di Indonesia</title>
    <!-- Mengambil font dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c3e50;
            --accent-color: #3498db;
            --bg-light: #f4f7f6;
            --text-dark: #333;
            --white: #ffffff;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-light);
            color: var(--text-dark);
            line-height: 1.6;
        }

        /* Header Modern */
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: var(--white);
            padding: 80px 20px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        header h1 {
            font-size: 2.5rem;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        /* Container Layout */
        .wrapper {
            max-width: 1100px;
            margin: -40px auto 40px; /* Menaikkan konten agar tumpang tindih dengan header */
            display: flex;
            gap: 20px;
            padding: 0 20px;
        }

        /* Sidebar / Navigasi */
        aside {
            flex: 1;
            background: var(--white);
            padding: 30px;
            border-radius: 12px;
            height: fit-content;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        aside h3 {
            margin-bottom: 20px;
            font-size: 1.2rem;
            border-bottom: 2px solid var(--accent-color);
            display: inline-block;
        }

        aside ul {
            list-style: none;
        }

        aside ul li {
            margin-bottom: 15px;
        }

        aside ul li a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 400;
            transition: all 0.3s ease;
            display: block;
            padding: 8px 12px;
            border-radius: 6px;
        }

        aside ul li a:hover {
            background-color: var(--accent-color);
            color: var(--white);
            padding-left: 20px;
        }

        /* Konten Utama */
        main {
            flex: 3;
            background: var(--white);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        main h2 {
            color: var(--accent-color);
            font-size: 2rem;
            margin-bottom: 20px;
        }

        main p {
            margin-bottom: 20px;
            font-size: 1.1rem;
            color: #555;
            text-align: justify;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 30px;
            background: var(--primary-color);
            color: var(--white);
            font-size: 0.9rem;
        }

        /* Responsif untuk HP */
        @media (max-width: 768px) {
            .wrapper {
                flex-direction: column;
                margin-top: 20px;
            }
            
            header {
                padding: 40px 20px;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Kota di Indonesia</h1>
    </header>

    <div class="wrapper">
        <aside>
            
        <main>
            <h2>Jakarta</h2>
            </p>
        </main>
        <h2>Jakarta</h2>
        <form method="post" action="">
            Nama: <input type="text" name="nama" ><br>
            Nomer Hp: <input type="number" name="no_hp" ><br>
            TTL: <input type="date" name="ttl" required><br>

            nilai tugas 1 : <input type="number" name="nilai_tugas1" required> <br>
            nilai tugas 2 : <input type="number" name="nilai_tugas2" required> <br>
           <input type="submit" name="kirim" value="kirim">
     </form>
     </main>
        <?php if (isset($_POST['kirim'])): ?>
            nama: <?php echo isset($_POST['nama']) ? $_POST['nama'] :''; ?><br>

            nomor hp: <?php echo isset($_POST['no_hp']) ? $_POST['no_hp'] :''; ?><br>

            TTL : <?php echo isset($_POST['ttl']) ? $_POST['ttl'] :''; ?><br>

            nilai tugas 1 : <?php echo isset($_POST['nilai_tugas1']) ? (float) $_POST['nilai_tugas1'] :0; ?><br>

            nilai tugas 2 : <?php echo isset($_POST['nilai_tugas2']) ? (float) $_POST['nilai_tugas2'] :0; ?><br>

            total nilai (tugas 1 + tugas 2): <?php echo
            (isset($_POST['nilai_tugas1']) ? (float) $_POST['nilai_tugas1'] : 0) +
            (isset($_POST['nilai_tugas2']) ? (float) $_POST['nilai_tugas2'] : 0); ?>

        <?php endif; ?>

    <footer>
        &copy; 2023 Informasi Kota Indonesia | Dibuat dengan &hearts;
    </footer>

</body>
</html>