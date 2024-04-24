<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        form {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        input[type="file"],
        input[type="text"],
        select {
            display: block;
            margin-bottom: 20px;
            width: calc(100% - 40px);
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        h2 {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <h2>Image Upload Form</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="image">Select image to upload:</label>
        <input type="file" name="image" id="image">
        <label for="price">Price:</label>
        <input type="text" name="price" id="price">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom">
        <label for="categoria">Categoria:</label>
        <select name="categoria" id="categoria">
            <?php
            // Conexión a la base de datos
            $conexion = new mysqli("localhost", "pma", "P@ssw0rd", "bibliotecas");

            // Verificar la conexión
            if ($conexion->connect_error) {
                die("Error en la conexión: " . $conexion->connect_error);
            }

            // Consulta SQL para obtener las categorías
            $sql = "SELECT id_categoria, categoria FROM categoria";

            // Ejecutar la consulta
            $result = $conexion->query($sql);

            // Si hay resultados, mostrar las opciones
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["id_categoria"] . "'>" . $row["categoria"] . "</option>";
                }
            } else {
                echo "<option value=''>No hay categorías disponibles</option>";
            }

            // Cerrar la conexión
            $conexion->close();
            ?>
        </select>

        <input type="submit" name="submit" value="UPLOAD">
    </form>
</body>
</html>
