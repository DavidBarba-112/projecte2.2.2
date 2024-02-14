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
        input[type="num"],

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
    <form action="index.php?controlador=Llistat&accion=guardar_nuevo" method="POST">
        <h2>Agregar Nuevo Libro</h2>
        
        <label for="nom">Nombre:</label>
        <input type="text" id="nom" name="nom">

        <label for="num_serie">num_serie:</label>
        <input type="num" id="num_serie" name="num_serie">

        <label for="preu">preu:</label>
        <input type="num" id="preu" name="preu">

        <label for="categoria">categoria:</label>
        <input type="text" id="categoria" name="categoria">

        <label for="id_usuario">id_usuario:</label>
        <input type="num" id="id_usuario" name="id_usuario">



        <input type="submit" value="Guardar">
    </form>
</body>
</html>
