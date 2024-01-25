<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</body>
</html>

<body>
    <form action=index.php method="GET">
    <input type="hidden" name=controlador value=Ocupacions>
    <input type="hidden" name=accion value=gravar_modificacio>
        <table>
            <?php 
                $item = $listado->fetch();
                foreach($item as $key=>$value) { ?>
                        <tr>
                            <td><label for=<?php echo $key ?>><?php echo $key ?></label></td>
                            <td><input type=text name=<?php echo $key ?> id=<?php echo $key ?> value="<?php echo $value ?>"></td>
                        </tr><?php
                    }
                 ?>
        </table>
        <input type="submit" value="Grabar dades">

        <table>
            <?php
            $class = $classes->fetch();
            foreach($class as $key=>$value) { ?>
                <th><?php echo $key ?></th><?php
            }
            do { ?>
                <tr><?php
                foreach($class as $key=>$value) { ?>
                    <td><?php echo $value ?></td><?php

                } ?>
            <td><a href="index.php?controlador=Treballadors&accion=formulario_modificar&param=<?php echo $item["id_treballador"] ?>">Editar </a></td><a href="">Eliminar</a></td>
                </tr> <?php
            } while($class = $classes->fetch()); ?>
        </table>




    </form>
</body>
</html>