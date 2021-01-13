<?php
    function like($data){
        //debugging
        // var_dump($data);
        // var_dump($file);  die;
        global $conn;

        //Post Id
        $id_post=$_REQUEST['postid'];
        //Username
        $username = $_SESSION['username'];
        //Comment
        $jml_like = $data['like'] + 1;
        
        //prepare the query
        $query ="   UPDATE post
                    SET `JUMLAHLIKE` = $jml_like
                    WHERE IDPOST=$id_post AND USERNAME = '$username' ;
                ";

        
        $conn->query($query);
        return mysqli_affected_rows($conn); //Mengembalikan sebuah value 1 jika berhasil dan -1 jika tidak berhasil
    }
    if( isset($_POST['like_it']) )
    {
        if( like($_POST) > 0 )
        {
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