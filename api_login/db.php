<?php
// Habilitar reporte de errores de MySQLi
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Crear conexión con charset utf8mb4 (soporta acentos y emojis)
    $conexion = new mysqli("localhost", "root", "", "api_users");
    $conexion->set_charset("utf8mb4");
} catch (mysqli_sql_exception $e) {
    // Manejo de error más claro
    die("Conexión fallida: " . $e->getMessage());
}
?>
