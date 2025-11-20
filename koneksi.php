<?php
$host = "web-tugas-cito-server.mysql.database.azure.com";
$user = "swupczrzan@web-tugas-cito-server";
$pass = "Permisi123";
$db   = "web-tugas-cito-database";

$conn = mysqli_init();

mysqli_real_connect(
    $conn,
    $host,
    $user,
    $pass,
    $db,
    3306,
    NULL,
    MYSQLI_CLIENT_SSL
);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
