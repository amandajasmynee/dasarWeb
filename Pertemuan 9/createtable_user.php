<?php

// Informasi koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "prakwebdb";

// Koneksi ke database
$connection = mysqli_connect($servername, $username, $password, $database);

// Periksa koneksi
if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// // Query untuk membuat tabel user
// $query = "CREATE TABLE user (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(50) NOT NULL,
//     password VARCHAR(50) NOT NULL )";

// // Run query
// if (mysqli_query($connection, $query)) {
//     echo "Tabel 'user' berhasil dibuat.";
// } else {
//     echo "Error: " . mysqli_error($connection);
// }

// Query untuk memasukkan data ke tabel user
$queryinsertdata = "INSERT INTO user
    (id, username, password) VALUES
        (1, 'admin', '123')";

// Run query
if (mysqli_query($connection, $queryinsertdata)) {
    echo "Data berhasil dimasukkan ke tabel 'user'.";
} else {
    echo "Error: " . mysqli_error($connection);
}

// Close koneksi
mysqli_close($connection);
?>