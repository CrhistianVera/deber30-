<?php
// config.php para XAMPP (local)

$host = "localhost";
$user = "root";
$pass = "";              // en XAMPP por defecto está vacía
$db   = "portafolio";    // nombre de la BD que creaste

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die(" Error de conexión: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");

?>
