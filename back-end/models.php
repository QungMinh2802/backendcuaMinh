<?php
require "./database.php";
    class models extends database{
        function insert_blog_admin($id, $image, $title, $content)
        {
            $sql = "INSERT INTO blog_admin(id, image, title, content) VALUES ('$id', '$image', '$title', '$content')";
            $this->ExecuteSQL($sql);
        }
    }
?>