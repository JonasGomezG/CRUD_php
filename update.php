<?php
    $datos = [$_POST['id'], $_POST['marca'], $_POST['modelo'], $_POST['precio'], $_POST['descripcion']];
    require_once('Database.php');
    Database::update($datos);
    header('Location: index.php');
?>