<?php
    function create_if_not_exists($db){
        $q_str = "CREATE TABLE IF NOT EXISTS books(
            id INT UNSIGNED NOT NULL PRIMARY KEY AUTOINCREMENT,
            title VARCHAR(200),
            author VARCHAR(200),
            available VARCHAR(200),
            pages VARCHAR(200),
            isbn VARCHAR(200)
        )ENGINE=InnoDb;";
        $db->query($q_str); 

    }
?>