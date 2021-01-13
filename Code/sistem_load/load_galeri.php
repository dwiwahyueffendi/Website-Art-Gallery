    <!-- Image Account -->
    <img id="imageaccount" src="Image/icon/accountblack.png" width="150px"><br>

    <!-- Username Account -->
		<?php  
      $resultUsername = mysqli_query($conn,$sqlUsername);
      while($data = mysqli_fetch_array($resultUsername)){
		?>
    <h1 id="username"><?php echo $data["USERNAME"];}?></h1>

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
		?>	
    <div class="litebox resizeImage" style="display: inline-block;">
      <a href='focus-layoutv2.php?postid=<?php echo $id_post;?>' target="_self" data-litebox-group='group-1' style="text-decoration: none;">
        <img src='<?php echo $mygambar; ?>' class='resizeImage'/>
      </a>
      <?php
        if(isset($_REQUEST['username']))
        {
          if($id == $_SESSION['username'])
          {
      ?>
            <a href="updatePost.php?postid=<?php echo $id_post; ?>"><button type="button" class="btn btn-primary tombol">Edit</button></a>
            <a href="deletePost.php?postid=<?php echo $id_post; ?>"><button type="button" class="btn btn-primary tombol">Delete</button></a>
      <?php
          }
          else
          {
      ?>
            <style>
              .tombol
              {
                visibility: hidden;
              }
            </style>
            <a href="updatePost.php?postid=<?php echo $id_post; ?>"><button type="button" class="btn btn-primary tombol">Edit</button></a>
            <a href="deletePost.php?postid=<?php echo $id_post; ?>"><button type="button" class="btn btn-primary tombol">Delete</button></a>
      <?php      
          }
        }
      ?>
    </div>
		<?php } ?>