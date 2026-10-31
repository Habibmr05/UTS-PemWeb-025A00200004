<?php
declare(strict_types=1);

function hitungTotalMerch(array $data): int {
    return count($data); 
}

function hitungRataRataHarga(array $data): float {
    if (count($data) === 0) return 0.0;
    $semua_harga = array_column($data, 'harga'); 
    return array_sum($semua_harga) / count($semua_harga);
}

function e(string $string): string {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8'); 
}
?>