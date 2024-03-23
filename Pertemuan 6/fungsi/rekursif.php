<?php

// Soal 9: Fungsi Rekursif
// function tampilkanHaloDunia(){
//     echo "Halo dunia! <br>";
    
//     tampilkanHaloDunia();
// }

// tampilkanHaloDunia();

//Soal 10.1: Fungsi Rekursif
// for ($i=1; $i <=25; $i++){
//     echo "Perulangan ke-{$i} <br>";
// }

// Soal 10.2: Fungsi Rekursif
// function tampilkanAngka (int $jumlah, int $indeks = 1) {
//     echo "Perulangan ke-{$indeks} <br>";

//     // panggil diri sendiri selama $indeks <= jumlah
//     if ($indeks < $jumlah) {
//         tampilkanAngka($jumlah, $indeks + 1);
//     }
// }
// tampilkanAngka(28);

// Soal 11: Contoh kasus Menu Bertingkat
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                [
                    "nama" => "Wisata",
                    "subMenu" => [
                        [
                            "nama" => "Pantai"
                        ],
                        [
                            "nama" => "Gunung"
                        ]
                    ]
                ],
                [
                    "nama" => "Kuliner"
                ],
                [
                    "nama" => "Hiburan"
                ]
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

// function tampilkanMenuBertingkat(array $menu) {
//     echo "<ul>";
//     foreach ($menu as $key => $item) {
//         echo "<li>{$item['nama']}</li>";
//     }
//     echo "</ul>";
// }
// tampilkanMenuBertingkat($menu);

function tampilkanMenuBertingkat(array $menu){
    echo "<ul>";
    foreach ($menu as $key => $item){
        echo "<li>{$item['nama']}";
        
        // Periksa apakah ada submenu dan apakah submenu tersebut adalah array
        if (isset($item['subMenu']) && is_array($item['subMenu'])) {
            // Panggil fungsi rekursif untuk menampilkan submenu
            tampilkanMenuBertingkat($item['subMenu']);
        }
        
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>