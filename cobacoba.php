<?php
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eksplorasi Kota di Indonesia</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS for soft pink pastel girly theme -->
    <style>
        :root {
            --bs-primary: #FFB6C1; /* Soft pink */
            --bs-secondary: #FFC0CB; /* Light pink */
            --bs-light: #FFF0F5; /* Lavender blush */
            --bs-dark: #DC143C; /* Crimson for accents */
            --bs-body-bg: #FFF8DC; /* Cream background */
        }
        body {
            background-color: var(--bs-body-bg);
        }
        .navbar, .card {
            background-color: var(--bs-light);
        }
        .btn-primary {
            background-color: var(--bs-primary);
            border-color: var(--bs-primary);
        }
        .btn-primary:hover {
            background-color: var(--bs-secondary);
            border-color: var(--bs-secondary);
        }
    </style>
</head>
<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: var(--bs-primary);">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Kota di Indonesia</a>
        </div>
    </nav>

    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Navigasi</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#" class="text-decoration-none">Jakarta</a></li>
                            <!-- Add more items as needed -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Main Content -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-primary">Jakarta</h2>
                        <form method="post" action="">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama:</label>
                                <input type="text" name="nama" class="form-control" id="nama">
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Nomer Hp:</label>
                                <input type="number" name="no_hp" class="form-control" id="no_hp">
                            </div>
                            <div class="mb-3">
                                <label for="ttl" class="form-label">TTL:</label>
                                <input type="date" name="ttl" class="form-control" id="ttl" required>
                            </div>
                            <div class="mb-3">
                                <label for="nilai_tugas1" class="form-label">Nilai Tugas 1:</label>
                                <input type="number" name="nilai_tugas1" class="form-control" id="nilai_tugas1" required>
                            </div>
                            <div class="mb-3">
                                <label for="nilai_tugas2" class="form-label">Nilai Tugas 2:</label>
                                <input type="number" name="nilai_tugas2" class="form-control" id="nilai_tugas2" required>
                            </div>
                            <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
                        </form>
                        <?php if (isset($_POST['kirim'])): ?>
                            <div class="mt-4">
                                <p><strong>Nama:</strong> <?php echo isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : ''; ?></p>
                                <p><strong>Nomor HP:</strong> <?php echo isset($_POST['no_hp']) ? htmlspecialchars($_POST['no_hp']) : ''; ?></p>
                                <p><strong>TTL:</strong> <?php echo isset($_POST['ttl']) ? htmlspecialchars($_POST['ttl']) : ''; ?></p>
                                <p><strong>Nilai Tugas 1:</strong> <?php echo isset($_POST['nilai_tugas1']) ? (float) $_POST['nilai_tugas1'] : 0; ?></p>
                                <p><strong>Nilai Tugas 2:</strong> <?php echo isset($_POST['nilai_tugas2']) ? (float) $_POST['nilai_tugas2'] : 0; ?></p>
                                <p><strong>Total Nilai (Tugas 1 + Tugas 2):</strong> <?php echo
                                    (isset($_POST['nilai_tugas1']) ? (float) $_POST['nilai_tugas1'] : 0) +
                                    (isset($_POST['nilai_tugas2']) ? (float) $_POST['nilai_tugas2'] : 0); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-3 mt-4">
        &copy; 2023 Informasi Kota Indonesia | Dibuat dengan &hearts;
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>