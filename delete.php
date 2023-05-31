<?php 
    $id = $_GET['id'];
    require_once('Database.php');
    Database::delete($id);
    header('Location: index.php');
?>