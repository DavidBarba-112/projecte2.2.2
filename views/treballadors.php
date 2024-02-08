<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Borbadeen peru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0; /* Eliminar margen por defecto */
            padding: 0; /* Eliminar relleno por defecto */
        }

        #top-header {
            background-color: #333; /* Color de fondo del encabezado superior */
            color: #fff; /* Color del texto */
            padding: 10px; /* Espacio alrededor del contenido */
        }

        #fixed-header {
            background-color: #f2f2f2; /* Color de fondo del encabezado fijo */
            padding: 10px; /* Espacio alrededor del contenido */
            position: fixed; /* Fijar el encabezado en la parte superior */
            width: 100%; /* Ancho del encabezado */
            top: 0; /* Colocar el encabezado en la parte superior */
            z-index: 1000; /* Establecer una capa superior para el encabezado */
        }

        h2 {
            color: #0066cc;
        }

        table {
            border-collapse: collapse;
            margin-top: 50px; /* Espacio superior para evitar que el contenido se solape con el encabezado */
            width: 100%;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        a {
            background-color: #0066cc;
            border-radius: 3px;
            color: #fff;
            display: inline-block;
            margin-right: 10px;
            padding: 8px 16px;
            text-decoration: none;
        }

        a:hover {
            background-color: #004080;
        }
    </style>
</head>
<body>
    <div id="top-header">
        <a href="#">Inicio</a>
        <a href="#">Página 1</a>
        <a href="#">Página 2</a>
        <!-- Agrega más enlaces según sea necesario -->
    </div>
    <div id="fixed-header">
        <h2 id="titol">Treballadors2</h2>
    </div>
    <table border="1">
        <thead>
            <tr><?php
                $item = $listado->fetch();
                foreach($item as $key=>$value) { ?>
                    <th><?php echo $key ?></th><?php
                } ?>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody><?php 
            do { ?>  
                <tr><?php
                    foreach($item as $key=>$value) { ?>
                        <td><?php echo $value ?></td><?php
                    } ?>
                    <td><a href="index.php?controlador=Treballadors&accion=formulario_modificar&param=<?php echo $item["id_usuario"] ?>">Editar</a></td>
                    <td><a href="index.php?controlador=Treballadors&accion=eliminar&param=<?php echo $item["id"] ?>">Eliminar</a></td>
                </tr><?php
            } while($item = $listado->fetch());  ?>
        </tbody>
    </table>   
    <a href="index.php?controlador=Treballadors&accion=formulario_agregar&param=<?php echo $item["id_usuario"] ?>">Añadir</a></body>
</html>
