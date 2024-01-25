<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=index.php method="GET">
    <input type="hidden" name=controlador value=Disponiblitat>
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
            $item = $items->fetch();
            foreach($item as $key=>$value) { ?>
                <th><?php echo $key ?></th><?php
            }
            do { ?>
                <tr><?php
                foreach($item as $key=>$value) { ?>
                    <td><?php echo $value ?></td><?php

                } ?>
            <td><a href="index.php?controlador=Disponiblitat&accion=formulario_modificar&param=<?php echo $item["id_treballador"] ?>">Editar </a></td><a href="">Eliminar</a></td>
                </tr> <?php
            } while($item = $items->fetch()); ?>
        </table>




    </form>
</body>
</html>