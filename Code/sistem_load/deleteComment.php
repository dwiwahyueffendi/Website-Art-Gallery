<?php
    function delete($data){
        //debugging
        // var_dump($data);
        // var_dump($file);  die;
        global $conn;

        //Post Id
        $id_post=$_REQUEST['postid'];
        //Username
        $username = $_SESSION['username'];
        //id comment
        $id_comment = $data['id_comment'];
        // var_dump($comment);var_dump($id_comment);var_dump($id_post);die;
        //prepare the query
        $query ="   DELETE 
                    FROM komentar
                    WHERE IDKOMENTAR = $id_comment AND USERNAME = '$username' AND IDPOST = $id_post ;
                ";
        $conn->query($query);
        return mysqli_affected_rows($conn); //Mengembalikan sebuah value 1 jika berhasil dan -1 jika tidak berhasil
    }
    if( isset($_POST['delete_it']) )
    {
        if( delete($_POST) > 0 )
        {
            unset($_POST['id_comment']);
            unset($_POST['delete_it']);
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