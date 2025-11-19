<?php
$host = "web-tugas-cito7.azurewebsites.net"; // <--- UBAH DARI localhost JADI INI
$user = "root";
$pass = "";
$db   = "db_inventory";
$port = "9306"; // Ganti dengan port yang kamu lihat di XAMPP
$conn = mysqli_connect($host, $user, $pass, $db, $port); // Tambahkan $port di akhir

if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}

?>
