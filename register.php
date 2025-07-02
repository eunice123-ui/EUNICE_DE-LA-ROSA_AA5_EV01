<?php
include("db.php");

// Establecer cabecera para caracteres especiales
header('Content-Type: application/json; charset=utf-8');

// Recibir datos del cuerpo de la petición
$data = json_decode(file_get_contents("php://input"), true);
$username = $data["username"];
$password = password_hash($data["password"], PASSWORD_DEFAULT); // Encriptar contraseña

// Validar campos vacíos
if (empty($username) || empty($data["password"])) {
    echo json_encode(["message" => "Faltan campos"]);
    exit;
}

// Insertar nuevo usuario en la base de datos
$sql = "INSERT INTO usuarios (username, password) VALUES (?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
    echo json_encode(["message" => "Usuario registrado exitosamente"]);
} else {
    echo json_encode(["message" => "Error en el registro"]);
}
?>
