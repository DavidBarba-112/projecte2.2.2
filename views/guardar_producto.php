<?php
// Recibe los datos del producto enviados por la solicitud AJAX
$data = json_decode(file_get_contents("php://input"), true);

// Conecta con la base de datos y guarda los detalles del producto en la tabla llistat_llibres_venuts
// Aquí debes usar la lógica necesaria para realizar la inserción en tu base de datos

// Ejemplo de inserción en la base de datos (necesitarás adaptarlo a tu caso)
$servername = "localhost";
$username = "pma";
$password = "P@ssw0rd";
$dbname = "bibliotecas";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $data['nombre'];
$precio = $data['precio'];
$categoria = $data['categoria'];
$fecha_actual = date("Y-m-d H:i:s"); // Obtiene la fecha y hora actual en el formato de MySQL

$sql = "INSERT INTO llistat_llibres_venuts (nombre, precio, categoria, fecha_venta) VALUES ('$nombre', $precio, '$categoria', '$fecha_actual')";

if ($conn->query($sql) === TRUE) {
    echo "Producto guardado correctamente en la base de datos";
} else {
    echo "Error al guardar el producto en la base de datos: " . $conn->error;
}

$conn->close();
?>
