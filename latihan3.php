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
            --bg: #ffe8f2;
            --panel: #fff3f8;
            --border: #ffbfdc;
            --primary: #ff92c2;
            --secondary: #ffd1e8;
            --text: #4f2a3a;
            --muted: #8a4b66;
            --shadow: rgba(255, 129, 179, 0.2);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: radial-gradient(circle at top, rgba(255,255,255,0.9), transparent 40%),
                        linear-gradient(180deg, #ffe8f2 0%, #ffdfee 100%);
            color: var(--text);
            min-height: 100vh;
            padding: 30px 20px 40px;
        }

        .page {
            max-width: 1000px;
            margin: 0 auto;
        }

        header {
            text-align: center;
            padding: 40px 20px;
            background: linear-gradient(135deg, #ffb7d6, #ffcce0);
            border: 2px solid var(--border);
            border-radius: 32px;
            box-shadow: 0 20px 40px var(--shadow);
            position: relative;
            overflow: hidden;
        }

        header::before,
        header::after {
            content: '💕';
            position: absolute;
            font-size: 3rem;
            opacity: 0.25;
        }

        header::before {
            left: 20px;
            top: 10px;
        }

        header::after {
            right: 20px;
            bottom: 10px;
        }

        header h1 {
            font-size: clamp(2rem, 3.5vw, 3.2rem);
            color: #7f2b52;
            letter-spacing: 0.15em;
            margin-bottom: 14px;
        }

        header p {
            color: #6b3a57;
            font-size: 1rem;
            max-width: 640px;
            margin: 0 auto;
        }

        .wrapper {
            display: grid;
            grid-template-columns: minmax(240px, 1fr) 2fr;
            gap: 24px;
            margin-top: 30px;
        }

        .card {
            background: var(--panel);
            padding: 28px;
            border-radius: 32px;
            border: 1px solid var(--border);
            box-shadow: 0 18px 40px var(--shadow);
        }

        .card h2 {
            margin-bottom: 18px;
            font-size: 1.7rem;
            color: #a22b63;
        }

        .card p {
            color: var(--muted);
            line-height: 1.75;
        }

        .menu-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 16px;
            padding: 14px 16px;
            background: rgba(255, 255, 255, 0.85);
            border-radius: 20px;
            border: 1px dashed rgba(255, 132, 177, 0.5);
        }

        .menu-item span {
            font-weight: 600;
            color: #8b3152;
        }

        .form-group {
            display: grid;
            gap: 16px;
            margin-top: 16px;
        }

        label {
            display: block;
            font-size: 0.95rem;
            margin-bottom: 6px;
            color: #733350;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 12px 14px;
            border-radius: 18px;
            border: 1px solid #f6b7d2;
            background: #fff;
            color: #5d3751;
            font-size: 1rem;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="date"]:focus {
            outline: none;
            border-color: #ff88b7;
            box-shadow: 0 0 0 4px rgba(255, 136, 183, 0.18);
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 12px;
            padding: 14px 20px;
            background: linear-gradient(135deg, #ff98c8, #ff6db4);
            color: #fff;
            border: none;
            border-radius: 999px;
            cursor: pointer;
            font-weight: 600;
            font-size: 1rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .button:hover {
            transform: translateY(-1px);
            box-shadow: 0 14px 28px rgba(255, 109, 180, 0.25);
        }

        .result-box {
            margin-top: 26px;
            padding: 22px;
            background: linear-gradient(180deg, #fff0f5, #ffe5ed);
            border: 1px dashed rgba(255, 111, 164, 0.4);
            border-radius: 22px;
            color: #5d2f4b;
        }

        .result-box strong {
            color: #8c2a60;
        }

        footer {
            margin-top: 32px;
            text-align: center;
            color: #7d3b60;
            font-size: 0.95rem;
        }

        @media (max-width: 860px) {
            .wrapper {
                grid-template-columns: 1fr;
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