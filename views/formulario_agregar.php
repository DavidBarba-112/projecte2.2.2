<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Trabajador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #0066cc;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #0066cc;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #004080;
        }
    </style>
</head>
<body>
    <form action="index.php?controlador=Treballadors&accion=guardar_nuevo" method="POST">
        <h2>Agregar Nuevo Trabajador</h2>
        <label for="nombre_usuario">Nombre:</label>
        <input type="text" id="nombre_usuario" name="nombre_usuario">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <label for="documento">Documento:</label>
        <input type="text" id="documento" name="documento">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">

        <label for="rol">Rol:</label>
        <select name="rol" id="rol">
            <option value="1">Empleado</option>
            <option value="2">Administrador</option>
        </select>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>
