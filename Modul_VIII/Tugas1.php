<?php
function isGanjil($angka) {
    return ($angka % 2 == 1);
}

$batas_bawah = 10;
$batas_atas = 123456;
$jumlah_ganjil = 0;

for ($i = $batas_bawah; $i <= $batas_atas; $i++) {
    if (isGanjil($i)) {
        $jumlah_ganjil++;
    }
}

echo "Jumlah bilangan ganjil antara $batas_bawah dan $batas_atas adalah: $jumlah_ganjil";
?>
