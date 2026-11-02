<?php 
require_once 'functions.php';
require_once 'data.php'; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Merchandise</title>
    <link rel="icon" type="image/png" href="assets/logo.png">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <header>
        <img src="assets/logo.png" alt="Logo Kenangan" class="logo-header">
        <h1>Special Merchandise</h1>
    </header>

    <nav>
        <a href="index.php">Beranda</a>
        <a href="katalog.php">Katalog Merchandise</a>
    </nav>

    <main>
        <section class="kurator-section">
             <h3>Merchandise Ipul</h3>
             <p>Selamat datang di Toko Merchandise Ipul. Buat kamu yang suka nonton bola suka kehausan wajib banget beli di toko ipul ini apalagi khusus kamu fans ipul dapetin diskon.<br><br>
            <strong>Jam Operasional:</strong> Buka Setiap Hari 24 jam non stop buat kamu fans ipul sejati</p>
        </section>

        <!-- Menggunakan class merchandise-grid -->
        <section class="merchandise-grid">
            <?php foreach($merch_unggulan as $item): ?>
            <article class="kartu-merchandise">
                <img src="<?= e($item['gambar']) ?>" alt="<?= e($item['nama']) ?>">
                <h3><?= e($item['nama']) ?></h3>
                <p><?= e($item['deskripsi']) ?></p>
            </article>
            <?php endforeach; ?>
        </section>
    </main>

    <footer>
     <p>&copy; Special Merchandise</p>
    </footer>
</body>
</html>