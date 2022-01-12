<?
    function addBook($db, $title, $author, $available, $pages, $isbn){

        $qry = "INSERT INTO books (title, author, available, pages, isbn)
        VALUES ('$title', '$author', '$available', '$pages', '$isbn');";        
        $db->query($qry);
    }
    function deleteBook($db, $id){
        $id = (int)$id;
        return $db->exec("DELETE FROM books WHERE id=$id;");
    }
    function get_books($db){
        $table = $db->query("SELECT * FROM `books` WHERE 1");
        return $table;
    }
?>