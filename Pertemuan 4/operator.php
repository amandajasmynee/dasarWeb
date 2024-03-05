<?php

$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali   = $a * $b;
$hasilBagi   = $a / $b;
$SisaBagi    = $a % $b;
$pangkat     = $a ** $b;

echo "Hasil Penjumlahan: " . $hasilTambah . "<br>";
echo "Hasil Pengurangan: " . $hasilKurang . "<br>";
echo "Hasil Perkalian: " . $hasilKali . "<br>";
echo "Hasil Pembagian: " . $hasilBagi . "<br>";
echo "Sisa Bagi: " . $SisaBagi . "<br>";
echo "Hasil Pangkat: " . $pangkat . "<br>";

$hasilSama              = $a == $b;
$hasilTidakSama         = $a != $b;
$hasilLebihKecil        = $a < $b;
$hasilLebihBesar        = $a > $b;
$hasilLebihKecilSama    = $a <= $b;
$hasilLebihBesarSama    = $a >= $b;

echo "<br>";
echo "Apa a sama dengan b? " . ($hasilSama ? "Ya" : "Tidak") . "<br>";
echo "Apa a tidak sama dengan b? " . ($hasilTidakSama ? "Ya" : "Tidak") . "<br>";
echo "Apa a lebih kecil dari b? " . ($hasilLebihKecil ? "Ya" : "Tidak") . "<br>";
echo "Apa a lebih besar dari b? " . ($hasilLebihBesar ? "Ya" : "Tidak") . "<br>";
echo "Apa a lebih kecil atau sama dengan b? " . ($hasilLebihKecilSama ? "Ya" : "Tidak") . "<br>";
echo "Apa a lebih besar atau sama dengan b? " . ($hasilLebihBesarSama ? "Ya" : "Tidak") . "<br>";

$hasilAND   = $a && $b ;
$hasilOr    = $a || $b ;
$hasilNotA  = !$a  ;
$hasilNotB  = !$b  ;

echo "<br>";
echo "Hasil dari operasi AND: " . ($hasilAND ? "True" : "False") . "<br>";
echo "Hasil dari operasi OR: " . ($hasilOr ? "True" : "False") . "<br>";
echo "Hasil dari operasi NOT pada a: " . ($hasilNotA ? "True" : "False") . "<br>";
echo "Hasil dari operasi NOT pada b: " . ($hasilNotB ? "True" : "False") . "<br>";

echo "<br>";
$a += $b;
echo "Nilai a setelah ditambah dengan b: " . $a . "<br>";
$a -= $b;
echo "Nilai a setelah dikurangi dengan b: " . $a . "<br>";
$a *= $b;
echo "Nilai a setelah dikali dengan b: " . $a . "<br>";
$a /= $b;
echo "Nilai a setelah dibagi dengan b: " . $a . "<br>";
$a %= $b;
echo "Sisa bagi a setelah dibagi dengan b: " . $a . "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br>";
echo "Apa a identik dengan b? " . ($hasilIdentik ? "Ya" : "Tidak") . "<br>";
echo "Apa a tidak identik dengan b? " . ($hasilTidakIdentik ? "Ya" : "Tidak") . "<br>";

// Soal Cerita

$kursiTotal = 45;
$kursiTerisi = 28;
$kursiKosong = $kursiTotal - $kursiTerisi;
$persenKursiKosong = ($kursiKosong / $kursiTotal) * 100;

echo "<br><br>";
echo "Sebuah restoran memiliki 45 kursi di dalamnya. Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. 
      Berapa persen kursi yang masih kosong di restoran tersebut?";
echo "<br><br>";
echo "Jumlah kursi yang masih kosong di restoran: " . $kursiKosong . "<br>";
echo "Persentase kursi yang masih kosong di restoran: " . number_format($persenKursiKosong, 2) . "%";

?>