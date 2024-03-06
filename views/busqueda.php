<?php
// Conexión a la base de datos (debes ajustar estos valores según tu configuración)
$servername = "localhost";
$username = "pma";
$password = "P@ssw0rd";
$dbname = "bibliotecas";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el término de búsqueda del parámetro POST
$term = $_POST['term'];

// Consulta SQL para buscar libros por nombre
$sql = "SELECT * FROM llistat_llibres WHERE nom LIKE '%$term%'";
$result = $conn->query($sql);

// Verificar si se encontraron resultados
if ($result->num_rows > 0) {
    // Inicializar un array para almacenar los resultados de la búsqueda
    $response = array();

    // Recorrer los resultados y añadirlos al array de respuesta
    while($row = $result->fetch_assoc()) {
        $response[] = $row;
    }

    // Devolver los resultados como JSON
    echo json_encode($response);
} else {
    // Si no se encontraron resultados, devolver un mensaje de error
    echo json_encode(array('message' => 'No se encontraron resultados'));
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
