<?php
include("db.php");

// Establecer cabecera para que se muestren bien los caracteres especiales
header('Content-Type: application/json; charset=utf-8');

// Recibir datos JSON
$data = json_decode(file_get_contents("php://input"), true);
$username = $data["username"];
$password = $data["password"];

// Validar campos vacíos
if (empty($username) || empty($password)) {
    echo json_encode(["message" => "Faltan campos"]);
    exit;
}

// Buscar usuario por nombre
$sql = "SELECT password FROM usuarios WHERE username = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($hash);
    $stmt->fetch();

    // Verificar contraseña
    if (password_verify($password, $hash)) {
        echo json_encode(["message" => "Autenticación satisfactoria"]);
    } else {
        echo json_encode(["message" => "Contraseña incorrecta"]);
    }
} else {
    echo json_encode(["message" => "Usuario no encontrado"]);
}
?>

