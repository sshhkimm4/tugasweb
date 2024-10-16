<?php
function hitungDiskon($jumlahBayar) {
    if ($jumlahBayar >= 500000) {
        return 50;
    } elseif ($jumlahBayar >= 100000) {
        return 10;
    } elseif ($jumlahBayar >= 50000) {
        return 5;
    } else {
        return 0;
    }
}

function hitungTotalSetelahDiskon($jumlahBayar) {
    $persenDiskon = hitungDiskon($jumlahBayar);
    $jumlahDiskon = $jumlahBayar * ($persenDiskon / 100);
    return $jumlahBayar - $jumlahDiskon;
}

$jumlahBayar = 500000; 

$persenDiskon = hitungDiskon($jumlahBayar);
$totalSetelahDiskon = hitungTotalSetelahDiskon($jumlahBayar);

echo "Jumlah bayar: Rp " . number_format($jumlahBayar, 0, ',', '.') . "\n";
echo "Persentase diskon: " . $persenDiskon . "%\n";
echo "Total setelah diskon: Rp " . number_format($totalSetelahDiskon, 0, ',', '.');
?>