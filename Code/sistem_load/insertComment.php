<?php
    function insert($data){
        //debugging
        // var_dump($data);
        // var_dump($file);  die;
        global $conn;

        //Post Id
        $id_post=$_REQUEST['postid'];
        //Username
        $username = $_SESSION['username'];
        //Comment
        $comment = $data['i_komen'];
        //tanggal
        $date = date("Y-m-d");
        //time
        $time = date("h:i:s");

        //prepare the query
        $query ="   INSERT INTO
                        komentar(`ISIKOMENTAR`,`TANGGALKOMENTAR`,`JAMKOMENTAR`,`IDPOST`,`USERNAME`)
                    VALUES      ('$comment','$date','$time',$id_post,'$username');
                ";
        $conn->query($query);
        return mysqli_affected_rows($conn); //Mengembalikan sebuah value 1 jika berhasil dan -1 jika tidak berhasil
    }
    if( isset($_POST['comment_it']) )
    {
        if( insert($_POST) > 0 )
        {
            unset($_POST['i_komen']);
            unset($_POST['comment_it']);
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