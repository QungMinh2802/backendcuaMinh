<?php
    require "./database.php";

    function get_list_blog_post()
    {
        $database = new database();
        $select = "SELECT * FROM blog_post";
	    $data = $database->SelectAll($select);
        return $data;
    }


    //Get contact người dùng lên table
    function get_list_table_blog_contact(){

        $database = new database();
        $select = "SELECT * FROM blog_contact";
	    $data = $database->SelectAll($select);
        return $data;
    }


    function insert_blog_post($id, $image, $title, $content)
    {
        $database = new database();
        $sql = "INSERT INTO blog_post(id, image, title, content) VALUES ('$id', '$image', '$title', '$content')";
		$database->ExecuteSQL($sql);
    }
?>