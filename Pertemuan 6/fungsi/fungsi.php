<?php

// Soal 4: Fungsi
// function perkenalan() {
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Manda<br>";
//     echo "Senang berkenalan dengan Anda<br>";
// }

// // memanggil fungsi yang sudah dibuat
// perkenalan();
// perkenalan();

// Soal 5: Fungsi dengan Parameter
// function perkenalan($nama, $salam) {
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br>";
//     echo "Senang berkenalan dengan Anda.<br>";
// }

// // memanggil fungsi yang sudah dibuat
// perkenalan("Jasmyne", "Halo");

// echo "<hr>";

// $saya = "Amanda";
// $ucapanSalam = "Selamat pagi";

// // memanggil lagi
// perkenalan($saya, $ucapanSalam);


// // Soal 6: Parameter dengan Nilai Default
// function perkenalan($nama, $salam="Assalamualaikum") {
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br>";
//     echo "Senang berkenalan dengan Anda.<br>";
// }

// // memanggil fungsi yang sudah dibuat
// perkenalan("Jasmyne", "Halo");

// echo "<hr>";

// $saya = "Amanda";
// $ucapanSalam = "Selamat pagi";

// // memanggil lagi tanpa mengisi parameter salam
// perkenalan($saya);

// // Soal 7: Fungsi yang Mengembalikan Nilai
// function hitungUmur($thn_lahir, $thn_sekarang) {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }

// echo "Umur saya adalah ". hitungUmur(2004, 2024) ." tahun"

// // Soal 8: Memanggil Fungsi di dalam Fungsi
// function hitungUmur($thn_lahir, $thn_sekarang) {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }
// function perkenalan ($nama, $salam="Assalamualaikum") {
//     echo $salam.", ";
//     echo "Perkenalan, nama saya ".$nama."<br/>";

//     // memanggil fungsi lain
//     echo "Saya berusia ". hitungUmur(2004, 2024) ." tahun<br/>";
//     echo "Senang berkenalan dengan Anda.<br/>";
// }

// // memanggil fungsi perkenalan
// perkenalan("Manda");

?>