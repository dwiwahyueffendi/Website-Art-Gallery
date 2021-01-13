<?php
    ob_start();
    global $conn;
    if(isset($_POST['save_it']))
    {
        $id_post = $_REQUEST['postid'];
        $username = $_SESSION['username'];
        $title = $_POST['e_title'];
        $deskripsi = $_POST['e_deskripsi'];
        $genre = $_POST['e_genre'];
    
        $query = "UPDATE POST SET TITLE='$title', DESKRIPSI='$deskripsi', IDKATEGORI='$genre' WHERE IDPOST='$id_post';";
        mysqli_query($conn, $query);

        if( mysqli_affected_rows($conn) > 0 )
        {
            unset($_REQUEST);
            header("Location: focus-layoutv2.php?postid=$id_post");
            exit;
        }
        else
        {
            echo mysqli_error($conn);
        }
    }
?>