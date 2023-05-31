<?php

    require_once('Database.php');

    $resultado = Database::getAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="create.php" >Crear</a>
    <table>
        <thead>
            <?php
               echo '<tr>';
               echo '<th>id</th>';
               echo '<th>Marca</th>';
               echo '<th>Modelo</th>';
               echo '<th>Precio</th>';
               echo '<th>Descripcion</th>';
               echo '<th>Acciones</th>';
               echo '</tr>';
            ?>
        </thead>
        <tbody>
            <?php
            foreach ($resultado as $row) {
                echo "<tr>";
                echo "<td>". $row['id'] ." </td>";
                echo "<td>". $row['marca'] ." </td>";
                echo "<td>". $row['modelo'] ." </td>";
                echo "<td>". $row['precio'] ." </td>";
                echo "<td>". $row['descripcion']." </td>";
                echo "<td> <a href='edit.php?id=".$row['id']."'>Editar</a> 
                            <a href='delete.php?id=".$row['id']."'>Eliminar</a>
                    </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>