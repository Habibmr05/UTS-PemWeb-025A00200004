<?php
require_once 'functions.php';
require_once 'data.php';

$total_merch = hitungTotalMerch($data_merch);
$rata_harga = hitungRataRataHarga($data_merch);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Merchandise - Kopi Kenangan</title>
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
            <h3>Statistik Merchandise</h3>
            <p>Total Item: <strong><?= $total_merch ?> Produk</strong></p>
            <p>Rata-rata Harga: <strong>Rp <?= number_format($rata_harga, 0, ',', '.') ?></strong></p>
        </section>

        <!-- Menggunakan class merchandise-grid -->
        <section class="merchandise-grid">
            <?php foreach($data_merch as $item): ?>
            <article class="kartu-merchandise">
                <img src="<?= e($item['gambar']) ?>" alt="<?= e($item['nama']) ?>">
                <h3><?= e($item['nama']) ?></h3>
                <p>Kategori: <strong><?= e($item['kategori']) ?></strong></p>
                <span class="badge badge-red">Rp <?= number_format($item['harga'], 0, ',', '.') ?></span>
            </article>
            <?php endforeach; ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Web Merchandise</p>
    </footer>
</body>
</html>