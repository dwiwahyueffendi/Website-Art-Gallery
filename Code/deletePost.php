<?php
    session_start();
    $username = $_SESSION['username'];
    require('conn.php');
    if(isset($_REQUEST['postid']))
    {
        $id_post = $_REQUEST['postid'];
        $query = "DELETE FROM POST WHERE IDPOST='$id_post'";
        mysqli_query($conn, $query);
        header("Location: userArt.php");
    }
?>
</body>
</html>