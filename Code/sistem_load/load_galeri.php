    <!-- Image Account -->
    <img id="imageaccount" src="Image/icon/accountblack.png" width="150px"><br>

    <!-- Username Account -->
    <h1 id="username"><?php echo $id;?></h1>

    <!--My Collection -->
    <h1 id="collection">My Collection Art</h1><br><br>

    <!--Image Databas -->
		<?php  
      $num_rows = mysqli_num_rows(mysqli_query($conn,$sqlPost));
      
        ####### Fetch Results From Table ########
        $result = mysqli_query($conn,$sqlPost);
        while($row = mysqli_fetch_array($result)){
          $id_post=$row['IDPOST'];
          $mygambar=$row['GAMBAR'];
          echo "
                <div class='litebox resizeImage' style='display: inline-block;'>
                  <a href='focus-layoutv2.php?postid=".$id_post."' target='_self' data-litebox-group='group-1' style='text-decoration: none;'>
                    <img src='".$mygambar."' class='resizeImage'/>
                  </a>
              ";
          if(strcmp($row['USERNAME'], $_SESSION['username'])==0){
            echo"   
                    <a href='updatePost.php?postid=".$id_post."'><button type='button' class='btn btn-primary tombol'>Edit</button></a>
                    <a href='deletePost.php?postid=".$id_post."'><button type='button' class='btn btn-primary tombol'>Delete</button></a>
                  </div>
            ";
          }else{
            echo "
                  <a style='visibility: hidden;' href='updatePost.php?postid=".$id_post."'><button type='button' class='btn btn-primary tombol'>Edit</button></a>
                  <a style='visibility: hidden;' href='deletePost.php?postid=".$id_post."'><button type='button' class='btn btn-primary tombol'>Delete</button></a>
                </div>
                ";
          }
        }
		?>	