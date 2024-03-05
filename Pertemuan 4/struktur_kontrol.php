<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

$jarakSaatIni      = 0;
$jarakTarget       = 500;
$peningkatanHarian = 30;
$hari              = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br><br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

$jumlahLahan         = 10;
$tanamanPerlahan     = 5;
$buahPerTanaman      = 10;
$jumlahBuah          = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "<br><br>";
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

$skorUjian = [85,92,78,96,88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "<br><br>";
echo "Total skor ujian adalah : $totalSkor ";
echo "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

//Soal Cerita 1
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilai);
$totalNilai = 0;
$hitung = count($nilai);

for ($i = 2; $i < $hitung - 2; $i++) {
    $totalNilai += $nilai[$i];
}

$rerata = $totalNilai / 6; 

echo "<br>";
echo "Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika. Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. 
      Bantu guru ini menghitung total nilai yang akan digunakan  untuk menentukan nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah. 
      Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96) <br><br>";
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $totalNilai <br>";
echo "Rata-rata: $rerata";

// Soal Cerita 2
$harga = 120000;

if ($harga > 100000){
    $discount = $harga * 20 / 100;
    $harga -= $discount;
}

echo "<br><br>";
echo "Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. 
      Bantu pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon. <br><br>";
echo "Diskon : Rp $discount,00 <br>";
echo "Harga akhir: Rp. $harga,00 <br>";

// Soal Cerita 3
echo "<br>";
echo "Seorang pemain game ingin menghitung total skor mereka dalam permainan. Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. 
      Jika mereka memiliki lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan. <br><br>";

$point = 700;
echo "Total Skor pemain adalah: $point <br>";
$status = ($point > 500) ? 'YA' : 'TIDAK';
echo "Apakah pemain mendapatkan hadiah tambahan? ($status) <br>";
?>