<?php
    $id = $_GET['id'];
    require 'database/connection.php';
    require 'database/dbio.php';
    $db = Connect();
    deleteBook($db,$id);
    echo 'book deleted';
    header('Location: index.php');
?>