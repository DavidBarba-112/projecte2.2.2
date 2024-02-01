<?php
$host = 'localhost';
$username = 'pma';
$password = 'P@ssw0rd';
$database = 'bibliotecas';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}
?>
<!-- // $con = mysqli_connect("localhost","daw_leandro","P@ssw0rd","tasquesv2_leandro") or exit(mysqli_connect_error()); -->
