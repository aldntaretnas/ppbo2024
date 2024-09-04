<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$waktu = date('H:i');

if ($waktu > 5) {
    $sapaan = "Selamat pagi";
} elseif ($waktu > 11) {
    $sapaan = "Selamat siang";
} elseif ($waktu > 15) {
    $sapaan = "Selamat sore";
} else {
    $sapaan = "Selamat malam";
}

echo "Hallo {$sapaan}, {$nama}, sekarang pukul {$waktu}";