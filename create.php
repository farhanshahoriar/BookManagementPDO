<?php

    if(isset($_GET['title'])){
        require 'database/connection.php';
        require 'database/dbio.php';
        
        $db = Connect();
        $available = 'false';
        if("on" == $_GET['available']) $available = 'true';
        addBook($db,$_GET['title'], $_GET['author'], $available , $_GET['pages'], $_GET['isbn']);
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <form action="create.php" method="GET">
        <label>Book Title:</label>
        <input type="text"  name="title">
        <br>
        <label>Author:</label>
        <input type="text"  name="author">
        <br>
        <label>Available:</label>
        <input type="checkbox"  name="available">
        <br>
        <label>Pages:</label>
        <input name="pages" type="number">
        <br>
        <label>isbn:</label>
        <input type="number"  name="isbn">
        <br>


        <input type="submit" value="Submit"/>
          
    </form>
</body>
</html>