<?php  
        include "conn.php";

        $sql = "SELECT * FROM post";
        $num_rows = mysqli_num_rows(mysqli_query($conn,$sql));		
        ####### Fetch Results From Table ########

        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($result)){
                $mygambar=$row['GAMBAR'];
                //echo("<div><p>Hi</p></div>");
                echo "<a href='$mygambar' target='_self' class='inline-block litebox' data-litebox-group='group-1'><img src='$mygambar' class='inline-block resizeImage'/></a> ";
        } 
?>