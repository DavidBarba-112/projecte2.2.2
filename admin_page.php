<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
  // Mostrar el correo del usuario si está autenticado
  session_start();
  if (!isset($_SESSION['user']) || $_SESSION['user']['rol'] != 'Administrador') {
        echo "Bienvenido, " . $_SESSION['user']['email'];
  }
// Aquí puedes incluir el contenido específico para el administrador
?>

    <h1>hola admin</h1>
    
</body>
</html>