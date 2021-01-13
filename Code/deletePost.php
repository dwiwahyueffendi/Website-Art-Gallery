<?php
    session_start();
    function delete_post($data){
        //debugging
        // var_dump($data);
        // var_dump($file);  die;
        require('conn.php');
        //Post Id
        $id_post=$data['postid'];
        //Username
        $username = $_SESSION['username'];
        // var_dump($id_post);var_dump($username);die;
        //checkif there's a comment
        $query_cek_komen = "    SELECT 
                                    *
                                FROM
        
        ";
        //delete the post the query
        $num_rows = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM komentar WHERE IDPOST=$id_post"));
        if($num_rows != 0){
            mysqli_query($conn,"DELETE FROM komentar WHERE IDPOST=$id_post");
            
        }
        
        $query ="   DELETE 
                    FROM post
                    WHERE IDPOST = $id_post AND USERNAME = '$username';
                ";
        $conn->query($query);
        return mysqli_affected_rows($conn); //Mengembalikan sebuah value 1 jika berhasil dan -1 jika tidak berhasil          
    }
    if( isset($_REQUEST['postid']) )
    {
        if( delete_post($_REQUEST) > 0 )
        {
            header("Location: userArt.php");
            exit;
            // echo "<script>
            //             alert('Sukses!');
            //         </script>";
        }
        else
        {
            //   echo "<script>
            //             alert('Galat Mengupload!');
            //         </script>";
            echo mysqli_error($conn);
        }
    }
    
?>