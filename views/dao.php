<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Usuarios</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Documento</th>
            <th>Contraseña</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        require_once ($_SERVER['DOCUMENT_ROOT']."/models/UsuarioDAO.php");

        $usuarioDAO = new UsuarioDAO();
        $usuarios = $usuarioDAO->selectUsuarios();

        foreach ($usuarios as $usuario) {
            echo "<tr>";
            echo "<td>" . $usuario->getIdusuario() . "</td>";
            echo "<td>" . $usuario->getNombre() . "</td>";
            echo "<td>" . $usuario->getEmail() . "</td>";
            echo "<td>" . $usuario->getDocumento() . "</td>";
            echo "<td>" . $usuario->getPassword() . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
