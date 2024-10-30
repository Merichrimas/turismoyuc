<?php
$mysqli = new mysqli('localhost', 'root', 'pass', 'base_de_datos');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Create
function createDestino($nombre, $descripcion, $ubicacion, $precio_estimado) {
    global $mysqli;
    $stmt = $mysqli->prepare("INSERT INTO destinos (nombre, descripcion, ubicacion, precio_estimado) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssd", $nombre, $descripcion, $ubicacion, $precio_estimado);
    $stmt->execute();
    $stmt->close();
}

// Read
function getDestinos() {
    global $mysqli;
    $result = $mysqli->query("SELECT id, nombre, descripcion, ubicacion, precio_estimado FROM destinos");
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Read single destination
function getDestino($id) {
    global $mysqli;
    $stmt = $mysqli->prepare("SELECT id, nombre, descripcion, ubicacion, precio_estimado FROM destinos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

// Update
function updateDestino($id, $nombre, $descripcion, $ubicacion, $precio_estimado) {
    global $mysqli;
    $stmt = $mysqli->prepare("UPDATE destinos SET nombre = ?, descripcion = ?, ubicacion = ?, precio_estimado = ? WHERE id = ?");
    $stmt->bind_param("sssdi", $nombre, $descripcion, $ubicacion, $precio_estimado, $id);
    $stmt->execute();
    $stmt->close();
}

// Delete
function deleteDestino($id) {
    global $mysqli;
    $stmt = $mysqli->prepare("DELETE FROM destinos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}
?>
